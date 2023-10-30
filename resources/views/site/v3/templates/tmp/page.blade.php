@extends('frontend.v4.layouts.pc')
@section ('title', Shortcode::compile($page->title))
@section ('og_title', Shortcode::compile($page->h1))
@section ('meta_description', Shortcode::compile($page->meta_description))

@section('compress-styles')
    @parent
    <?php
    includeModule('organisms.cards');
    ?>
@endsection

@section('content')
    @include('site.v3.modules.organisms.cards.1-card-review', compact('card'))



@endsection

@section('additional-scripts')

@endsection
