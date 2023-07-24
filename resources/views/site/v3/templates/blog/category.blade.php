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


    @forelse ($posts as $post)
            <?php // todo так делать не надо , сделать отдельный модуль и в модуле выводить и подключить сюда ?>

        <a href="{{$post->url}}">{{$post->h1}}</a><br>
        <img width="100" src="https://kursy.ru/{{$post->preview}}" alt="{{$post->h1}}">
        <br>
        <br>
    @empty
        Нет записей
    @endforelse

@endsection


@section('additional-scripts')
    @parent

@endsection




