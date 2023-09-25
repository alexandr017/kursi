<?php

namespace App\Services\Breadcrumbs;

class BreadcrumbsConverter
{
    public static function put(string $url, string $h1) : string
    {
        $breadcrumbs = '';
        $partsAlias = explode('/', $url);

        if (count($partsAlias) == 1) {
            return $h1;
        }

        //$partsAlias = array_reverse($partsAlias);

        unset($partsAlias[count($partsAlias)-1]);

        $needUrl = implode('/', $partsAlias);


        $urlModel = \DB::table('urls')->where(['url' => $needUrl])->first();

        $class = match($urlModel->section_type) {
            1 => '\App\Models\Pages\Page',
            2 => '\App\Models\Posts\PostCategory',
            3 => '\App\Models\Post',
            4 => '\App\Models\Team\Employee',
            5 => '\App\Models\Companies\Company',
            6 => '\App\Models\Listing\Listing',
            default => null
        };

        $item = call_user_func($class .'::find', [$urlModel->section_id]);
        if (isset($item[0])) {
            $breadcrumbs = $item[0]->breadcrumbs;
            $breadcrumbs .= '@' . $needUrl . PHP_EOL;
            $breadcrumbs .= $h1;

            return $breadcrumbs;
        }

        return $breadcrumbs;
    }
}
