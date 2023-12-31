<div class="course-element" data-entity="items-row">
    <div class="kurse_card card_white card_pc">
        <div class="kurse_card-title">
            {{$course->title}}
        </div>
        @if(!is_null($course->duration))
            <div class="kurse_card-length">
                <p class="kurse_card-length_title">
                    Длительность:
                </p>
                <p class="kurse_card-length_value">
                    {{ $course->duration}} {{durationWord($course->duration_type, $course->duration) }}
                </p>
            </div>
        @endif


        <div class="kurse_card-school">
            <div class="school_minicard-cont">
                <a class="school_minicard-logo" href="{{linkWithSlash($course->school?->url?->url)}}">
                    <img src="{{$course->school->logo}}" alt="{{$course->school?->h1}}" title="{{$course->school?->h1}}">
                </a>

                <div class="school_minicard-text">
                    <div class="school_minicard-title">
                        <a href="{{linkWithSlash($course->school?->url?->url)}}">
                            {{$course->school?->name}}
                        </a>
                    </div>

                    <div class="school_minicard-subtitle">
                        @if($course->school ? $course->school->rating_count : 0)
                            <div class="school_minicard-rating">
                                <div class="school_minicard-rating_value">
                                    {{round($course->school_reviews_avg_rating ?: 0, 2)}}
                                </div>

                                <img src="/images/system/rating_star_blue.svg" alt="Картинка оценки курса" title="Картинка оценки курса">
                            </div>
                            <a class="school_minicard-reviews" href="/{{$course->school?->url?->url}}/#reviews">
                                (
                                <p class="school_minicard-reviews_value">
                                    {{$course->reviews_count ?: 0}}
                                </p>
                                <p class="school_minicard-reviews_text">
                                    отзывов
                                </p>
                                )
                            </a>
                        @else
                            <a class="school_minicard-reviews" href="/{{$course->school?->url?->url}}/#reviews">
                                <p class="school_minicard-reviews_value">
                                    0
                                </p>
                                <p class="school_minicard-reviews_text">
                                    отзывов
                                </p>
                            </a>
                        @endif

                    </div>
                </div>
            </div>
        </div>

        <div class="kurse_card-tags">
            @foreach($course->tags as $tag)
                <div class="kurse_card-tag_element">
                    {{$tag->name}}
                </div>

            @endforeach

        </div>

        <div class="kurse_card-price">
            @if($course->cost != $course->sale_cost)
                <div class="kurse_card-old_price">
                    {{ substr(number_format($course->cost, 0, '', ' '), 0, -3) . ' ' . substr($course->cost, -3) }} ₽
                </div>
            @endif


            <div class="kurse_card-now_price">
                <div class="kurse_card-price_sum">
                    {{ substr(number_format($course->sale_cost, 0, '', ' '), 0, -3) . ' ' . substr($course->sale_cost, -3) }} ₽
                </div>

                @if($course->installment_payment )
                    <div class="kurse_card-price_installment_pay">
                        <p class="kurse_card-price_installment_val">
                            {{ substr(number_format($course->installment_payment, 0, '', ' '), 0, -3) . ' ' . substr($course->installment_payment, -3) }} ₽
                        </p>
                        <p class="kurse_card-price_installment_desc">
                            в месяц
                        </p>
                    </div>
                @endif
            </div>
        </div>
        <!-- <div class="kurse_card-link"> -->
        <a class="kurse_card-link" rel="sponsored" href="@php $type = $course->link_type ?? 'affiliate_link' @endphp {{$course->$type}}" onclick="ym(91433233,'reachGoal','CourseAggregator'); return true;" target="_blank">Подробнее</a>
        <!-- </div> -->
    </div>
</div>


@push('styles')
    <link href="{{ Vite::asset('resources/css/courses/course.css') }}" rel="stylesheet">
@endpush

