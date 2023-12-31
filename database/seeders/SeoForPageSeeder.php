<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class SeoForPageSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        DB::table('seo_for_pages')->insert([
            [ // index page
                'title' => 'Онлайн-курсы - обучение в лучших школах за 2023 год из рейтинга Курсы.ру',
                'meta_description'  => 'Список лучших онлайн-курсов за 2023 год. Выбери подходящую программу обучения из нашего рейтинга. Только актуальные условия и отзывы учеников.',
                'h1'  => 'Курсы.ру —<br>твое решение в поисках знаний',
                'breadcrumbs' => 'Главная',
                'lead' => 'Сравниваем и подбираем лучшие онлайн-курсы. Наша команда имеет большой опыт в прохождении курсов в онлайн-образовании, поэтому мы умеем находить лучшее.',
                'content' => file_get_contents(base_path() . '/database/seeders/content/mainpage.html'),
                'rating_value' => 4.44,
                'rating_count' => 34
            ],

            [ // about
                'title' => 'Все о сервисе Курсы.ру: команда, преимущества и партнеры',
                'meta_description'  => 'Основная информация о сервисе Курсы.ру. Преимущества проекта, партнеры, команда и эксперты сайта.',
                'h1'  => 'О нас',
                'breadcrumbs' => 'О нас',
                'lead' => 'Курсы.ру — агрегатор онлайн-образования.<br />Мы подбираем и сравниваем лучшие онлайн-курсы в разных направлениях. Здесь вы найдете подходящий курс, который поможет вам стать специалистом в выбранной сфере.',
                'content' => null,
                'rating_value' => null,
                'rating_count' => null
            ],
            [ // contacts
                'title' => 'Контактная информация сервиса Курсы.ру: телефон, мессенджеры и электронная почта',
                'meta_description'  => 'Контактная информация сервиса по выбору онлайн-обучения Курсы.ру. Телефон, мессенджеры и электронная почта для связи. Консультация в удобной для форме.',
                'h1'  => 'Контакты',
                'breadcrumbs' => 'Контакты',
                'lead' => 'Курсы.ру — агрегатор онлайн-образования.<br>Мы подбираем и сравниваем лучшие онлайн-курсы в разных направлениях. Здесь вы найдете подходящий курс, который поможет вам стать специалистом в выбранной сфере.',
                'content' => null,
                'rating_value' => 4.50,
                'rating_count' => 19
            ],
            [ // posts
                'title' => 'Курсы.ру Знания - знания от экспертов понятным языком',
                'meta_description'  => 'Курсы.ру Знания. Статьи об образование и профессиях понятным языком. Разборы понятий связанных с программированием, дизайном, маркетингом и многим другим.',
                'h1'  => 'Полезные статьи по разным профессиям',
                'breadcrumbs' => 'Статьи',
                'lead' => 'Наша команда ежедневно выкладывает полезные материалы по самым разным профессиям для вашего профессионального роста.',
                'content' => null,
                'rating_value' => 4.07,
                'rating_count' => 16
            ],
            [ // shcools
                'title' => 'Рейтинг лучших онлайн-школ за 2023 год',
                'meta_description'  => 'Рейтинг лучших платформ для обучения. Сравните и выберите лучшее предложения из списка онлайн-школ, на основе реальных оценок и отзывов людей.',
                'h1'  => 'Рейтинг онлайн-школ',
                'breadcrumbs' => 'Рейтинг онлайн-школ',
                'lead' => 'На странице рейтинга школ вы найдете<br> список лучших онлайн-школ,<br> их особенности и преимущества, оценки<br> и отзывы от реальных студентов. Наша<br> команда собрала для вас полную<br> информацию, чтобы помочь вам выбрать<br> идеальную платформу для обучения.',
                'content' => null,
                'rating_value' => 4.86,
                'rating_count' => 15
            ],
            [ // sitemap
                'title' => 'Карта сайта Курсы.ру',
                'meta_description'  => 'Карта сайта для удобной навигации пользователей.',
                'h1'  => 'Карта сайта Курсы.ру',
                'breadcrumbs' => 'Карта сайта',
                'lead' => 'Карта сайта для удобной навигации пользователей.',
                'content' => null,
                'rating_value' => null,
                'rating_count' => null
            ],
            [ // not-found
                'title' => 'Курсы.ру - 404 Страница не найдена',
                'meta_description'  => 'Курсы.ру - 404 Страница не найдена',
                'h1'  => 'Курсы.ру - 404 Страница не найдена',
                'breadcrumbs' => null,
                'lead' => 'Курсы.ру - 404 Страница не найдена',
                'content' => null,
                'rating_value' => null,
                'rating_count' => null
            ],

        ]);
    }
}
