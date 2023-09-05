@extends('site.v3.layouts.main')

@section('content')
    <div class="content max-width ">

        <div class="news_detail_cont ">

            <div class="news_detail-head html_editor_body_cont">
                <h1 class="news_detail-title">
                    {{$post->h1}}
                </h1>

                <div class="news_detail-lid_par">
                    <p>
                        {!! $post->lead !!}
                    </p>
                </div>

                <div>
                    @include('site.v3.modules.employee.employee', ['employee' => $post->author])
                </div>


                <img class="detail_picture" border="0" src="{{$post->preview}}" alt="{{$post->h1}} кратко" title="{{$post->h1}}">
            </div>

            <div class="news_detail html_editor_body_cont">
                {!! $post->content !!}
            </div>
        </div>

        <div class="comment_cont kursi_blog">
            @include('site.v3.templates.blog.comments.comment')
        </div>
    </div>


    @push('styles')
        <link href="{{ Vite::asset('resources/css/post/post.css') }}" rel="stylesheet">
    @endpush

@endsection

