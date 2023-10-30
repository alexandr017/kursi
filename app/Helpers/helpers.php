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
    return URL::current();
}

function getCanonicalNext(int $pages) : int|string
{
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

function getCanonicalPrev() : null|int|string
{
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
        if ($course->price < $lowPrice) {
            $lowPrice = $course->price;
        }
        if ($course->price > $highPrice) {
            $highPrice = $course->price;
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
if (! function_exists('includeComponent')) {
    /**
     * @param string $component
     * @param string $mode
     * @return null
     */
    function includeComponent($component, $mode = null)
    {
        $component = resource_path('view/design-system/v4/components') . $component;
        return includeDesignSystemItem($component, $mode);
    }
}


// функция для подключения натяжки
if (! function_exists('includeModule')) {
    /**
     * @param string $component
     * @param string $mode
     * @return null
     */
    function includeModule($component, $mode = null)
    {
        $component = resource_path('view/site/v3/modules') . $component;
        return includeDesignSystemItem($component, $mode);
    }

}


// функция для подключения натяжки
if (! function_exists('includeDesignSystemItem')) {
    /**
     * @param string $component
     * @param string $mode
     * @return null
     */
    function includeDesignSystemItem($component, $mode = null)
    {
        if (!isset($GLOBALS ['m'])) {
            $GLOBALS ['m'] = [];
        }

        $priorityArr = ['amp', 'turbo', 'mob', 'pc'];

        // site.v3.modules.
        $template = $component ;

        // определяем режим, если он не задан явно
        if ($mode == null) {
            if (isAmpPage()) {
                $mode = 'amp';
            } elseif (isTurboPage()) {
                $mode = 'turbo';
            } elseif (isMobileDevice()) {
                $mode = 'mob';
            } else {
                $mode = 'pc';
            }
        }


        // согласно приоритету грузим скрипты и стили модуля (если существует файл css)
        foreach ($priorityArr as $priority) {

            if ($mode == $priority) {

                $jsFile = $template . '/' . $mode . '.js';
                if (file_exists($jsFile)) {
                    if (!in_array($component, $GLOBALS ['m'])) {
                        $GLOBALS ['m'][] = $component;
                    }
                }

                $cssFile = $template . '/' . $mode . '.css';

                if (\Cache::has($cssFile)) {
                    echo \Cache::get($cssFile);
                    //echo 'body{load: from_cache}';
                    return null;
                }

                if (file_exists($cssFile)) {
                    $code = file_get_contents($cssFile);
                    echo $code;
                    \Cache::put($cssFile, $code, \Carbon\Carbon::now()->addMinutes(1));
                    return null;
                } else {
                    if ($mode == 'amp') {
                        $mode = 'turbo';
                    } elseif ($mode == 'turbo') {
                        $mode = 'mob';
                    } elseif($mode == 'mob') {
                        $mode = 'pc';
                    }
                }
            }
        }

        return null;

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
