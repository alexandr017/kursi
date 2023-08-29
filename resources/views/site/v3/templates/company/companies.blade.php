@extends('site.v3.layouts.main')

@section('content')
    <div class="content max-width">
        <div class="schools_head">
            <h1 class="schools_head-title">Рейтинг онлайн-школ</h1>

            <div class="schools_head-desk">
                <div class="schools_head-desk_test">
                    На странице рейтинга школ вы найдете<br>
                    список лучших онлайн-школ,<br>
                    их особенности и преимущества, оценки<br>
                    и отзывы от реальных студентов. Наша<br>
                    команда собрала для вас полную<br>
                    информацию, чтобы помочь вам выбрать<br>
                    идеальную платформу для обучения.
                </div>
            </div>
        </div>

        @include('site.v3.templates.company.companies-main-content', ['companies' => $companies])
    </div>

    @push('styles')
        <link href="{{ Vite::asset('resources/css/company/companies.css') }}" rel="stylesheet">
    @endpush

@endsection

