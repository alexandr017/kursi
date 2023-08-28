<div class="schools-ajax_cont" id="companies-main-content">
    <div class="product-sort-cont">
        <button class="companies-sort-btn" data-sort-value="rating_count" data-sort-order="" onclick="sortPanel(event, 'companies-sort-btn')">
            Количество отзывов
            <img src="/images/sort-panel/arrow_up_black.svg" alt="Фильтрация" title="Фильтрация">
        </button>

        <button class="companies-sort-btn" data-sort-value="rating_value" data-sort-order="" onclick="sortPanel(event, 'companies-sort-btn')">
            Рейтинг
            <img src="/images/sort-panel/arrow_up_black.svg" alt="Фильтрация" title="Фильтрация">
        </button>

        <button class="companies-sort-btn" data-sort-value="courses_count" data-sort-order="" onclick="sortPanel(event, 'companies-sort-btn')">
            Количество курсов
            <img src="/images/sort-panel/arrow_up_black.svg" alt="Фильтрация" title="Фильтрация">
        </button>
    </div>

    @include('site.v3.templates.company.company-catalog-section', ['companies' => $companies])
</div>

@push('styles')
    <link href="{{ Vite::asset('resources/css/company/companies-main-content.css') }}" rel="stylesheet">
@endpush

@push('scripts')
    <script type="text/javascript" src="{{ Vite::asset('resources/js/company/companies.js') }}"></script>
@endpush
