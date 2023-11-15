<?php

namespace App\Http\Controllers;

use App\Models\Companies\SchoolReview;
use App\Models\Courses\Course;
use App\Models\Courses\CourseTag;
use App\Models\History\History;
use App\Models\Listing\Listing;
use App\Models\Listing\ListingCourse;
use App\Models\PostComments\PostComment;
use App\Models\Tags\Tag;
use Carbon\Carbon;
use App\Models\Posts\Post;
use App\Models\Posts\PostCategory;
use App\Models\Urls\Url;
use App\Models\Team\Employee;
use App\Models\Companies\Company;
use Illuminate\Support\Collection;
use Str;
use Symfony\Component\DomCrawler\Crawler;
use Throwable;

class ImportController extends Controller
{
    private Collection $employes;
    private Collection $listings;
    private array $oldLisingCourses;

    const SECTION_LISTING_TYPE_ID = 6;

    public function runBlog()
    {
        //$file = $_SERVER['DOCUMENT_ROOT'] . '/../storage/import/blog.xml';
        $file = storage_path('/import-14-11/posts.xml');
        $xmlStr = file_get_contents($file);
        $xmlObj = simplexml_load_string($xmlStr);

        define('SECTION_POST_CATEGORY_TYPE_ID', 2);
        define('SECTION_POST_TYPE_ID', 3);

        $oldCategoryIdToNewID = [];

        //DB::transaction(function() use($fileTable, $SKIP_ROWS, $TAKE_ROWS) {

        $categories = $xmlObj->Классификатор->Группы->Группа;
        foreach ($categories as $item) {

            $data = [
                'title' => (string) $item->НаследуемыеШаблоны->Шаблон[0]->Значение,
                'meta_description' => (string) $item->НаследуемыеШаблоны->Шаблон[1]->Значение,
                'h1' => (string) (!is_null($item->НаследуемыеШаблоны->Шаблон[2]) ? $item->НаследуемыеШаблоны->Шаблон[2]->Значение : $item->ЗначенияСвойств->ЗначенияСвойства->Значение),
                'breadcrumbs' => '', // todo
                'content' => (string) $item->Описание,
                'status' => $item->БитриксАктивность == 'true' ? 1: 0,
                'sort_order' => (integer)$item->БитриксСортировка,
                'old_id' => (int) $item->Ид
            ];

            $category = new PostCategory($data);
            $category->save();

            $alias = 'znaniya/' . (string) $item->БитриксКод;

            $oldCategoryIdToNewID[(int) $item->Ид] = ['id' => $category->id, 'alias' => $alias];


            $url = new Url([
                'url' => $alias,
                'section_type' => SECTION_POST_CATEGORY_TYPE_ID,
                'section_id' => $category->id
            ]);
            $url->save();

        }

        $employees = Employee::query()->get();

        $posts = $xmlObj->Каталог->Товары->Товар;
        foreach ($posts as $item) {
            $content = (string) $item->ЗначенияСвойств->ЗначенияСвойства[6]->Значение;
            $new  = preg_replace('#<script(.*?)>(.*?)</script>#is', '', $content);

            $crawler = new Crawler();
            $crawler->addHtmlContent($new);

            $imgElements = $crawler->filter('img')->extract(['src']);

            foreach ($imgElements as $imgElement) {
                $newSrc = '/images/posts/others/' . basename($imgElement);

                if (empty($imgElement)) {
                    continue;
                }


//                copy(substr($imgElement, 1), 'public' . $newSrc);

                $content = str_replace($imgElement, $newSrc, $content);
            }

            $content = str_replace('/local/templates/kursi/img/video_play.svg', '/images/system/video_play.svg', $content);

            if ((string)$item->НаследуемыеШаблоны->Шаблон[2]->Ид  == 'ELEMENT_META_DESCRIPTION') {
                $description = (string)$item->НаследуемыеШаблоны->Шаблон[2]->Значение;
            } elseif (isset($item->НаследуемыеШаблоны->Шаблон[3]->Ид) && (string)$item->НаследуемыеШаблоны->Шаблон[3]->Ид  == 'ELEMENT_META_DESCRIPTION') {
                $description = (string)$item->НаследуемыеШаблоны->Шаблон[3]->Значение;
            } else {
                $description = (string) $item->НаследуемыеШаблоны->Шаблон[1]->Значение;
            }

            if ((string)$item->НаследуемыеШаблоны->Шаблон[2]->Ид  == 'ELEMENT_META_TITLE') {
                $title = (string)$item->НаследуемыеШаблоны->Шаблон[2]->Значение;
            } elseif (isset($item->НаследуемыеШаблоны->Шаблон[3]->Ид) && (string)$item->НаследуемыеШаблоны->Шаблон[3]->Ид  == 'ELEMENT_META_TITLE') {
                $title = (string)$item->НаследуемыеШаблоны->Шаблон[3]->Значение;
            } else {
                $title = (string) $item->НаследуемыеШаблоны->Шаблон[0]->Значение;
            }

            $data = [
                'category_id' => $oldCategoryIdToNewID[(int) $item->Группы->Ид]['id'],
                'h1' => (string) $item->Наименование,
                'meta_description' => $description,
                'title' => $title,
                'breadcrumbs' => '', // todo
                'preview' => '/images/posts/previews/' . Str::slug((string) $item->НаследуемыеШаблоны->Шаблон[2]->Значение) . '.webp',
                'lead' => (string) $item->ЗначенияСвойств->ЗначенияСвойства[5]->Значение,
                'content' => (string) $content,
                'author_id' => $employees->where('old_id', (string)$item->ЗначенияСвойств->ЗначенияСвойства[8]->Значение)->first()?->id ?? 1,
                'status' => (string)$item->ЗначенияСвойств->ЗначенияСвойства[0]->Значение == 'true' ? 1: 0,
                'rating_value' => (string) $item->ЗначенияСвойств->ЗначенияСвойства[11]->Значение,
                'rating_count' => (string) $item->ЗначенияСвойств->ЗначенияСвойства[10]->Значение,
                'old_id' => (string) $item->Ид,
                'created_at' => (string)$item->ЗначенияСвойств->ЗначенияСвойства[14]->Значение ?
                    Carbon::parse((string)$item->ЗначенияСвойств->ЗначенияСвойства[14]->Значение)
                    : Carbon::parse(__('post-create-manual-date.' . (string) $item->Ид) ?? Carbon::now()),
                // todo дата создания и публикаци
            ];

//            $oldPath = str_replace( 'res_files', 'upload', (string)$item->Картинка);

//            try {
//                copy($oldPath, 'public' . $data['preview']);
//            } catch (Throwable) {
//                copy('upload/' . $oldPath, 'public' . $data['preview']);
//            }

            $post = new Post($data);
            $post->save();

            $alias = $oldCategoryIdToNewID[(int) $item->Группы->Ид]['alias'] . '/' . (string) $item->ЗначенияСвойств->ЗначенияСвойства[1]->Значение;

            $url = new Url([
                'url' => $alias,
                'section_type' => SECTION_POST_TYPE_ID,
                'section_id' => $post->id
            ]);
            $url->save();


        }

        //});
    }


