@extends('site.v3.layouts.main')

@section('content')

    <div class="content max-width">
        <div class="tagpage_head"><h1
                    class="tagpage_head-title"
                    id="bx_1847241719_243"
            >{{$listing->title}}</h1>

            <div class="tagpage_head-desk">
                <div class="tagpage_head-desk_test">
                    {{$listing->description}}
                </div>
            </div>

            <div class="tagpage_head-img">
                <img src="https://kursy.ru/upload/iblock/ee7/2xmtipetlh10bsmeos236hl1jtnvmo1o/mfso.webp"
                     alt="{{$listing->title}}">
            </div>
        </div>

        @include('site.v3.modules.courses.courses-main', ['courses' => $listing->courses, 'tags' => $tags, 'listingId' => $listing->id])

        <div class="mobile_mascot">
            <img src="/upload/iblock/ee7/2xmtipetlh10bsmeos236hl1jtnvmo1o/mfso.webp" alt="">
        </div>
        {{--tagpage-ajax_container Component--}}


        <div class="article_body-cont">
            <div class="article_body html_editor_body_cont">
                {!! $listing->content !!}
            </div>

            <div class="article_body-author">
                @include('site.v3.modules.employee.employee', ['title' => 'Автор подборки', 'employee' => $listing->author])
            </div>
        </div>

        <div id="comp_82a98fe7db6be019771aa4ae37d40938">
            @include('site.v3.templates.listing.rating_stars', ['listing' => $listing])
        </div>

        <div class="linker_cont">
            <div class="linker_title" id="bx_4145281613_460">
                <h2>
                    Все курсы {{$listing->parent->name}}
                </h2>
            </div>

            {{--            <input type="checkbox" id="linker_show_input" name="" value="">--}}
            <ul class="linker_list linker_list_courses">
                @foreach($listing->parent->childes as $child)
                    <li id="bx_{{$child->id}}">
                        <p class="linker_item">
                            <a href="/{{$child->url->url}}">
                                {{$child->name}}
                            </a>
                        </p>
                    </li>
                @endforeach
            </ul>
            <div style="clear: both;">
            </div>
        </div>


        @push('styles')
            <link href="{{ Vite::asset('resources/css/listing/listing.css') }}" rel="stylesheet">
        @endpush

        @push('scripts')
            <script type="text/javascript" src="{{ Vite::asset('resources/js/listing/listing.js') }}"></script>
    @endpush

@endsection




