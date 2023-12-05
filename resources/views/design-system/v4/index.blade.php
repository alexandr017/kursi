@extends('design-system.v4.templates.layout')
@section('title', 'Дизайн система - Главная')
@section('h1', 'Дизайн система - Главная')

@section('content')

    <div class="container">
        <h1 style="padding-top: 50px">Список компонентов</h1>
        <p style="padding: 20px 0;">Атомы</p>
        <ul>
            <li><a href="/design-system/atoms?name=button">Кнопка</a></li>
            <li><a href="/design-system/atoms?name=button-icon">Кнопки с иконкой</a></li>
            <li><a href="/design-system/atoms?name=subnavigation">Кнопки: фильтр, сортировка</a></li>
            <li><a href="/design-system/atoms?name=counter">Counter</a></li>
            <li><a href="/design-system/atoms?name=controls">Чекбокс, радио</a></li>
            <li><a href="/design-system/atoms?name=tags">Тэги</a></li>
            <li><a href="/design-system/atoms?name=tabs">Табы</a></li>
            <li><a href="/design-system/atoms?name=badges">Badges/значки</a></li>
            <li><a href="/design-system/atoms?name=titles">Типографика</a></li>
            <li><a href="/design-system/atoms?name=star-rating">Звездный рейтинг</a></li>
        </ul>
        <p style="padding: 20px 0;">Молекулы</p>
        <ul>
            <li><a href="/design-system/molecules?name=filter-select">Параметры фильтров/фильтр-аккордион</a></li>
            <li><a href="/design-system/molecules?name=textarea">Поле ввода текста</a></li>
            <li><a href="/design-system/molecules?name=accordion">Аккордион</a></li>
            <li><a href="/design-system/molecules?name=dropdown-list">Выпадающий список</a></li>
        </ul>
        <p style="padding: 20px 0;">Организмы</p>
        <ul>
            <li><a href="/design-system/organisms?name=sort">Сортировка</a></li>
            <li><a href="/design-system/organisms?name=filter">Фильтр</a></li>
            <li><a href="/design-system/organisms?name=header">Шапка</a></li>
        </ul>
        <p style="padding: 20px 0;">Шаблоны</p>
        <ul>
            <li><a href="/design-system/templates?name=test">Тестовая</a></li>
            <li><a href="/design-system/templates?name=listing">Листинг</a></li>
        </ul>
        <hr style="padding: 20px">
    </div>

@endsection