    public function runEmployee()
    {
        $file = storage_path('/import-14-11/employees.xml');
        $xmlStr = file_get_contents($file);
        $xmlObj = simplexml_load_string($xmlStr);

        define('SECTION_EMPLOYEE_TYPE_ID', 4);

        $employees = $xmlObj->Каталог->Товары->Товар;

        foreach ($employees  as $item) {
            $content = (string) $item->ЗначенияСвойств->ЗначенияСвойства[6]->Значение;
            $new  = preg_replace('#<script(.*?)>(.*?)</script>#is', '', $content);

            $crawler = new Crawler();
            $crawler->addHtmlContent($new);

            $imgElements = $crawler->filter('img')->extract(['src']);

            foreach ($imgElements as $imgElement) {
                $newSrc = '/images/employees/others/' . basename($imgElement);

                if (empty($imgElement)) {
                    continue;
                }

//                copy(substr($imgElement, 1), 'public' . $newSrc);

                $content = str_replace($imgElement, $newSrc, $content);
            }

            $content = str_replace('/local/templates/kursi/img/video_play.svg', '/images/system/video_play.svg', $content);

            preg_match_all('#\bhttps?://[^,\s()<>]+(?:\([\w\d]+\)|([^,[:punct:]\s]|/))#', (string) $item->ЗначенияСвойств->ЗначенияСвойства[9]->Значение, $match);
            $vkLink = (isset($match[0][0])) ? $match[0][0] : null;

            preg_match_all('/[a-z0-9_\-\+\.]+@[a-z0-9\-]+\.([a-z]{2,4})(?:\.[a-z]{2})?/i', (string) $item->ЗначенияСвойств->ЗначенияСвойства[10]->Значение, $match);
            $email = (isset($match[0][0])) ? $match[0][0] : null;

            $data = [
                'name' => (string) $item->Наименование,
                'photo' => '/images/employees/' . \Str::slug((string) $item->Наименование) . '.webp',
                'title' => (string) $item->НаследуемыеШаблоны->Шаблон[0]->Значение,
                'meta_description' => (string) $item->НаследуемыеШаблоны->Шаблон[1]->Значение,
                'h1' => (string) $item->НаследуемыеШаблоны->Шаблон[2]->Значение,
                'breadcrumbs' => 'Сотрудники@about\r\n' . (string) $item->Наименование,
                'lead' => str_replace('&nbsp;', ' ',(string) $item->ЗначенияСвойств->ЗначенияСвойства[5]->Значение),
                'content' => $content,
                'old_id' => (int) $item->Ид,
                'status' => (string)$item->ЗначенияСвойств->ЗначенияСвойства[0]->Значение == 'true' ? 1: 0,
                'rating_value' => (float) $item->ЗначенияСвойств->ЗначенияСвойства[12]->Значение,
                'rating_count' => (int) $item->ЗначенияСвойств->ЗначенияСвойства[14]->Значение,
                'rating_sum' => (float) $item->ЗначенияСвойств->ЗначенияСвойства[13]->Значение,
                'job' => (string) $item->ЗначенияСвойств->ЗначенияСвойства[8]->Значение,
                'email' => $email,
                'vk_link' => $vkLink,
                'telegram_link' => null,
                'education' => (string) $item->ЗначенияСвойств->ЗначенияСвойства[11]->Значение,
                'sort_order'  => (int) $item->ЗначенияСвойств->ЗначенияСвойства[2]->Значение
            ];

            $employee = new Employee($data);
            $employee->save();

            $alias =  'about/team/' . (string) $item->ЗначенияСвойств->ЗначенияСвойства[1]->Значение;

            $url = new Url([
                'url' => $alias,
                'section_type' => SECTION_EMPLOYEE_TYPE_ID,
                'section_id' => $employee->id
            ]);
            $url->save();
        }


    }


