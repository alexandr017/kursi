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
