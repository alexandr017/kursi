@extends('site.v3.layouts.main')
<?php /*
@section ('title', Shortcode::compile($page->title))
@section ('og_title', Shortcode::compile($page->h1))
@section ('meta_description', Shortcode::compile($page->meta_description))

*/ ?>

@section('content')
    <div class="content max-width ">
        @include('site.v3.modules.mainpage.mainpage-head')
        @include('site.v3.modules.mainpage.mainpage-categories', ['listings' => $listings])

        <h2 class="index_subtitle popular">Популярные курсы</h2>
        @include('site.v3.modules.courses.courses-cards', ['courses' => $popularCourses, 'fromMainPage' => true])

        <h2 class="index_subtitle popular">Акции</h2>
        @include('site.v3.modules.courses.courses-cards', ['courses' => $withPromotionCourses  ])

        <h2 class="index_subtitle popular">Последние статьи</h2>
        @include('site.v3.modules.mainpage.mainpage-posts', ['posts' => $posts])

        @include('site.v3.modules.mainpage.mainpage-news')
    </div>

    @push('styles')
        <link href="{{ Vite::asset('resources/css/mainpage/mainpage.css') }}" rel="stylesheet">
    @endpush
@endsection
