<div class="tagpage-ajax_container">
    <div class="tagpage-filter_sort">
        <div class="product-sort-cont">
            <button class="product-sort-btn" data-sort-order=""  data-sort-value="reviews_count" onclick="sortPanelAjax(event, {{$listingId}})">
                Количество отзывов
                <img src="/images/sort-panel/arrow_up_black.svg" alt="Фильтрация по возрастанию" title="Фильтрация по возрастанию">
            </button>

            <button class="product-sort-btn" data-sort-order="" data-sort-value="school_reviews_avg_rating" onclick="sortPanelAjax(event, {{$listingId}})">
                Рейтинг
                <img src="/images/sort-panel/arrow_up_black.svg" alt="Фильтрация по возрастанию" title="Фильтрация по возрастанию">
            </button>

            <button class="product-sort-btn" data-sort-order="" data-sort-value="sale_cost" onclick="sortPanelAjax(event, {{$listingId}})">
                Цена
                <img src="/images/sort-panel/arrow_up_black.svg" alt="Фильтрация по возрастанию" title="Фильтрация по возрастанию">
            </button>
            <button class="product-sort-btn" data-sort-order="" data-sort-value="installment_period" onclick="sortPanelAjax(event, {{$listingId}})">
                Платёж по рассрочке
                <img src="/images/sort-panel/arrow_up_black.svg" alt="Фильтрация по возрастанию" title="Фильтрация по возрастанию">
            </button>

            <button class="product-sort-btn" data-sort-order="" data-sort-value="duration_in_hours" onclick="sortPanelAjax(event, {{$listingId}})">
                Длительность в часах
                <img src="/images/sort-panel/arrow_up_black.svg" alt="Фильтрация по возрастанию" title="Фильтрация по возрастанию">
            </button>
        </div>

        <div class="short_filter-cont">
            <div class="short_filter-property_cont" style="position: relative" id="short_filter-property_cont">
                <label class="short_filter-property_title" for="opener_40" onclick="handleShowFilters()" >
                    <img src="/v3/images/filter.svg" alt="" title="Фильтр">
                    <p>Фильтр</p>
                </label>
                <input type="checkbox" style="display: none" id="opener_40" name="opener[]" value="40" data-gtm-form-interact-field-id="5">

                <div class="short_filter-property_values"{{-- style="position: absolute; top: 40px; "--}} style="display: none" id="filtersList">
                    <label class="" for="opener_40" onclick="handleShowFilters()">
                        <div class="mobile_background"></div>
                    </label>

                    <label class="short_filter-mobile_open_title" for="opener_40" onclick="handleShowFilters()">
                        <p>Фильтр</p>
                    </label>

                    <div class="short_filter-property_items">
                        @foreach($tags as $tag)
                            <div class="short_filter-property_value">
                                <input
                                        style="display: none"
                                        type="checkbox"
                                        name="SF_PROPERTY_40[]"
                                        id="SF_PROPERTY_40_{{$tag->id}}"
                                        value="{{$tag->id}}"
                                        onchange="handleTagFilter({{$tag->id}})"
                                >
                                <label for="SF_PROPERTY_40_{{$tag->id}}">
                                    <img src="{{$tag->image}}" alt="Очно" title="Очно">
                                    <p>{{$tag->name}}</p>
                                </label>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

    @push('styles')
        <link href="{{ Vite::asset('resources/css/courses/courses-main.css') }}" rel="stylesheet">
    @endpush

    @include('site.v3.modules.courses.courses', ['courses' => $courses])

    @if($courses->count() >= 5)
        <div class="product-items-more-btn show_more_btn_color" data-use="show-more-3" id="courses-show-more" onclick="showMore()">
            Показать ещё
        </div>
    @endif

    <!-- component-end -->


    @if(isset($listingPhoto))
        <div class="mobile_mascot">
            <img src="{{$listingPhoto}}" alt="">
        </div>
    @endif
</div>

<script>
    let listingId = @json($listingId);
</script>
