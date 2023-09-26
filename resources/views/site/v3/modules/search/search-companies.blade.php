@if($companies->isNotEmpty())
    <div class="search_cont">
        <div class="search_head">
            Онлайн-школы
        </div>
        <div class="catalog-section  kurses_search_sections ">
            <div class="row product-item-list-col-3">
                @foreach($companies as $company)
                    @include('site.v3.templates.company.company-catalog-item', ['company' => $company])
                @endforeach
            </div>
        </div>

        <div class="row bx-blue">
            <div class="search-items-more-btn" data-use="show-more-2">
                Показать ещё
            </div>
        </div>
    </div>
@endif