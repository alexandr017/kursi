<?php

if (! function_exists('emptyDataToNull')) {

    function emptyDataToNull(string|array $data) : string|array
    {
        if (is_array($data)) {
            foreach ($data as $key => $value) {
                if($value == '') {
                    $data[$key] = null;
                }
            }

        } elseif (gettype($data) == 'string') {
            if ($data == '') {
                $data = null;
            }
        }

        return $data;
    }
}


function getCanonical() {
    $url = URL::current();
    $canonical = preg_replace("/\/page\/\d/", '', $url);
    if(strstr($url,'page'))
        $canonical = preg_replace("/\d\d?\d?$/", '', $canonical);
    return $canonical;
}

function getCanonicalNext($pages) {
    if ($pages == 1) return 1;
    $url = URL::current();
    $url = preg_replace('/\/$/', '', $url);
    $urlArr = explode('/', $url);
    $page = (int) $urlArr[count($urlArr)-1];
    if ($page < $pages) {
        if($page == 0) {
            return $url . '/page/2';
        } else {
            return str_replace('/page/'.$page, '/page/'.($page+1), $url);
        }
    }
    return 1;
}

function getCanonicalPrev(){
    $url = URL::current();
    $url = preg_replace('/\/$/', '', $url);
    $urlArr = explode('/', $url);
    $page = (int) $urlArr[count($urlArr)-1];
    if ($page > 2) {
        return str_replace('/page/'.$page, '/page/'.($page-1), $url);
    } elseif($page == 2){
        return str_replace('/page/'.$page, '', $url);
    }
    return null;
}
