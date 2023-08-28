<div class="catalog-section bx-blue" data-entity="container-1" id="companies-block-all">
    <div class="row" data-entity="items-row" id="companies-block">
            @foreach($companies as $key => $company)
                @include('site.v3.templates.company.company-catalog-item', ['company' => $company, 'index' => ++$key])
            @endforeach
    </div>
    <div class="product-items-more-btn show_more_btn_color" data-use="show-more-1" onclick="showMore()">
        Показать ещё
    </div>
</div>

@push('styles')
    <link href="{{ Vite::asset('resources/css/company/company-catalog-section.css') }}" rel="stylesheet">
@endpush
