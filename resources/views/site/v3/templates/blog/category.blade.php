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
                <div id="bx_{{$category->id}}" class="blog_sections-item @if(request()->is($category->urls?->url)) blog_sections-item_active @endif">
                    <a href="/{{$category->urls?->url}}">
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


            @if($posts->lastPage() > 1)
                <div class="bx-pagination">
                    <div class="bx-pagination-container">
                        <ul>
                            <li class="bx-pag-prev">
                                @if($posts->currentPage() > $posts->lastPage())
                                    <a href="?page={{$posts->currentPage() - 1}}">
                                        <img src="/v3/images/arrow-nav.svg" alt="">
                                    </a>
                                @else
                                    <img src="/v3/images/arrow-nav.svg" alt="">
                                @endif
                            </li>

                            @if($posts->currentPage() <= 4)
                                @for ($i = 1; $i <= 4 && $i < $posts->lastPage(); $i++)
                                    <li class="@if($i === $posts->currentPage()) bx-active @endif">
                                        <a href="?page={{$i}}"><span>{{ $i }}</span></a>
                                    </li>
                                @endfor

                                @if($posts->lastPage() > 4)
                                   <li>...</li>
                                @endif

                                <li class="@if($posts->currentPage() === $posts->lastPage()) bx-active @endif">
                                    <a href="?page={{$posts->lastPage()}}"><span>{{$posts->lastPage()}}</span></a>
                                </li>
                            @elseif($posts->currentPage() >= $posts->lastPage() - 4)
                                <li class="@if($posts->currentPage() === 1) bx-active @endif">
                                    <a href="?page=1"><span>{{1}}</span></a>
                                </li>

                                <li>...</li>

                                @for ($i = $posts->lastPage() - 4; $i <= $posts->lastPage(); $i++)
                                    <li class="@if($i === $posts->currentPage()) bx-active @endif">
                                        <a href="?page={{$i}}"><span>{{ $i }}</span></a>
                                    </li>
                                @endfor
                            @else
                                <li class="@if($posts->currentPage() === 1) bx-active @endif">
                                    <a href="?page=1"><span>{{1}}</span></a>
                                </li>

                                <li>...</li>

                                @for ($i = $posts->currentPage() - 3; $i <= $posts->currentPage() ; $i++)
                                    <li class="@if($i === $posts->currentPage()) bx-active @endif">
                                        <a href="?page={{$i}}"><span>{{ $i }}</span></a>
                                    </li>
                                @endfor

                                <li>...</li>

                                <li class="@if($posts->currentPage() === $posts->lastPage()) bx-active @endif">
                                    <a href="?page={{$posts->lastPage()}}"><span>{{$posts->lastPage()}}</span></a>
                                </li>
                            @endif

                            <li class="bx-pag-next">
                                @if($posts->currentPage() < $posts->lastPage())
                                    <a href="?page={{$posts->currentPage() + 1}}">
                                        <img src="/v3/images/arrow-nav.svg" alt="">
                                    </a>
                                @else
                                    <img src="/v3/images/arrow-nav.svg" alt="">
                                @endif
                            </li>
                        </ul>

                        <div style="clear:both"></div>
                    </div>
                </div>
            @endif
        </div>
    </div>

    @push('styles')
        <link href="{{ Vite::asset('resources/css/blog/category.css') }}" rel="stylesheet">
    @endpush
@endsection


@section('additional-scripts')
    @parent
@endsection




