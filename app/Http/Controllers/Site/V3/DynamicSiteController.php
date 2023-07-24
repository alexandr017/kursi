<?php

namespace App\Http\Controllers\Site\V3;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DynamicSiteController extends Controller
{
    public function render()
    {
        $currentPath = \Request::path();
        $resource = \DB::table('urls')->where(['url' => $currentPath])->first();

        if($resource != null){
            $class = match($resource->section_type) {
                1 => '\App\Http\Controllers\Site\V3\DynamicPages\PagesController',
                2 => '\App\Http\Controllers\Site\V3\DynamicPages\PostCategoriesController',
                3 => '\App\Http\Controllers\Site\V3\DynamicPages\PostsController',
                4 => '\App\Http\Controllers\Site\V3\DynamicPages\EmployeeController',
                5 => '\App\Http\Controllers\Site\V3\DynamicPages\CompanyController',
                6 => '\App\Http\Controllers\Site\V3\DynamicPages\ListingController',
                // todo
                default => abort(404),
            };
            return (new $class())->render($resource->section_id);

        } else {
            $currentPath = preg_replace('/\/$/', '', $currentPath);

            if(str_contains($currentPath, '/amp/page')){
                $currentPath = str_replace('/amp', '', $currentPath);
                $currentPathArr = explode('/', $currentPath);
                $page = $currentPathArr[count($currentPathArr)-1];
                $action = str_replace('/page/'.$page, '', $currentPath);
                $resource = $this->getUrlType($action);
                if($resource!=null){
                    switch ($resource->section_type) {
                        case '7': return $init->getPosts($resource->section_id,$page,true);

                        default: break;
                    }
                }
            } elseif(strstr($currentPath,'/amp')){

                if(substr_count($currentPath, '/amp') > 1){
                    abort(404);
                }
                if(strstr($currentPath,'/amp/')){
                    abort(404);
                }

                $currentPath = str_replace('/amp', '', $currentPath);
                $resource = $this->getUrlType($currentPath);
                //ddd($resource);

                if($resource!=null){
                    switch ($resource->section_type) {
                        case '2': return $init->getParentListig($resource->section_id,true);
                        case '3': return $init->getChildrenListig($resource->section_id,true);
                        case '5': return $init->getCompany($resource->section_id,true);


                        default: break;
                    }
                }


            } elseif(strstr($currentPath,'/page')){
                $currentPathArr = explode('/', $currentPath);
                $page = $currentPathArr[count($currentPathArr)-1];
                $action = str_replace('/page/'.$page, '', $currentPath);
                $resource = $this->getUrlType($action);
                if($resource!=null){
                    switch ($resource->section_type) {
                        case '7': return $init->getPosts($resource->section_id,$page);

                        default: break;
                    }
                }
            }

            $hideLink = HideLinks::where(['in'=>$resUrl])->first();

            if($hideLink != null){

                $hideLink = hideLinks::find($hideLink->id);
                $hideLink->increment('clicks');
                if(Cache::has('hide_links')) Cache::forget('hide_links');
                $hideLinkTime = new HideLinkTimes();
                $hideLinkTime->hlid = $hideLink->id;
                $hideLinkTime->save();


                // добавление адреса страницы с которой был клик
                // и доменного имени с которого пришел клиент
                if (strstr($hideLink->out, 'vsezaimyonline.click')) {
                    $prevLink = URL::previous();
                    $vzoReferrer = str_replace('https://vsezaimyonline.ru/', '' , $prevLink);
                    $vzoReferrer = str_replace('/', '+' , $vzoReferrer);
                    //ddd($prevLink, $_SERVER);
                    $hideLink->out = (strstr($hideLink->out, '?'))
                        ? $hideLink->out . '&page=' . $vzoReferrer
                        : $hideLink->out . '?page=' . $vzoReferrer;



                    if ($REDEFINED_REFERRER_DOMAIN!= null) {
                        $hideLink->out = $hideLink->out . '&ref=' . clear_data($REDEFINED_REFERRER_DOMAIN);
                    } elseif (isset($_COOKIE['REFERRER_DOMAIN'])) {
                        $hideLink->out = $hideLink->out . '&ref=' . clear_data($_COOKIE['REFERRER_DOMAIN']);
                    }

                    if (isset($_GET)) {
                        if (isset($_GET['page'])) {
                            //ddd('from turbo', $_GET['page']);
                            $hideLink->out = (strstr($hideLink->out, '?'))
                                ? $hideLink->out . '&page=' . clear_data($_GET['page']) . '&ref=ya-turbo'
                                : $hideLink->out . '?page=' . clear_data($_GET['page']) . '&ref=ya-turbo';
                        }
                    }

                    if (isset($_SERVER['QUERY_STRING'])) {
                        $hideLink->out .= '&' . $_SERVER['QUERY_STRING'];
                    }

                    // РЕГЛАМЕНТ здесь неоходимо поменять out на straight
                    return redirect($hideLink->out, $hideLink->redirect_type); // !!!!!!

                }

                // РЕГЛАМЕНТ если места выше мало, то можно и здесь
                return redirect($hideLink->out, $hideLink->redirect_type); // !!!!!!!!
            }

            abort(404);
        }

        dd($currentPath);
    }
}