    public function runCompanies()
    {
        $file = storage_path('/import-14-11/companies.xml');
        $xmlStr = file_get_contents($file);
        $xmlObj = simplexml_load_string($xmlStr);

        define('SECTION_COMPANIES_TYPE_ID', 5);

        $companies = $xmlObj->Каталог->Товары->Товар;


        foreach ($companies  as $item) {
            // todo для телефона дописать регулярку
            preg_match('/[+]?\d{1,3} \(\d{3}\) \d{3}-\d{2}-\d{2}/', (string) $item->ЗначенияСвойств->ЗначенияСвойства[16]->Значение[0], $match);
            $phone = (isset($match[0])) ? $match[0] : null;


            preg_match_all('/[a-z0-9_\-\+\.]+@[a-z0-9\-]+\.([a-z]{2,4})(?:\.[a-z]{2})?/i', (string) $item->ЗначенияСвойств->ЗначенияСвойства[16]->Значение[1], $match);
            $email = (isset($match[0][0])) ? $match[0][0] : null;

            $data = [
                'name' => (string) $item->Наименование,
                'title' => (string) (isset($item->НаследуемыеШаблоны->Шаблон) ? $item->НаследуемыеШаблоны->Шаблон[0]->Значение : ''),
                'meta_description' => (string) (isset($item->НаследуемыеШаблоны->Шаблон) ? $item->НаследуемыеШаблоны->Шаблон[1]->Значение : ''),
                'h1' => (string) (isset($item->НаследуемыеШаблоны->Шаблон) ? $item->НаследуемыеШаблоны->Шаблон[2]->Значение : ''),
                'breadcrumbs' => '', // todo
                'sort_order' => (int) $item->ЗначенияСвойств->ЗначенияСвойства[2]->Значение,
                'lead' => (string) $item->ЗначенияСвойств->ЗначенияСвойства[5]->Значение,
                'content' => (string) $item->ЗначенияСвойств->ЗначенияСвойства[6]->Значение,
                'logo' => '/images/companies/' . Str::slug((string)$item->Наименование) . '.webp',
                'link' => $item->ЗначенияСвойств->ЗначенияСвойства[15]->Значение,
                'email' => $email,
                'hotline' => $phone,
                'old_id' => (int) $item->Ид,
                'status' => (string)$item->ЗначенияСвойств->ЗначенияСвойства[0]->Значение == 'true' ? 1: 0,
                'rating_value' => (float) $item->ЗначенияСвойств->ЗначенияСвойства[10]->Значение,
                'rating_count' => (int) $item->ЗначенияСвойств->ЗначенияСвойства[8]->Значение,


            ];

//            Я уже запустил и сохранил картинки. Это будем использовать только тогда, когда у нас будет новый xml file для импорта.
//            Нам нужно будет из  указанной директории очистить старые данные и запустить seeder для сохранения новых данных
//
//            try {
//                $oldPath   = 'upload/' . (string)$item->ЗначенияСвойств->ЗначенияСвойства[12]->Значение;
//                $newPath =  $data['logo'];
//                copy($oldPath, 'public' . $newPath);
//            } catch (Throwable $exception) {
//                $data['logo'] = null;
//            }


            $company = new Company($data);
            $company->save();

            $alias =  'schools/' . (string) $item->ЗначенияСвойств->ЗначенияСвойства[1]->Значение;

            $url = new Url([
                'url' => $alias,
                'section_type' => SECTION_COMPANIES_TYPE_ID,
                'section_id' => $company->id
            ]);
            $url->save();
        }
    }


