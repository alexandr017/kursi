<?php global $c; $c = $company->coursesStructuredData;?>
@extends('site.v3.layouts.main')
@section ('title', Shortcode::compile($company->title))
@section ('og_title', Shortcode::compile($company->h1))
@section ('meta_description', Shortcode::compile($company->meta_description))

@push('styles')
    <link href="{{ Vite::asset('resources/css/company/company.css') }}" rel="stylesheet">
@endpush

@section('content')

    <div class="content max-width">
        <div class="row">
            <div class="col-xs-12">
                <h1 class="bx-title">
                    {{$company->h1}}
                </h1>

                <div class="school_short_card">
                    <div class="scholl_short_card-logo">
                        <div class="product-item-detail-slider-image active" data-entity="image" data-id="1541">
                            <img src="{{$company->logo}}" alt="{{$company->h1}}»"
                                 title="{{$company->h1}}" itemprop="image">
                        </div>
                    </div>


                    <div class="school_short_card-info">
                        <div class="school_short_card-header">
                            <div class="school_short_card-header_rating">
                                <div class="school_short_card-header_rating_value">
                                    {{$company->rating_value}}
                                </div>
                                <img src="/images/system/rating_star_blue.svg" alt="Рейтинг" title="Рейтинг"
                                     class="school_short_card-header_rating_img">
                            </div>
                            <div class="school_short_card-header_reviews">
                                <a class="school_short_card-header_reviews_value"
                                   href="#vote">{{$company->rating_count}}&nbsp;{{reviewWord($company->rating_count) }} </a>
                            </div>
                        </div>

                        <div class="school_short_card-footer">
                            <div class="school_short_card-footer_kurses_count">
                                Курсов:
                                <span>
                                    {{$company->courses_count}}
                                </span>
                            </div>
                            <div class="school_short_card-footer_school_link">
                                <a href="{{$company->link}}" rel="sponsored">
                                    <img src="/images/system/Arrow.svg" alt="На сайт">
                                    На сайт школы
                                </a>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="lead">
                    {!! $company->lead !!}
                </div>

                @if($company->hotline || $company->email)
                    <div class="school_contacts">
                        <h2 class="school_contact_title subblock_title">
                            Горячая линия школы
                        </h2>
                        @if($company->hotline)
                            <div class="school_contact_cont">
                                <div class="school_contact_logo">

                                    <img src="/images/system/Calling.svg" alt="Телефон поддержки" title="Телефон поддержки">
                                </div>
                                <div class="school_contact_value">
                                    <a href="tel:{{$company->hotline}}">{{$company->hotline}}</a>
                                </div>
                            </div>
                        @endif

                        @if($company->email)
                            <div class="school_contact_cont">
                                <div class="school_contact_logo">

                                    <img src="/images/system/Mail.svg" alt="Почта поддержки" title="Почта поддержки">
                                </div>
                                <div class="school_contact_value">
                                    <a href="mailto:{{$company->email}}">{{$company->email}}</a>
                                </div>
                            </div>
                        @endif

                    </div>
                @endif

                <div class="school_kurses">
                    <h2 class="school_kurses_title subblock_title">Лучшие курсы школы</h2>

                    <div class="school_kurses_cont">
                        @include('site.v3.modules.courses.courses-cards', ['courses' => $company->courses])
                    </div>
                </div>
                <div class="school_page_body">
                    <div class="school_page_body_cont html_editor_body_cont">
                        {!! $company->content !!}
                    </div>
                </div>

                @if($company->rating_count)
                    @include('site.v3.modules.company-reviews.company-reviews-main')
                @endif

                @include('site.v3.modules.company-reviews.company-review-add', ['companyId' => $company->id])

            </div>

        </div>

    </div>

@endsection


@section('additional-scripts')
    @parent

@endsection


@section('custom-structured-data')
    @include('site.structured-data.ProductCompany')
@endsection
