@extends('site.v3.layouts.main')
@section ('title', Shortcode::compile($page->title))
@section ('og_title', Shortcode::compile($page->h1))
@section ('meta_description', Shortcode::compile($page->meta_description))

@section('content')

    <div class="content max-width">

        <div class="page_404_cont">
            <div class="page_404-info_cont">
                <img class="page_404_img" src="/images/system/404.svg" alt="Ошибка 404" title="Ошибка 404">

                <p class="page_404_text">К сожалению,<br>страница не существует</p>
            </div>

            <div class="page_404_sect">
                @include('site.v3.modules.mainpage.mainpage-categories', ['listings' => $listings])
            </div>
        </div>
    </div>

    @push('styles')
        <link href="{{ Vite::asset('resources/css/not-found/not-found.css') }}" rel="stylesheet">
    @endpush
@endsection