    private function buildListings($value, $parentId = null, $alias = null)
    {
        $content = (string)$value->Описание;
        $new  = preg_replace('#<script(.*?)>(.*?)</script>#is', '', $content);

        $crawler = new Crawler();
        $crawler->addHtmlContent($new);

        $imgElements = $crawler->filter('img')->extract(['src']);

        foreach ($imgElements as $imgElement) {
            $newSrc = '/images/listings/others/' . basename($imgElement);

            if (empty($imgElement)) {
                continue;
            }

//            copy(substr($imgElement, 1), 'public' . $newSrc);

            $content = str_replace($imgElement, $newSrc, $content);
        }

        $content = str_replace('/local/templates/kursi/img/video_play.svg', '/images/system/video_play.svg', $content);

        $new = [
            'name' => (string)$value->Наименование[0],
            'photo' => '/images/listings/' . Str::slug((string)$value->ЗначенияСвойств->ЗначенияСвойства[3]->Значение) . '.webp',
            'title' => (string)$value->НаследуемыеШаблоны->Шаблон[2]->Значение,
            'description' => (string)$value->ЗначенияСвойств->ЗначенияСвойства[5]->Значение,
            'author_id' => $this->employes->where('old_id', (int)$value->ЗначенияСвойств->ЗначенияСвойства[4]->Значение)->first()?->id,
            'content' => $content,
            'status' => $value->БитриксАктивность == 'true' ? Listing::STATUS_ACTIVE: Listing::STATUS_INACTIVE,
            'slug' => (string)$value->БитриксКод,
            'rating_count' => (int)$value->ЗначенияСвойств->ЗначенияСвойства[7]->Значение,
            'rating_sum' => (float)$value->ЗначенияСвойств->ЗначенияСвойства[8]->Значение,
            'rating_value' => (float)$value->ЗначенияСвойств->ЗначенияСвойства[9]->Значение,
            'meta_title' => (string)$value->НаследуемыеШаблоны->Шаблон[0]->Значение,
            'meta_description' => (string)($value->НаследуемыеШаблоны->Шаблон[1]->Значение ?? $value->НаследуемыеШаблоны->Шаблон[3]->Значение),
            'h1' => (string)$value->ЗначенияСвойств->ЗначенияСвойства[3]->Значение,
            'breadcrumbs' => '', //ToDo: need to implement,
            'old_id' => (string)$value->Ид,
            'parent_id' => $parentId,
            'lead' => (string)$value->ЗначенияСвойств->ЗначенияСвойства[5]->Значение,
            'created_at' => Carbon::now(),
        ];

//      Я уже запустил и сохранил картинки. Это будем использовать только тогда, когда у нас будет новый xml file для импорта.
//      Нам нужно будет из  указанной директории очистить старые данные и запустить seeder для сохранения новых данных
//
//        try {
//            $oldPath   = 'upload/' . (string)$value->БитриксКартинкаДетальная;
//            $newPath =  $new['photo'];
//            copy($oldPath, 'public' . $newPath);
//        } catch (Throwable $exception) {
//            $new['photo'] = null;
//        }


        $listing = new Listing($new);
        $listing->save();

        $alias = is_null($alias) ? $listing->slug : $alias . '/'. $listing->slug;

        $url = new Url([
            'url' => $alias,
            'section_type' => self::SECTION_LISTING_TYPE_ID,
            'section_id' => $listing->id
        ]);
        $url->save();

        foreach ($value->ЗначенияСвойств->ЗначенияСвойства[10]->Значение as $listingCourse) {
            $newListingCourse = [
                'new_listing_id' => $listing->id,
                'sort' => (int)$listingCourse->SORT
            ];

            $this->oldLisingCourses[(int)$listingCourse->ID][] = $newListingCourse;
        }

        if (isset($value->Группы->Группа)) {
            foreach ($value->Группы->Группа as $newValue) {
                $this->buildListings($newValue, $listing->id, $alias);
            }
        }
    }
    public function runCourses()
    {
        $file = storage_path('/import-14-11/courses.xml');
        $xmlStr = file_get_contents($file);
        $xmlObj = simplexml_load_string($xmlStr);

        $now = Carbon::now();

        $this->listings = collect();
        $this->oldLisingCourses = [];
        $this->employes = Employee::query()->get();

        foreach ($xmlObj->Классификатор->Группы->Группа as $value) {
            $this->buildListings($value);
        }

        $companies = Company::query()->get();

        $courseTags = collect();
        $listingsCourses = collect();
        $tags = Tag::query()->get();

        foreach ($xmlObj->ПакетПредложений->Предложения->Предложение as $cource) {

            $newCourse = [
                'title' => (string)$cource->Наименование,
                'company_id' => $companies->where('old_id', (int)$cource->ЗначенияСвойств->ЗначенияСвойства[11]->Значение)->first()?->id,
                'external_id' => (int)$cource->ЗначенияСвойств->ЗначенияСвойства[12]->Значение ?: null,
                'statistics_link' => (string)$cource->ЗначенияСвойств->ЗначенияСвойства[26]->Значение,
                'affiliate_link' => (string)$cource->ЗначенияСвойств->ЗначенияСвойства[17]->Значение,
                'direct_link' => (string)$cource->ЗначенияСвойств->ЗначенияСвойства[1]->Значение,
                'status' => (string)$cource->ЗначенияСвойств->ЗначенияСвойства[0]->Значение == 'true' ? Course::STATUS_ACTIVE : Course::STATUS_INACTIVE,
                'duration' => (int)$cource->ЗначенияСвойств->ЗначенияСвойства[18]->Значение ?: 0,
                'duration_type' => (string)$cource->ЗначенияСвойств->ЗначенияСвойства[19]->Значение,
                'duration_in_hours' => (int)$cource->ЗначенияСвойств->ЗначенияСвойства[20]->Значение ?: 0,
                'reviews_count' =>  0, // Everywhere it is 0
                'cost' => ((int)$cource->ЗначенияСвойств->ЗначенияСвойства[13]->Значение && (int)$cource->ЗначенияСвойств->ЗначенияСвойства[15]->Значение)
                    ? (int)$cource->ЗначенияСвойств->ЗначенияСвойства[13]->Значение * 100 / (int)$cource->ЗначенияСвойств->ЗначенияСвойства[15]->Значение
                    : ((int)$cource->ЗначенияСвойств->ЗначенияСвойства[13]->Значение ?: 0),
                'sale_cost' => (int)$cource->ЗначенияСвойств->ЗначенияСвойства[13]->Значение ?: 0,
                'sale_value' => (int)$cource->ЗначенияСвойств->ЗначенияСвойства[15]->Значение ?: 0,
                'installment_period' => (int)$cource->ЗначенияСвойств->ЗначенияСвойства[14]->Значение ?: 0,
                'installment_payment' => (int)$cource->ЗначенияСвойств->ЗначенияСвойства[16]->Значение ?: 0,
                'currency' => (string)$cource->Цены->Цена?->Валюта ?: 'RUB',
                'is_cost_by_query' => 0, // ToDo: Need to implement;
                'created_at' => $now,
                'old_id' => (int)$cource->Ид,
                'is_popular' => (string)$cource->ЗначенияСвойств->ЗначенияСвойства[23]->Значение == 'YES',
                'has_promotion' => (string)$cource->ЗначенияСвойств->ЗначенияСвойства[24]->Значение == 'YES',
                'is_best' => (string)$cource->ЗначенияСвойств->ЗначенияСвойства[25]->Значение == 'YES',
            ];

            $course = new Course($newCourse);
            $course->save();

            foreach ((array)$cource->ЗначенияСвойств->ЗначенияСвойства[22]->Значение as $tag) {
                $courseTags->push([
                    'tag_id' => $tags->where('old_id', $tag)->first()->id,
                    'course_id' => $course->id,
                ]);
            }

            $listingCoursesForSort = $this->oldLisingCourses[$course->old_id] ?? [];

            foreach ($listingCoursesForSort as $listingCourseForSort) {
                $listingsCourses->push([
                    'course_id' => $course->id,
                    'listing_id' => $listingCourseForSort['new_listing_id'],
                    'sort' => $listingCourseForSort['sort'],
                ]);
            }
        }

        $courseTags->chunk(500)->each(function ($items) {
            CourseTag::query()->insert($items->toArray());
        });

        $listingsCourses->chunk(500)->each(function ($items) {
            ListingCourse::query()->insert($items->toArray());
        });
    }

