<?php

namespace App\Http\Controllers;

use App\Models\Companies\SchoolReview;
use App\Models\Courses\Course;
use App\Models\Courses\CourseTag;
use App\Models\Listing\Listing;
use App\Models\Listing\ListingCourse;
use App\Models\PostComments\PostComment;
use App\Models\Tags\Tag;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\Posts\Post;
use App\Models\Posts\PostCategory;
use App\Models\Urls\Url;
use App\Models\Team\Employee;
use App\Models\Companies\Company;
use Illuminate\Support\Collection;
use Illuminate\Support\Str;
use Throwable;

class ImportController extends Controller
{
    private Collection $employes;
    private Collection $listings;
    private Collection $oldLisingCourses;

    public function runBlog()
    {
        //$file = $_SERVER['DOCUMENT_ROOT'] . '/../storage/import/blog.xml';
        $file = storage_path('/import/blog.xml');
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
                    'h1' => (string) $item->НаследуемыеШаблоны->Шаблон[2]->Значение,
                    'breadcrumbs' => '', // todo
                    'content' => (string) $item->Описание,
                    'status' => 1,
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


            $posts = $xmlObj->Каталог->Товары->Товар;
            foreach ($posts as $item) {

                $data = [
                    'category_id' => $oldCategoryIdToNewID[(int) $item->Группы->Ид]['id'],
                    'title' => (string) $item->НаследуемыеШаблоны->Шаблон[0]->Значение,
                    'meta_description' => (string) $item->НаследуемыеШаблоны->Шаблон[1]->Значение,
                    'h1' => (string) $item->НаследуемыеШаблоны->Шаблон[2]->Значение,
                    'breadcrumbs' => '', // todo
                    'preview' => $item->Картинка, // todo копировать
                    'lead' => (string) $item->ЗначенияСвойств->ЗначенияСвойства[5]->Значение,
                    'content' => (string) $item->ЗначенияСвойств->ЗначенияСвойства[6]->Значение,
                    'author_id' => 1, // todo
                    'status' => 1, // todo
                    'rating_value' => (string) $item->ЗначенияСвойств->ЗначенияСвойства[11]->Значение,
                    'rating_count' => (string) $item->ЗначенияСвойств->ЗначенияСвойства[10]->Значение,
                    'old_id' => (string) $item->Ид
                    // todo дата создания и публикаци
                ];

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
        $file = storage_path('/import/employees.xml');
        $xmlStr = file_get_contents($file);
        $xmlObj = simplexml_load_string($xmlStr);

        define('SECTION_EMPLOYEE_TYPE_ID', 4);

        $employees = $xmlObj->Каталог->Товары->Товар;

        foreach ($employees  as $item) {
            preg_match_all('#\bhttps?://[^,\s()<>]+(?:\([\w\d]+\)|([^,[:punct:]\s]|/))#', (string) $item->ЗначенияСвойств->ЗначенияСвойства[9]->Значение, $match);
            $vkLink = (isset($match[0][0])) ? $match[0][0] : null;

            preg_match_all('/[a-z0-9_\-\+\.]+@[a-z0-9\-]+\.([a-z]{2,4})(?:\.[a-z]{2})?/i', (string) $item->ЗначенияСвойств->ЗначенияСвойства[10]->Значение, $match);
            $email = (isset($match[0][0])) ? $match[0][0] : null;

            $data = [
                'name' => (string) $item->Наименование,
                'photo' => '', // todo
                'title' => (string) $item->НаследуемыеШаблоны->Шаблон[0]->Значение,
                'meta_description' => (string) $item->НаследуемыеШаблоны->Шаблон[1]->Значение,
                'h1' => (string) $item->НаследуемыеШаблоны->Шаблон[2]->Значение,
                'breadcrumbs' => '', // todo
                'lead' => (string) $item->ЗначенияСвойств->ЗначенияСвойства[5]->Значение,
                'content' => (string) $item->ЗначенияСвойств->ЗначенияСвойства[6]->Значение,
                'old_id' => (int) $item->Ид,
                'status' => 1,
                'rating_value' => (string) $item->ЗначенияСвойств->ЗначенияСвойства[12]->Значение,
                'rating_count' => (string) $item->ЗначенияСвойств->ЗначенияСвойства[14]->Значение,
                'job' => (string) $item->ЗначенияСвойств->ЗначенияСвойства[8]->Значение,
                'email' => $email,
                'vk_link' => $vkLink,
                'telegram_link' => null,
                'education' => null, // todo скорее всего перенести руками
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
        $file = storage_path('/import/schools.xml');
        $xmlStr = file_get_contents($file);
        $xmlObj = simplexml_load_string($xmlStr);

        define('SECTION_COMPANIES_TYPE_ID', 5);

        $companies = $xmlObj->Каталог->Товары->Товар;


        foreach ($companies  as $item) {
            // todo для телефона дописать регулярку
            preg_match_all('/^\\+?\\d{1,4}?[-.\\s]?\\(?\\d{1,3}?\\)?[-.\\s]?\\d{1,4}[-.\\s]?\\d{1,4}[-.\\s]?\\d{1,9}$/', (string) $item->ЗначенияСвойств->ЗначенияСвойства[16]->Значение[0], $match);
            $phone = (isset($match[0][0])) ? $match[0][0] : null;


            preg_match_all('/[a-z0-9_\-\+\.]+@[a-z0-9\-]+\.([a-z]{2,4})(?:\.[a-z]{2})?/i', (string) $item->ЗначенияСвойств->ЗначенияСвойства[16]->Значение[1], $match);
            $email = (isset($match[0][0])) ? $match[0][0] : null;

            $data = [
                'name' => (string) $item->Наименование,
                'title' => (string) $item->НаследуемыеШаблоны->Шаблон[0]->Значение,
                'meta_description' => (string) $item->НаследуемыеШаблоны->Шаблон[1]->Значение,
                'h1' => (string) $item->НаследуемыеШаблоны->Шаблон[2]->Значение,
                'breadcrumbs' => '', // todo
                'sort_order' => (int) $item->ЗначенияСвойств->ЗначенияСвойства[2]->Значение,
                'lead' => (string) $item->ЗначенияСвойств->ЗначенияСвойства[5]->Значение,
                'content' => (string) $item->ЗначенияСвойств->ЗначенияСвойства[6]->Значение,
                'logo' => '', // todo
                'link' => (int)  $item->ЗначенияСвойств->ЗначенияСвойства[15]->Значение,
                'email' => $email,
                'hotline' => $phone, // todo ЗначенияСвойства номер 16
                'old_id' => (int) $item->Ид,
                'status' => 1,
                'rating_value' => (float) $item->ЗначенияСвойств->ЗначенияСвойства[10]->Значение,
                'rating_count' => (int) $item->ЗначенияСвойств->ЗначенияСвойства[8]->Значение,


            ];

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


    private function buildListings($value, $parentId = null)
    {
        $id  = Str::uuid()->toString();

        $new = [
            'id' => $id,
            'name' => (string)$value->Наименование[0],
            'title' => (string)$value->ЗначенияСвойств->ЗначенияСвойства[3]->Значение,
            'description' => (string)$value->ЗначенияСвойств->ЗначенияСвойства[5]->Значение,
            'author_id' => $this->employes->where('old_id', (int)$value->ЗначенияСвойств->ЗначенияСвойства[4]->Значение)->first()?->id,
            'content' => (string)$value->Описание,
            'status' => $value->БитриксАктивность == 'true' ? Listing::STATUS_ACTIVE: Listing::STATUS_INACTIVE,
            'slug' => (string)$value->БитриксКод,
            'rating_count' => (int)$value->ЗначенияСвойств->ЗначенияСвойства[7]->Значение,
            'rating_sum' => (float)$value->ЗначенияСвойств->ЗначенияСвойства[8]->Значение,
            'rating_value' => (float)$value->ЗначенияСвойств->ЗначенияСвойства[9]->Значение,
            'meta_title' => (string)$value->НаследуемыеШаблоны->Шаблон[0]->Значение,
            'meta_description' => (string)($value->НаследуемыеШаблоны->Шаблон[3]->Значение ?? $value->НаследуемыеШаблоны->Шаблон[1]->Значение),
            'h1' => (string)$value->НаследуемыеШаблоны->Шаблон[2]->Значение,
            'breadcrumbs' => '', //ToDo: need to implement,
            'old_id' => (string)$value->Ид,
            'parent_id' => $parentId,
            'lead' => 'lead',//ToDo: need to implement
            'created_at' => Carbon::now(),
        ];

        $this->listings->push($new);

        foreach ($value->ЗначенияСвойств->ЗначенияСвойства[10]->Значение as $listingCourse) {
            $newListingCourse = [
                'course_old_id' => (int)$listingCourse->ID,
                'course_new_id' => $id,
                'sort' => (int)$listingCourse->SORT
            ];

            $this->oldLisingCourses[(string)$value->Ид] = $newListingCourse;
        }

        if (isset($value->Группы->Группа)) {
            foreach ($value->Группы->Группа as $newValue) {
                $this->buildListings($newValue, $id);
            }
        }
    }
    public function runCourses()
    {
        $file = storage_path('/import/courses.xml');
        $xmlStr = file_get_contents($file);
        $xmlObj = simplexml_load_string($xmlStr);

        $now = Carbon::now();

        $this->listings = collect();
        $this->oldLisingCourses = collect();
        $this->employes = Employee::query()->get();

        foreach ($xmlObj->Классификатор->Группы->Группа as $value) {
            $this->buildListings($value);
        }

        Listing::query()->insert($this->listings->toArray());

        $companies = Company::query()->get();

        $courseTags = collect();
        $listingsCourses = collect();
        $courses = collect();
        $tags = Tag::query()->get();

        foreach ($xmlObj->ПакетПредложений->Предложения->Предложение as $cource) {

            $id = Str::uuid()->toString();

            foreach ((array)$cource->ЗначенияСвойств->ЗначенияСвойства[22]->Значение as $tag) {
                $courseTags->push([
                    'tag_id' => $tags->where('old_id', $tag)->first()->id,
                    'course_id' => $id,
                    'created_at' => $now,
                ]);
            }

            foreach ((array)$cource->Группы->Ид as $listingOldId) {
                $listingsCourses->push([
                    'course_id' => $id,
                    'listing_id' => $this->oldLisingCourses[$listingOldId]['course_new_id'],
                    'sort' => $this->oldLisingCourses[$listingOldId]['sort'],
                    'created_at' => $now,
                ]);
            }

            $newCourse = [
                'id' => $id,
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
            ];

            $courses->push($newCourse);
        }

        $courses->chunk(500)->each(function ($items) {
            Course::query()->insert($items->toArray());
        });

        $courseTags->chunk(500)->each(function ($items) {
            CourseTag::query()->insert($items->toArray());
        });

        $listingsCourses->chunk(500)->each(function ($items) {
            ListingCourse::query()->insert($items->toArray());
        });
    }

    public function runComments()
    {
        $file = storage_path('/import/b_blog_comment.xml');
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
              'created_at' => $now
          ],
          [
              'old_id' => 2,
              'name' => 'Помощь с трудоустройством',
              'created_at' => $now
          ],
          [
              'old_id' => 3,
              'name' => 'Сертификат',
              'created_at' => $now
          ],
          [
              'old_id' => 4,
              'name' => 'Рассрочка',
              'created_at' => $now
          ],
          [
              'old_id' => 5,
              'name' => 'Продвинутым',
              'created_at' => $now
          ],
          [
              'old_id' => 6,
              'name' => 'Пробный период',
              'created_at' => $now
          ],
          [
              'old_id' => 7,
              'name' => 'Новичкам',
              'created_at' => $now
          ],
          [
              'old_id' => 8,
              'name' => 'Наставник',
              'created_at' => $now
          ],
          [
              'old_id' => 9,
              'name' => 'Тарифы',
              'created_at' => $now
          ],
          [
              'old_id' => 10,
              'name' => 'Для детей',
              'created_at' => $now
          ],
          [
              'old_id' => 11,
              'name' => 'Гарантия трудоустройства',
              'created_at' => $now
          ],
          [
              'old_id' => 12,
              'name' => 'Очно',
              'created_at' => $now
          ],
        ];

        Tag::query()->insert($tags);
    }

    public function runSchoolsReviews()
    {
        $csvFilePath = storage_path('/import/schools_reviewes.csv');
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

        $file = storage_path('/import/schools_reviewes.xml');
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
}
