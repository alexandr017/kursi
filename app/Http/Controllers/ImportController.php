<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Posts\Post;
use App\Models\Posts\PostCategory;
use App\Models\Urls\Url;
use App\Models\Team\Employee;
use App\Models\Companies\Company;

class ImportController extends Controller
{
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


    public function runCourses()
    {

        $file = storage_path('/import/courses.xml');
        $xmlStr = file_get_contents($file);
        $xmlObj = simplexml_load_string($xmlStr);
        //$courses = $xmlObj->Каталог->Товары->Товар;

    }
}
