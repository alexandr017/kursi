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

<style>
    .search_cont {
        padding-bottom: 40px;
    }

    .search-items-more-btn {
        color: #469ED7;
        text-align: center;
        background: white;
        border: 1px solid #469ED7;
        padding: 11px;
        font-size: 18px;
        border-radius: 47px;
        cursor: pointer;
        margin: 40px auto 0 0;
        width: 250px;
    }

    @media (max-width: 860px) {
        .search-items-more-btn {
            width: unset;
        }

        .kurses_search_sections .product-item-list-col-3 {
            white-space: initial;
            display: block;
        }

        .kurse_card.card_pc {
            padding: 40px;
            width: 45%;
            height: auto;
            margin-right: 5px;
            display: inline-flex;
            flex-direction: column;
            align-items: flex-start;
            min-width: 300px;
            max-width: 360px;
            justify-content: space-between;
        }

        section.kurses_search_sections .kurse_card.card_pc {
            width: 100%;
            max-width: unset;
        }

        .card_pc .kurse_card-title {
            margin-bottom: 26px;
        }
    }
</style>

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
