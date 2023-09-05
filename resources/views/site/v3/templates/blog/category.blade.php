<?php
//$ampLink = linkToAMP();
?>
@extends('site.v3.layouts.main')
<?php /*
@section ('title', Shortcode::compile($page->title))
@section ('og_title', Shortcode::compile($page->h1))
@section ('meta_description', Shortcode::compile($page->meta_description))

*/ ?>

@section('content')
    <div class="content max-width">

        <div class="blog_head page_head">
            <h1 class="blog_head-title page_head-title">
                Полезные статьи по разным профессиям
            </h1>
            <div class="blog_head-desk page_head-desk">
                <div class="blog_head-desk_test page_head-desk_text">
                    Наша команда ежедневно выкладывает полезные материалы по самым разным профессиям для вашего профессионального роста.
                </div>
            </div>
            <div class="blog_head-img page_head-img">
                <!-- <img src="" alt=""> -->
            </div>
        </div>

        <div class="blog_sections-cont">

            @foreach($categories as $category)
                <div id="bx_{{$category->id}}" class="blog_sections-item ">
                    <a href="/{{$category->urls?->url}}">
                        {{$category->h1}}
                    </a>
                </div>
            @endforeach

        </div>

        <div class="news-list">

            @foreach($posts as $post)
                @include('site.v3.modules.post.post-card', ['post' => $post])

            @endforeach

        </div>
    </div>

    @push('styles')
        <link href="{{ Vite::asset('resources/css/blog/category.css') }}" rel="stylesheet">
    @endpush

@endsection


@section('additional-scripts')
    @parent

@endsection