    public function runComments()
    {
        $file = storage_path('/import-30-08/b_blog_comment.xml');
        $xmlStr = file_get_contents($file);

        $xmlObj = simplexml_load_string($xmlStr);

        $comments = json_decode(json_encode($xmlObj), true);
        $comments = collect($comments['database']['table']);

        $postsIds = $comments->pluck('column.2')->toArray();
        $posts = Post::query()->whereIn('old_id', $postsIds)->get();

        $data = $comments->map(function ($comment, $key) use ($posts) {

            $item = $comment['column'];
            $post = $posts->where('old_id', $item[2])->first();

            if (is_null($post)) {
                return false;
            }

            return [
                'id' => ++$key,
                'post_id' => $post->id,
                'parent_id' => $item[3] == 'NULL'? null :  $item[3],
                'user_id' => null, // ToDo: Need to implement after users sync;
                'name' => $item[6] == 'NULL' ? 'Unknown name' :  $item[6],
                'email' => $item[7] == 'NULL' ? 'Unknown email' :  $item[7],
                'created_at' => $item[10],
                'status' => $item[13] == 'P' ? PostComment::STATUS_ACTIVATED: PostComment::STATUS_MODERATION,
                'content' => $item[12],
                'old_id' => $item[0],
            ];
        })->reject(function ($item) {
            return !$item;
        });

        $data = $data->transform(function ($item) use ($data) {
            if ($item['parent_id']) {
                $parent = $data->where('old_id', $item['parent_id'])->first();
                $item['parent_id'] = $parent['id'];
            }

            return $item;
        });


        PostComment::query()->insert($data->toArray());
    }

