<?php

namespace App\Services\Breadcrumbs;

// todo пока хз в нужном ли месте лежит этот класс
class BreadcrumbsRender
{
    public static function get(string|null $breadcrumb, string $h1) : array
    {
        // если пустые ХК - возвращаем название h1
        if($breadcrumb == null) {
            return [
                'h1' => $h1
            ];
        }


        // если ХК однострончые возвращаем их
        if (!str_contains($breadcrumb, '@')) {
            return [
                [
                    'h1' => $breadcrumb
                ]
            ];
        }


        // далее идет магия
        // если ХК многострочные - парсим
        $result = [];

        $selector = str_contains($breadcrumb, "\r\n")
            ? "\r\n"
            : "\n";

        $rowArr = explode($selector, $breadcrumb);


        for ($i = 0; $i < count($rowArr); $i++) {

            // пропускаем пустые строки
            if(empty($rowArr[$i])) continue;

            // парсим строку если есть разделитель
            if (str_contains($rowArr[$i], '@')) {
                $line = explode('@',$rowArr[$i]);

                $h1 = trim($line[0]);

                $link = trim($line[1]);
                $link = preg_replace('/^\//','', $link);
                $link = preg_replace('/\/$/','', $link);

                $result [] = [
                    'h1' => $h1,
                    'link' => '/' . $link
                ];

                // если нет разделителя в строке и это последний элемент
            } elseif ($i == count($rowArr)-1) {

                $result [] = [
                    'h1' => trim($rowArr[$i])
                ];

                // если строка не последняя и нет разделителя (не указана ссылка)
                // то что-то не так и хакрываем выполднение метода
            } else {
                return [];
            }
        }

        return $result;
    }
}
