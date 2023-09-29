@if($posts->isNotEmpty())
    <div class="search_cont">
        <div class="search_head">
            Статьи
        </div>

        <div class="catalog-section  blog_search_sections">
            <div class="row product-item-list-col-3" id="postsBlockSearch">
                @foreach($posts as $post)
                    @include('site.v3.modules.post.post-card', ['post' => $post])
                @endforeach
            </div>
        </div>

        @if($posts->lastPage() != $posts->currentPage())
            <div class="row bx-blue"  onclick="showMorePosts(event)" style="display: block">
                <div class="search-items-more-btn" data-use="show-more-2">
                    Показать ещё
                </div>
            </div>
        @endif
    </div>
@endif

<script>
    let currentPagePosts = 1;

    function showMorePosts(event) {
        let posts = @json($posts);
        let lastPage = posts.last_page;
        currentPagePosts++;

        let currentUrl = window.location.href;
        const urlParams = new URLSearchParams(new URL(currentUrl).search);
        const qValue = urlParams.get("q");
        let url = `search/posts?q=${qValue}&page=${currentPagePosts}`;

        const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

        fetch(url, {
            method: 'GET',
            headers: {
                'X-CSRF-TOKEN': csrfToken,
            }
        })
            .then(response => response.text())
            .then(data => {
                const parser = new DOMParser();
                const parsedHTML = parser.parseFromString(data, 'text/html');

                let block = document.getElementById('postsBlockSearch');

                const items = parsedHTML.querySelectorAll('.news_item');

                items.forEach((item, index) => {
                   block.appendChild(item.cloneNode(true));
                });

                if (lastPage < currentPagePosts + 1) {
                    event.target.style.display = 'none';
                    return;
                }
            })
            .catch(error => console.error('Error fetching data:', error));
    }
</script>

