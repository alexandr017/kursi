<div class="product-item-container company-item" id="bx_3966226736_15348_7e1b8e3524755c391129a9d7e6f2d206" data-entity="item">
    <div class="product-item">
        @if(isset($key))
            <div class="product-item-num">
                {{$key}}
            </div>
        @endif

    <a class="product-item-image-wrapper" href="/{{$company->url?->url}}" title="{{$company->name}}" data-entity="image-wrapper">
        <span class="product-item-image-slider-slide-container slide" id="bx_3966226736_15348_7e1b8e3524755c391129a9d7e6f2d206_pict_slider" style="display: none;" data-slider-interval="3000" data-slider-wrap="true"></span>
        <span class="product-item-image-original" id="bx_3966226736_15348_7e1b8e3524755c391129a9d7e6f2d206_pict" style="background-image: url('{{$company->logo}}'); "></span>
        <div class="product-item-image-slider-control-container" id="bx_3966226736_15348_7e1b8e3524755c391129a9d7e6f2d206_pict_slider_indicator" style="display: none;"></div>
    </a>
    <div class="product-item-info-cont">
        <div class="product-item-title">
            <a href="/{{$company->url?->url}}" title="{{$company->name}}">
                {{$company->h1}}
            </a>
        </div>

        <div class="product-item-raiting">
            <div class="product-item-raiting-value">
                {{$company->rating_value}}
            </div>
            <div class="product-item-raiting-star">
                <img src="/images/system/rating_star_blue.svg" alt="Картинка оценки курса" title="Картинка оценки курса">
            </div>
        </div>
        <div class="product-item-vote_count-value">
            <a href="/{{$company->url?->url}}/#vote">({{$company->rating_count}}<span> отзывов</span>)</a>
        </div>
        <div class="product-item-kurses">
            <div class="product-item-kurses-book">
                <img src="/images/system/book.svg" alt="Количество курсов" title="Количество курсов">
            </div>
            <div class="product-item-kurses-count">
                {{$company->courses_count}} курс
            </div>
        </div>
    </div>
</div>
</div>

@push('styles')
    <link href="{{ Vite::asset('resources/css/company/company-catalog-item.css') }}" rel="stylesheet">
@endpush

