@if($posts->isNotEmpty())
    <div class="search_cont">
        <div class="search_head">
            Онлайн-школы
        </div>
        <div class="catalog-section  kurses_search_sections ">
            <div class="row product-item-list-col-3">
                @foreach($posts as $post)
                    @include('site.v3.modules.post.post-card', ['post' => $post])
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