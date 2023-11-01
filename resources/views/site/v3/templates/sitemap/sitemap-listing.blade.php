@extends('site.v3.layouts.main')
<?php /*
@section ('title', Shortcode::compile($page->title))
@section ('og_title', Shortcode::compile($page->h1))
@section ('meta_description', Shortcode::compile($page->meta_description))

*/ ?>

@section('content')
    <div class="content max-width">
        <div class="sitemap_block-sections_cont">

            <h1 class="sitemap_block-section_title">
                {{$listing->name}}
            </h1>

            <div class="sitemap_block-sections_cont ">

                <div class="sitemap_block-section_nav">
                    <a href="{{linkWithSlash($listing->url->url)}}">Страница раздела</a>
                </div>

                @if($listing->childes->first()?->childes->isEmpty())
                    @php($class = 'second_lvl')
                @else
                    @php($class = 'first_lvl')
                @endif

                <ul class="{{$class}}">

                    @foreach($listing->childes as $child)

                        <li id="{{$child->id}}">
                            <h2 class="bx_sitemap_li_title">
                                @if($child->childes->isNotEmpty())
                                    <a href="{{"/sitemap/kursy" .  linkWithSlash($child->url->url)}}">
                                        {{$child->name}}
                                    </a>
                                @else
                                    <a href="{{ linkWithSlash($child->url->url)}}">
                                        {{$child->name}}
                                    </a>
                                @endif

                            </h2>

                            @if($child->childes->isNotEmpty())
                                <a href="{{linkWithSlash($child->url->url)}}">Страница раздела</a>

                                <ul class="second_lvl">

                                    @foreach($child->childes as $childItem)
                                        <li id="{{$childItem->id}}">
                                            <h2 class="bx_sitemap_li_title">
                                                @if($childItem->childes->isNotEmpty())
                                                    <a href="{{"/sitemap/kursy" .  linkWithSlash($childItem->url->url)}}">
                                                        {{$childItem->name}}
                                                    </a>
                                                @else
                                                    <a href="{{ linkWithSlash($childItem->url->url)}}">
                                                        {{$childItem->name}}
                                                    </a>
                                                @endif

                                            </h2>
                                        </li>
                                    @endforeach

                                </ul>
                            @endif

                        </li>

                    @endforeach
                </ul>
            </div>
        </div>
    </div>

@endsection

@push('styles')
    <link href="{{ Vite::asset('resources/css/sitemap/sitemap-listing.css') }}" rel="stylesheet">
@endpush


@section('additional-scripts')
    @parent

@endsection




