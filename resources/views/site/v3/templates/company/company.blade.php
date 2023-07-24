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
        <h1>{{$company->h1}}</h1>

        {!! $company->lead !!}
        {!! $company->content !!}

    </div>


@endsection


@section('additional-scripts')
    @parent

@endsection




