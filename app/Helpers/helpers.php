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


function getCanonical() : string
{
    $url = URL::current();

    $pos = strpos($url, 'page');

    if ($pos) {
        $url = substr($url, 0, $pos);
    }

    if (!str_ends_with($url, '/')) {
        $url .= '/';
    }

    return $url;
}

function getCanonicalNext(int $pages) : int|string
{
    $url = URL::current();
    if ($pages == 1) {
        if (str_contains($url, 'page/1')) {
            if (str_ends_with($url, '/')) {
                return $url;
            }
            return $url . '/';
        }
        return $url . '/page/1/';
    }

    $url = preg_replace('/\/$/', '', $url);
    $urlArr = explode('/', $url);
    $page = (int) $urlArr[count($urlArr)-1];
    if ($page < $pages) {
        if($page == 0) {
            return $url . '/page/2/';
        } else {
            return str_replace('/page/'.$page, '/page/'.($page+1) . '/', $url);
        }
    }

    if (str_contains($url, 'page')) {
        if (str_ends_with($url, '/')) {
            return $url;
        }
        return $url . '/';
    }

    return $url . '/page/1/';
}

function getCanonicalPrev() : null|int|string
{
    $url = URL::current();
    $url = preg_replace('/\/$/', '', $url);
    $urlArr = explode('/', $url);
    $page = (int) $urlArr[count($urlArr)-1];
    if ($page > 2) {
        return str_replace('/page/'.$page, '/page/'.($page-1) . '/', $url);
    } elseif($page == 2){
        return str_replace('/page/'.$page, '/', $url);
    }
    return null;
}

if (! function_exists('wordByCount')) {
    /**
     * @param  int $num
     * @param  array $words
     * @return string
     */
    function wordByCount(int $num, array $words) : string
    {
        $num = $num % 100;

        if ($num > 19) {
            $num = $num % 10;
        }

        switch ($num) {
            case 1: {
                return($words[0]);
            }
            case 2: case 3: case 4: {
            return($words[1]);
        }
            default: {
                return($words[2]);
            }
        }
    }
}


if (! function_exists('durationWord')) {
    /**
     * @param string $durationType
     * @param int $value
     * @return string
     */
    function durationWord(string $durationType, int $value) : string
    {
         return match($durationType) {
             'year' => wordByCount($value, ['год', 'года', 'лет']),
             'mounth' => wordByCount($value, ['месяц', 'месяца', 'месяцев']),
             'week' => wordByCount($value, ['неделя', 'недели', 'недель']),
             'day' => wordByCount($value, ['день', 'дня', 'дней']),
             'clock' => wordByCount($value, ['час', 'часа', 'часов']),
             'short_lesson', 'lesson' => wordByCount($value, ['урок', 'урока', 'уроков']),
             default => ''
         };

    }
}


function productStructuredDataCalculate(object $courses) : array
{
    $highPrice = 0;
    $lowPrice = 1000000;
    foreach ($courses as $course) {
        if ($course->cost < $lowPrice) {
            $lowPrice = $course->cost;
        }
        if ($course->cost > $highPrice) {
            $highPrice = $course->cost;
        }
    }

    return [$lowPrice, $highPrice];
}


function linkWithSlash(string|null $link) : string
{

    // убираем "/" на на конце если он уже есть
    $link = preg_replace('/\/$/', '', $link);

    // убираем домен из ссылки если это внутренняя ссылка (если встречается в строке наш же домен)
    $link = str_replace(\Request::root(), '', $link);

    // если ссылка очистилась от домена убираем "/" впереди (если он есть) чтобы наверянка добавить его впереди
    // чтобы исключить ситауции в относительных ссылках начинающихся с "//"
    if (! str_contains($link, '://')) {
        $link = preg_replace('/^\//', '', $link);
        $link = '/' . $link;
    }

    return $link . '/';
}



// функция для подключения верстки
//if (! function_exists('includeComponent')) {
//    function includeComponent(string $component, int $inFirstOrder = 0) : void
//    {
//        //$component = resource_path('views/design-system/v4/') . $component;
//        addDesignItemToGlobalScope($component, $inFirstOrder);
//    }
//}
//
//
//// функция для подключения натяжки
//if (! function_exists('includeModule')) {
//    function includeModule(string $component, int $inFirstOrder = 0) : void
//    {
//        //$component = resource_path('views/site/v3/modules') . $component;
//        addDesignItemToGlobalScope($component, $inFirstOrder);
//    }
//}



function includeComponent(string $component, int $inFirstOrder = 0) : void
{
    if (!isset($GLOBALS['m'])) {
        $GLOBALS['m'] = [];
        $GLOBALS['m']['first_order'] = [];
        $GLOBALS['m']['default_order'] = [];
    }

    if (!in_array($component, $GLOBALS ['m']['default_order'])) {
        if ($inFirstOrder) {
            $GLOBALS['m']['first_order'] [] = $component;
        } else {
            $GLOBALS['m']['default_order'] [] = $component;
        }

        $htmlFile = $component . '/index.blade.php';
        if (file_exists(resource_path('views/design-system/v4/') . $htmlFile)) {
            view('design-system.v4.' . $component . '.index')->render();
        }
    }
}


if (! function_exists('isAmpPage')) {
    /**
     *
     * @return boolean
     */
    function isAmpPage() : bool
    {
        $current_url = strtok($_SERVER['REQUEST_URI'], '?');

        if (preg_match('/\/amp\/page$/',$current_url) || preg_match('/\/amp$/',$current_url)) {
            return true;
        }

        return false;
    }
}

if (! function_exists('isTurboPage')) {
    /**
     *
     * @return boolean
     */
    function isTurboPage() : bool
    {
        $current_url = $_SERVER['REQUEST_URI'];

        if (preg_match('/\/yandex\/turbo\//',$current_url)) {
            return true;
        }

        return false;
    }
}


if (! function_exists('isMobileDevice')) {
    /**
     *
     * @return boolean
     */
    function isMobileDevice()
    {
        return false;

        if (!isset($_SERVER['HTTP_USER_AGENT'])) {
            return false;
        }
        $mobile_agent_array = array('ipad', 'iphone', 'android', 'pocket', 'palm', 'windows ce', 'windowsce', 'cellphone', 'opera mobi', 'ipod', 'small', 'sharp', 'sonyericsson', 'symbian', 'opera mini', 'nokia', 'htc_', 'samsung', 'motorola', 'smartphone', 'blackberry', 'playstation portable', 'tablet browser');
        $agent = strtolower($_SERVER['HTTP_USER_AGENT']);

        foreach ($mobile_agent_array as $value) {
            if (strpos($agent, $value) !== false) return true;
        }
        return false;
    }
}


if (! function_exists('compressCSS')) {
    /**
     * @param string $s
     * @return string
     */
    function compressCSS(string $s) : string
    {
        $s = preg_replace('!/\*[^*]*\*+([^/][^*]*\*+)*/!', '', $s);
        return str_replace(array("\r\n", "\r", "\n", "\t", '  ', '    ', '    '), '', $s);
    }
}


function clearData(string $data) : string
{
    $hackBlackList = ['--', 'drop', ';', '#', '/*', '*/', 'version()', 'concat', 'extract'];

    foreach ($hackBlackList as $term) {
        if (strstr($data, $term)) {
            return '';
        }
    }

    return addslashes(stripslashes(htmlspecialchars(strip_tags($data))));
}
