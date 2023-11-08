@extends('site.v3.layouts.main')
<?php /*
@section ('title', Shortcode::compile($page->title))
@section ('og_title', Shortcode::compile($page->h1))
@section ('meta_description', Shortcode::compile($page->meta_description))

*/ ?>

@section('content')
    <div class="content max-width">

        <div class="sitemap_elements-cont">
            <h1 class="sitemap_elements_title">
                Список онлайн-школ
            </h1>

            @foreach($companies as $company)
                <div class="sitemap_element">

                    <a href="{{linkWithSlash($company->url->url)}}">{{$company->name}}</a>

                </div>
            @endforeach

        </div>
    </div>

@endsection

@push('styles')
    <link href="{{ Vite::asset('resources/css/sitemap/sitemap-companies.css') }}" rel="stylesheet">
@endpush


@section('additional-scripts')
    @parent

@endsection