    public function runTags(): void
    {
        $now = Carbon::now();

        $tags = [
            [
                'old_id' => 1,
                'name' => 'Чат',
                'image' => '/images/tags/chat.svg',
                'created_at' => $now
            ],
            [
                'old_id' => 2,
                'name' => 'Помощь с трудоустройством',
                'image' => '/images/tags/pomosch_v_trudoustroystve.svg',
                'created_at' => $now
            ],
            [
                'old_id' => 3,
                'name' => 'Сертификат',
                'image' => '/images/tags/sertifikat.svg',
                'created_at' => $now
            ],
            [
                'old_id' => 4,
                'name' => 'Рассрочка',
                'image' => '/images/tags/rassrochka.svg',
                'created_at' => $now
            ],
            [
                'old_id' => 5,
                'name' => 'Продвинутым',
                'image' => '/images/tags/prodvinutym.svg',
                'created_at' => $now
            ],
            [
                'old_id' => 6,
                'name' => 'Пробный период',
                'image' => '/images/tags/probnyy_period.svg',
                'created_at' => $now
            ],
            [
                'old_id' => 7,
                'name' => 'Новичкам',
                'image' => '/images/tags/novichok.svg',
                'created_at' => $now
            ],
            [
                'old_id' => 8,
                'name' => 'Наставник',
                'image' => '/images/tags/nastavnik.svg',
                'created_at' => $now
            ],
            [
                'old_id' => 9,
                'name' => 'Тарифы',
                'image' => '/images/tags/tarify.svg',
                'created_at' => $now
            ],
            [
                'old_id' => 10,
                'name' => 'Для детей',
                'image' => '/images/tags/dlya_detej.svg',
                'created_at' => $now
            ],
            [
                'old_id' => 11,
                'name' => 'Гарантия трудоустройства',
                'image' => '/images/tags/garantiya_trudoustrojstva.svg',
                'created_at' => $now
            ],
            [
                'old_id' => 12,
                'name' => 'Очно',
                'image' => '/images/tags/ochno.svg',
                'created_at' => $now
            ],
        ];

        Tag::query()->insert($tags);
    }

