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

        <div class="person_detail" >

            <div class="person_detail-head">
                <div class="person_detail-left_part">
                    <div class="person_detail-title">
                        <h1>
                            {{$employee->name}}
                        </h1>
                    </div>
                    <div class="person_detail-info">
                        <div class="person_detail-post">
                            {{$employee->job}}
                        </div>
                        <div class="person_detail-lid">
                            <p>
                                {{$employee->lead}}
                            </p>
                        </div>
                        <div class="person_detail-contacts_cont">
                            <div class="person_detail-short_contacts">

                            </div>
                            <div class="person_detail-main_contact">
                                <a href="mailto:{{$employee->email}}">
                                    {{$employee->email}}
                                </a>
                                <img src="/images/system/person_arrow.svg" alt="">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="person_detail-right_part">
                    <img class="detail_picture" border="0" src="{{$employee->photo}}" alt="{{$employee->name}}в" title="{{$employee->name}}">
                </div>

{{--                <div class="person_detail-main_contact mobile">--}}
{{--                    <a href="mailto:{{$employee->email}}">--}}
{{--                        {{$employee->email}}--}}
{{--                    </a>--}}
{{--                    <img src="/images/system/person_arrow.svg" alt="">--}}
{{--                </div>--}}
            </div>

            <div class="person_body">

                <div class="person_body-text html_editor_body_cont">

                    {!! $employee->content !!}

                </div>

                <div class="person_body-education_cont">

                    <div class="person_body-education">
                        <div class="person_body-education_title">

                            Образование
                        </div>
                    </div>
                </div>
            </div>
        </div>


{{--        {{$employee->name}}<br>--}}
{{--        {{$employee->email}}<br>--}}
{{--        {{$employee->job}}<br><br>--}}

{{--        {!! $employee->lead !!}--}}
{{--        {!! $employee->content !!}--}}


    </div>

    @push('styles')
        <link href="{{ Vite::asset('resources/css/employee/employee-info.css') }}" rel="stylesheet">
    @endpush

@endsection


@section('additional-scripts')
    @parent

@endsection




