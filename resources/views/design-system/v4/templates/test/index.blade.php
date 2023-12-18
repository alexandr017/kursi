@extends('design-system.v4.templates.layout')
{{--@section('title', 'Дизайн система - Шаблон "' . $templateName . '"')--}}
{{--@section('h1', 'Дизайн система - Шаблон "' . $templateName . '"')--}}

@section('content')

@include('design-system.v4.components.organisms.header.index')

<main class="bg-primary">
    <div class="container">

        @include('design-system.v4.components.molecules.breadcrumbs.index')
        @include('design-system.v4.components.molecules.lead-block.index')

        <div class="page_wrapper" >

            <div class="page_top-grid" >
                <div class="top-links-sort" >
                    @include('design-system.v4.components.molecules.top-links.index')
                    @include('design-system.v4.components.organisms.sort.index')
                </div>

                <div class="filter-block">
                    @include('design-system.v4.components.organisms.filter.index')
                </div>

                <div class="page_content">
                    @include('design-system.v4.components.organisms.card-course-fixed.index')

                    @include('design-system.v4.components.molecules.button-more.index')
                </div>
            </div>

            @include('design-system.v4.components.organisms.card-course-carousel.index')

            @include('design-system.v4.components.organisms.card-review-carousel.index')

            <div class="content-block">
                <h2 class="h2 content_title">Кому подойдет</h2>
                <p>Курсы UX/UI дизайна подходят для:</p>
                <ul>
                    <li>Новичков, интересующихся дизайном и желающих освоить новую для себя профессию</li>
                    <li>Начинающих пользователей, которые хотят повысить квалификацию и получить дополнительный опыт</li>
                    <li>Сотрудников профильных компаний, желающих прокачать навыки в UX/UI дизайне</li>
                </ul>
                <p>Учёба также заинтересует тех, кто хочет получить дополнительный источник дохода, перейти на удалённую работы или сменить профессию.</p>

                <h2 class="h2 content_title">Из чего состоит программа обучения</h2>
                <p>Занятия проводятся в интерактивном режиме, подразумевающем отработку теоретических и практических занятий с преподавателями.</p>
                <p>На курсах обучают:</p>
                <ul>
                    <li>Принципам работы и особенностям UX/UI дизайна для пользователей и бизнеса, работе со стилями</li>
                    <li>Созданию интерфейсных решений</li>
                    <li>Основам работы с графикой</li>
                    <li>Анализу пользовательских сценариев</li>
                    <li>Проведению тестирования и исследований</li>
                </ul>
                <p>В ходе учёбы и выполнении практических заданий создаётся портфолио, которое сможете показать на собеседование.</p>

                <h2 class="h2 content_title">Сколько зарабатывают UX/UI дизайнеры</h2>
                <p>По сведениям кадровых порталов средняя зарплата сотрудника составляет 70–90 тысяч рублей.</p>
                <p>Зарплата в зависимости от уровня:</p>
                <ul>
                    <li>Junior дизайнер получает от 45 тысяч рублей</li>
                    <li>Middle дизайнер получает от 45 до 120 тысяч рублей</li>
                    <li>Senior дизайнер получает от 180 до 250 тысяч рублей</li>
                </ul>
                <p>Профессия UX/UI дизайнера подходит для работы в качестве фрилансера, занимаясь поиском заказов на тематических биржах или телеграмм-каналах.</p>
            </div>

            <div class="faq-block">
                <h2 class="h2 faq_title">Часто задаваемые вопросы</h2>
                <div class="faq_wrapper">
                    @include('design-system.v4.components.molecules.accordion.index')
                </div>
            </div>

            <div class="course-info-block">
                @include('design-system.v4.components.molecules.course-info.index')
            </div>

            <div class="rating-tables">
                @include('design-system.v4.components.molecules.rating-table.index')
            </div>

            <div class="bottom-links-block">
                @include('design-system.v4.components.molecules.bottom-links.index')
            </div>

            <div class="rating-area-block">
                @include('design-system.v4.components.organisms.star-rating-area.index')
            </div>

        </div>

    </div>

</main>

@include('design-system.v4.components.organisms.footer.index')
@endsection
