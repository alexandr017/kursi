@if($courses->isNotEmpty())
    <div class="search_cont">
        <div class="search_head">
            Курсы
        </div>

        <div class="catalog-section  kurses_search_sections ">
            <div class="row product-item-list-col-3" id="coursesBlockSearch">
                @foreach($courses as $course)
                    @include('site.v3.modules.courses.course')
                @endforeach
            </div>
        </div>

        @if($courses->lastPage() != $courses->currentPage())
            <div class="row bx-blue" onclick="showMoreCourses(event)">
                <div class="search-items-more-btn" data-use="show-more-2">
                    Показать ещё
                </div>
            </div>
        @endcanany
    </div>
@endif

@push('styles')
    <link href="{{ Vite::asset('resources/css/search/search-courses.css') }}" rel="stylesheet">
@endpush

<script>
    let currentPageCourses = 1;

    function showMoreCourses(event) {
        let courses = @json($courses);
        let lastPage = courses.last_page;
        currentPageCourses++;

        let currentUrl = window.location.href;
        const urlParams = new URLSearchParams(new URL(currentUrl).search);
        const qValue = urlParams.get("q");
        let url = `search/courses?q=${qValue}&page=${currentPageCourses}`;

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

                let block = document.getElementById('coursesBlockSearch');

                const items = parsedHTML.querySelectorAll('.course-element');

                items.forEach((item, index) => {
                   block.appendChild(item.cloneNode(true));
                });

                if (lastPage < currentPageCourses + 1) {
                    event.target.style.display = 'none';
                    return;
                }
            })
            .catch(error => console.error('Error fetching data:', error));
    }
</script>
