<?php
//$ampLink = linkToAMP();
?>
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
                                   href="#vote">{{$company->reviews_count}}&nbsp;отзыва</a>
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
                    <h2 class="school_kurses_title subblock_title">
                        Лучшие курсы школы
                    </h2>

                    <div class="school_kurses_cont">
                        @include('site.v3.modules.courses.courses-cards', ['courses' => $company->courses])
                    </div>
                </div>
                <div class="school_page_body">
                    <div class="school_page_body_cont html_editor_body_cont">
                        {!! $company->content !!}
                    </div>
                </div>

                @include('site.v3.modules.company-reviews.company-reviews-main')
                @include('site.v3.modules.company-reviews.company-review-add', ['companyId' => $company->id])

            </div>

        </div>

    </div>

@endsection


@section('additional-scripts')
    @parent

@endsection

{{--@dd($company->reviews)--}}
@section('custom-structured-data')
    <script type="application/ld+json">
        {
  "@context": "https://www.schema.org",
  "@type": "Product",
  "brand": "SkillFactory",
  "logo": "https://kursy.ru{{str_replace('https://kursy.ru', '', $company->logo)}}",
  "name": "SkillFactory",
  "category": "{{$company->name}}",
  "description": "{{$company->lead}}",
  "aggregateRating": {
    "@type": "AggregateRating",
    "bestRating": "5",
    "ratingValue": {{$company->rating_value}},
    "reviewCount": {{$company->rating_count}}
  },
  "offers": {
    "@type": "AggregateOffer",
    "offerCount": {{$company->courses_count}},
    "highPrice": "480000",
    "lowPrice": "43560",
    "priceCurrency": "Rub",
    "offers": [
    @foreach($company->courses as $course)
    {
        "@type": "Offer",
        "name": "{{$course->title}}",
      "url": "{{$course->affiliate_link}}",
      "price": "{{$course->cost}}",
      "offeredBy": {
        "@type": "EducationalOrganization",
        "name": "{{$company->name}}",
        "image": {
          "@type": "ImageObject",
          "url": "https://kursy.ru{{str_replace('https://kursy.ru', '', $company->logo)}}"
        }
      }
    }
    @if($course != $company->courses->last())
    ,
    @endif
        @endforeach
  ]
  },
        "review": [
@foreach($company->reviews as $review)
            {
          "@type": "Review",
          "name": "{{$review->title}}",
      "reviewBody": "{{$review->content}} @if($review->pluses) | {{$review->pluses}} @endif  @if($review->minuses)  | {{$review->minuses}} @endif ",
      "datePublished": "{{date('Y-m-d', strtotime($company->reviews->first()->created_at))}}",
      "reviewRating": { "@type": "Rating", "ratingValue": {{(int) $review->rating}} },
      "author": { "@type": "Person", "name": "{{$review->author_name}}" }
    }
    @if($review != $company->reviews->last())
                ,
@endif
        @endforeach
        ]

  }
</script>
@endsection