    public function runSchoolsReviews()
    {
        $csvFilePath = storage_path('/import-14-11/company-reviews.csv');
        $csvData = file_get_contents($csvFilePath);
        $rows = explode("\n", $csvData);
        $reviewSchools = collect();

        foreach ($rows as $row) {
            $rowData = str_getcsv($row, ';', '"');
            if (count($rowData) < 19) {
                continue;
            }

            $reviewSchools->push([
                'review_id' => $rowData[0],
                'school_id' => $rowData[15],
            ]);
        }

        $file = storage_path('/import-14-11/company-reviews.xml');
        $xmlStr = file_get_contents($file);
        $xmlObj = simplexml_load_string($xmlStr);

        $schools = Company::query()->get();

        $reviews = collect();
        foreach ($xmlObj->Каталог->Товары->Товар as $review) {
            $new = [
                'title' => (string)$review->Наименование,
                'old_id' => (int)$review->Ид,
                'status' => (string)$review->ЗначенияСвойств->ЗначенияСвойства[0]->Значение == 'true' ? 1 : 0,
                'character_code' => (string)$review->ЗначенияСвойств->ЗначенияСвойства[1]->Значение ?: null,
                'sort' => (int)$review->ЗначенияСвойств->ЗначенияСвойства[2]->Значение,
                'pluses' => (string)$review->ЗначенияСвойств->ЗначенияСвойства[8]->Значение,
                'minuses' => (string)$review->ЗначенияСвойств->ЗначенияСвойства[9]->Значение,
                'content' => (string)$review->ЗначенияСвойств->ЗначенияСвойства[10]->Значение,
                'rating' => (float)$review->ЗначенияСвойств->ЗначенияСвойства[11]->Значение,
                'author_name' => (string)$review->ЗначенияСвойств->ЗначенияСвойства[12]->Значение,
                'code' => (int)$review->ЗначенияСвойств->ЗначенияСвойства[13]->Значение ?: null,
                'created_at' => (string)$review->ЗначенияСвойств->ЗначенияСвойства[15]->Значение ?
                    Carbon::parse((string)$review->ЗначенияСвойств->ЗначенияСвойства[15]->Значение)
                    : null,
            ];

            $schoolOldId = $reviewSchools->where('review_id', $new['old_id'])->first()['school_id'];
            $school = $schools->where('old_id', $schoolOldId)->first();

            if (is_null($school)) {
                continue;
            }

            $new['school_id'] = $school->id;

            try {
                $new['content'] = unserialize($new['content']['TEXT']);
            } catch (Throwable) {
                try {
                    $new['content'] = $this->clearReviews($new['content']);
                } catch (Throwable) {
                    continue;
                }
            }

            $new['minuses'] = $this->clearReviews($new['minuses']);
            $new['pluses'] = $this->clearReviews($new['pluses']);

            $reviews->push($new);
        }

        $reviews->chunk(500)->each(function ($items) {
            SchoolReview::query()->insert($items->toArray());
        });
    }

    private function clearReviews(string $text)
    {
        preg_match('/"TEXT";s:(\d+):"([^"]+)"/', $text, $matches);

        if (count($matches) === 3) {
            $text = html_entity_decode($matches[2]);

            if (preg_match('/<[^>]*>/', $text) === 1) {
                $cleanedString = str_replace(["\n", "\t"], '', $text);
            } else {
                $cleanedString = $text;
            }
        } elseif (empty($matches)) {
            return null;
        } else {
            $cleanedString = $text;
        }

        return $cleanedString;
    }

    public function runHistory()
    {
        $data = [
            [
                'step' => 1,
                'main_preview' => '/images/history/history-step-1.png',
                'mini_preview' => '/images/history/history-step-1-mini.svg',
                'content' => 'Появилась идея создания образовательного агрегатора и был создан сайт litragramm.ru для проверки гипотез',
            ],
            [
                'step' => 2,
                'main_preview' => '/images/history/history-step-2.png',
                'mini_preview' => '/images/history/history-step-2-mini.svg',
                'content' => 'Начали формировать команду для работы над проектом',
            ],
            [
                'step' => 3,
                'main_preview' => '/images/history/history-step-3.png',
                'mini_preview' => '/images/history/history-step-3-mini.svg',
                'content' => 'Запустили соцсети: VK, YouTube, Inst, Telegram',
            ],
            [
                'step' => 4,
                'main_preview' => '/images/history/history-step-4.png',
                'mini_preview' => '/images/history/history-step-4-mini.svg',
                'content' => 'Куплен один из старейших образовательных доменов - kursy.ru',
            ],
            [
                'step' => 5,
                'main_preview' => '/images/history/history-step-5.svg',
                'mini_preview' => '/images/history/history-step-5-mini.svg',
                'content' => 'Опубликовали весь контент и запустили сайт',
            ],
        ];

        History::query()->insert($data);
    }

