@extends('site.v3.layouts.main')
@section ('title', Shortcode::compile($page->title))
@section ('og_title', Shortcode::compile($page->h1))
@section ('meta_description', Shortcode::compile($page->meta_description))

@section('style')
    <link rel="stylesheet" href="/v3/css/page.css">
@endsection

@section('content')

    <div class="content max-width">
        <div class="text_page">
            <h1>{{Shortcode::compile($page->h1)}}</h1>
            {!! Shortcode::compile($page->content) !!}
        </div>
    </div>
@endsection


@section('additional-scripts')
    @parent
@endsection

@section('custom-structured data')
    @parent

@endsection




