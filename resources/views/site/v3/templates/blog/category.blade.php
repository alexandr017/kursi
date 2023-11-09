<?php
//$ampLink = linkToAMP();
?>
@extends('site.v3.layouts.main')
<?php /*
@section ('title', Shortcode::compile($page->title))
@section ('og_title', Shortcode::compile($page->h1))
@section ('meta_description', Shortcode::compile($page->meta_description))

*/ ?>

@section ('title', Shortcode::compile($page->title))
@section ('og_title', Shortcode::compile($page->h1))
@section ('meta_description', Shortcode::compile($page->meta_description))

@section('content')

    <div class="content max-width">
        <div class="blog_head page_head">
            <h1 class="blog_head-title page_head-title">
                @if(isset($category))
                    {{$category->h1}}
                @else
                    {{$page->h1}}
                @endif
            </h1>
            <div class="blog_head-desk page_head-desk">
                <div class="blog_head-desk_test page_head-desk_text">
                    @if(isset($category))
                        {{$category->content}}
                    @else
                        {{$page->lead}}
                    @endif
                </div>
            </div>
            <div class="blog_head-img page_head-img">
                <!-- <img src="" alt=""> -->
            </div>
        </div>

        <div class="blog_sections-cont">
            @foreach($categories as $category)
                <div id="bx_{{$category->id}}" class="blog_sections-item @if(request()->is($category->urls?->url)) blog_sections-item_active @endif">
                    <a href="{{linkWithSlash($category->urls?->url)}}">
                        {{$category->h1}}
                    </a>
                </div>
            @endforeach
        </div>

        <div class="news_list-cont">
            <div class="news-list">
                @foreach($posts as $post)
                    @include('site.v3.modules.post.post-card', ['post' => $post])
                @endforeach
            </div>

            @include('site.v3.modules.4-pagination.pagination', ['pageAlias' => $pageAlias, 'numberPage' => $pageNumber])
        </div>
    </div>

    @push('styles')
        <link href="{{ Vite::asset('resources/css/blog/category.css') }}" rel="stylesheet">
    @endpush
@endsection


@section('additional-scripts')
    @parent
@endsection