    public function setCorrectBreadcrumbs()
    {
        $postCategories = \DB::table('post_categories')->select('id')->whereNull('deleted_at')->get();
        foreach ($postCategories as $_postCategory) {
            $postCategory = \App\Models\Posts\PostCategory::find($_postCategory->id);
            $postCategory->breadcrumbs = "Статьи@znaniya
$postCategory->h1";
            $postCategory->save();
        }



        $postCategoriesRow = \DB::table('post_categories')
            ->leftJoin('urls', 'urls.section_id', 'post_categories.id')
            ->select('post_categories.id', 'urls.url', 'post_categories.h1')
            ->where(['urls.section_type' => 2])
            ->whereNull('post_categories.deleted_at')
            ->get();

        foreach ($postCategoriesRow as $item) {
            $postCategories[$item->id] = ['link' => $item->url, 'h1' => $item->h1];
        }

        $posts = \DB::table('posts')->select('id')->whereNull('deleted_at')->get();
        foreach ($posts as $_post) {
            $post = \App\Models\Posts\Post::find($_post->id);
            if (isset($postCategories[$post->category_id])) {
                $categoryBreadcrumbs = $postCategories[$post->category_id]['h1'] . '@'. $postCategories[$post->category_id]['link'];
                $post->breadcrumbs = "Статьи@znaniya
$categoryBreadcrumbs
$post->h1";
                $post->save();
            }
        }




        $employees = \DB::table('employees')->select('id')->whereNull('deleted_at')->get();
        foreach ($employees as $_employee) {
            $employee = \App\Models\Team\Employee::find($_employee->id);
            $employee->breadcrumbs = "Сотрудники@about
$employee->h1";
            $employee->save();
        }




        $companies = \DB::table('companies')->select('id')->whereNull('deleted_at')->get();
        foreach ($companies as $_company) {
            $company = \App\Models\Companies\Company::find($_company->id);
            $company->breadcrumbs = "Школы@schools
$company->h1";
            $company->save();
        }

        $listings = \DB::table('listings')
            ->leftJoin('urls', 'urls.section_id', 'listings.id')
            ->select('listings.id', 'urls.url')
            ->where(['urls.section_type' => 6])
            ->whereNull('listings.deleted_at')
            ->get();

        foreach ($listings as $_listing) {
            //if ('dlya-detej/shkola/olimpiady/programmirovanie/11-klass' == $_listing->url) {
            $breadcrumbs = '';
            $breadcrumbsSitemap = "Карта сайта@sitemap" . PHP_EOL . 'Все категории@sitemap' . PHP_EOL;
            $partsAlias = explode('/', $_listing->url);
            $tmpUrl = '';
            $lastElement = end($partsAlias);
            foreach ($partsAlias as $part) {
                $tmpUrl .= $tmpUrl == ''
                    ? $part
                    : '/' . $part;

                $listingTmp = \DB::table('listings')
                    ->leftJoin('urls', 'urls.section_id', 'listings.id')
                    ->select('listings.name')
                    ->where(['urls.section_type' => 6, 'urls.url' => $tmpUrl])
                    ->whereNull('listings.deleted_at')
                    ->first();

                if ($listingTmp == null) {
                    dd($partsAlias, $part);
                }
                if ($part != $lastElement) {
                    $breadcrumbs .= $listingTmp->name . '@' . $tmpUrl . PHP_EOL;
                    $breadcrumbsSitemap .= $listingTmp->name . '@' . 'sitemap/kursy/' . $tmpUrl . PHP_EOL;
                } else {
                    $breadcrumbs .= $listingTmp->name;
                    $breadcrumbsSitemap .= $listingTmp->name;
                }


            }
            //dd($breadcrumbs);

            $listing = \App\Models\Listing\Listing::find($_listing->id);
            $listing->breadcrumbs = $breadcrumbs;
            $listing->breadcrumbs_sitemap = $breadcrumbsSitemap;
            $listing->save();
            //}
            //$_listing =
        }

    }
}
