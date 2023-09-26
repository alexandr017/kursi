@if($courses->isNotEmpty())

    <div class="search_cont">
        <div class="search_head">
            Курсы
        </div>
        <div class="catalog-section  kurses_search_sections ">
            <div class="row product-item-list-col-3">
                @foreach($courses as $course)
                    @include('site.v3.modules.courses.course')
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
