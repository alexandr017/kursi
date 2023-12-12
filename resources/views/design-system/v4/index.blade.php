@extends('design-system.v4.templates.layout')
@section('title', 'Дизайн система - Главная')
@section('h1', 'Дизайн система - Главная')

@section('content')

    <div class="container">
        <h1 style="padding-top: 50px">Список компонентов</h1>
        <p style="padding: 20px 0;">Атомы</p>
        <ul>
            <li><a href="/design-system/atoms?name=badges">Badges/значки</a></li>
            <li><a href="/design-system/atoms?name=button">Кнопка</a></li>
            <li><a href="/design-system/atoms?name=controls">Чекбокс, радио</a></li>
            <li><a href="/design-system/atoms?name=counter">Counter</a></li>
            <li><a href="/design-system/atoms?name=icons">Icons</a></li>
            <li><a href="/design-system/atoms?name=star-rating">Звездный рейтинг</a></li>
            <li><a href="/design-system/atoms?name=swiper-slider">Swiper-slider</a></li>
            <li><a href="/design-system/atoms?name=tabs">Табы</a></li>
            <li><a href="/design-system/atoms?name=tags">Тэги</a></li>
            <li><a href="/design-system/atoms?name=titles">Типографика</a></li>
        </ul>
        <p style="padding: 20px 0;">Молекулы</p>
        <ul>
            <li><a href="/design-system/molecules?name=accordion">Аккордион</a></li>
            <li><a href="/design-system/molecules?name=dropdown-list">Выпадающий список</a></li>
            <li><a href="/design-system/molecules?name=filter-select">Параметры фильтров/фильтр-аккордион</a></li>
            <li><a href="/design-system/molecules?name=input">Поле ввода/input </a></li>
            <li><a href="/design-system/molecules?name=textarea">Поле ввода текста/textarea</a></li>
        </ul>
        <p style="padding: 20px 0;">Организмы</p>
        <ul>
            <li><a href="/design-system/organisms?name=card-course-fixed">Карточка курса (фиксириованная высота)</a></li>
            <li><a href="/design-system/organisms?name=card-course-flexible">Карточка курса (резиновая высота)</a></li>
            <li><a href="/design-system/organisms?name=card-course-full-mini">Карточка курса (фиксириованная высота вместе с мини)</a></li>
            <li><a href="/design-system/organisms?name=card-course-mini">Карточка курса мини</a></li>
            <li><a href="/design-system/organisms?name=card-review">Карточка отзыва</a></li>
            <li><a href="/design-system/organisms?name=card-review-mini">Карточка отзыва мини</a></li>

            <li><a href="/design-system/organisms?name=card-review-carousel">Карусель карточек отзывов</a></li>
            <li><a href="/design-system/organisms?name=card-course-carousel">Карусель карточек курсов</a></li>
            <li><a href="/design-system/organisms?name=filter">Фильтр</a></li>
            <li><a href="/design-system/organisms?name=footer">Футер</a></li>
            <li><a href="/design-system/organisms?name=header">Шапка</a></li>
            <li><a href="/design-system/organisms?name=sort">Сортировка</a></li>

        </ul>
        <p style="padding: 20px 0;">Шаблоны</p>
        <ul>
            <li><a href="/design-system/templates?name=test">Тестовая</a></li>
            <li><a href="/design-system/templates?name=listing">Листинг</a></li>
        </ul>
        <hr style="padding: 20px">
    </div>

@endsection
