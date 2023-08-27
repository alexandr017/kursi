<div class="schools-ajax_cont">
    <div class="product-sort-cont">
        <button class="companies-sort-btn" data-sort-value="property_vote_count" data-sort-order="" onclick="sortPanel(event, 'companies-sort-btn')">
            Количество отзывов
            <img src="/images/sort-panel/arrow_up_black.svg" alt="Фильтрация" title="Фильтрация">
        </button>

        <button class="companies-sort-btn" data-sort-value="property_rating" data-sort-order="" onclick="sortPanel(event, 'companies-sort-btn')">
            Рейтинг
            <img src="/images/sort-panel/arrow_up_black.svg" alt="Фильтрация" title="Фильтрация">
        </button>

        <button class="companies-sort-btn" data-sort-value="property_lessons_count" data-sort-order="" onclick="sortPanel(event, 'companies-sort-btn')">
            Количество курсов
            <img src="/images/sort-panel/arrow_up_black.svg" alt="Фильтрация" title="Фильтрация">
        </button>
    </div>

    @include('site.v3.templates.company.company-catalog-section')
</div>

@push('styles')
    <link href="{{ Vite::asset('resources/css/company/companies-main-content.css') }}" rel="stylesheet">
@endpush

@push('scripts')
    <script type="text/javascript" src="{{ Vite::asset('resources/js/sort.js') }}"></script>
@endpush
