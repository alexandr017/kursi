@if($companies->isNotEmpty())
    <div class="search_cont">
        <div class="search_head">
            Онлайн-школы
        </div>

        <div class="catalog-section  schools_search_sections ">
            <div class="row product-item-list-col-3" id="companiesBlockSearch">
                @foreach($companies as $company)
                    @include('site.v3.templates.company.company-catalog-item', ['company' => $company])
                @endforeach
            </div>
        </div>

        @if($companies->lastPage() != $companies->currentPage())
            <div class="row bx-blue" onclick="showMoreCompanies(event)">
                <div class="search-items-more-btn" data-use="show-more-2">
                    Показать ещё
                </div>
            </div>
        @endif
    </div>
@endif

<script>
    let currentPageCompanies = 1;

    function showMoreCompanies(event) {
        let companies = @json($companies);
        let lastPage = companies.last_page;
        currentPageCompanies++;

        let currentUrl = window.location.href;
        const urlParams = new URLSearchParams(new URL(currentUrl).search);
        const qValue = urlParams.get("q");
        let url = `/search/companies?q=${qValue}&page=${currentPageCompanies}`;

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

                let block = document.getElementById('companiesBlockSearch');

                const items = parsedHTML.querySelectorAll('.company-item');

                items.forEach((item, index) => {
                    block.appendChild(item.cloneNode(true));
                });

                if (lastPage < currentPageCompanies + 1) {
                    event.target.style.display = 'none';
                    return;
                }
            })
            .catch(error => console.error('Error fetching data:', error));
    }
</script>
