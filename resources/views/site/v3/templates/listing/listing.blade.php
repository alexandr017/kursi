@extends('site.v3.layouts.main')

@section('content')

    <div class="content max-width">
        <div class="tagpage_head"><h1
                    class="tagpage_head-title"
                    id="bx_1847241719_243"
            >{{$listing->title}}</h1>

            <div class="tagpage_head-desk">
                <div class="tagpage_head-desk_test">
                    {{$listing->description}}
                </div>
            </div>

            <div class="tagpage_head-img">
                <img src="{{$listing->photo}}"
                     alt="{{$listing->title}}">
            </div>
        </div>

        @include('site.v3.modules.courses.courses-main', ['courses' => $listing->courses, 'tags' => $listing->tags, 'listingId' => $listing->id])

        {{--        <div class="mobile_mascot">--}}
        {{--            <img src="{{$listing->photo}}" alt="">--}}
        {{--        </div>--}}
        {{--tagpage-ajax_container Component--}}


        <div class="article_body-cont">
            <div class="article_body html_editor_body_cont">
                {!! $listing->content !!}
            </div>

            <div class="article_body-author">
                @include('site.v3.modules.employee.employee', ['title' => 'Автор подборки', 'employee' => $listing->author, 'date' => $listing->created_at ])
            </div>
        </div>

        <div id="comp_82a98fe7db6be019771aa4ae37d40938">
            @include('site.v3.templates.listing.rating_stars', ['listing' => $listing])
        </div>

        <div class="linker_cont">
            <div class="linker_title" id="bx_4145281613_460">
                <h2>
                    Все курсы {{$listing->parent->name}}
                </h2>
            </div>

            {{--            <input type="checkbox" id="linker_show_input" name="" value="">--}}
            <ul class="linker_list linker_list_courses">
                @foreach($listing->parent->childes as $child)
                    <li id="bx_{{$child->id}}">
                        <p class="linker_item">
                            <a href="/{{$child->url->url}}">
                                {{$child->name}}
                            </a>
                        </p>
                    </li>
                @endforeach
            </ul>
            <div style="clear: both;">
            </div>
        </div>


        @push('styles')
            <link href="{{ Vite::asset('resources/css/listing/listing.css') }}" rel="stylesheet">
        @endpush

{{--        @push('scripts')--}}
{{--            <script type="text/javascript" src="{{ Vite::asset('resources/js/listing/listing.js') }}"></script>--}}
{{--    @endpush--}}

        <script>


            let sortOrder;
            let sortValue;
            let tagsFilters = [];
            let showMoreItems = false;
            let page = 1;

            document.addEventListener('click', function(event) {
                let myElement = document.getElementById('short_filter-property_cont');

                if (!myElement.contains(event.target)) {
                    document.getElementById('filtersList').style.display = 'none'
                }
            });

            function handleShowFilters() {
                const filters = document.getElementById('filtersList');

                filters.style.display === 'none' ?
                    filters.style.display = '' :
                    filters.style.display = 'none'
            }

            function showMore() {
                showMoreItems = true;

                this.sendRequest();
            }

            function sortPanelAjax(evt, listingId) {
                const element = evt.target;
                const img = element.querySelector('img');

                sortOrder = element.getAttribute('data-sort-order');
                sortValue = element.getAttribute('data-sort-value');


                if (!sortOrder) {
                    updateSortButtons();
                }

                if (!element.classList.contains('active')) {
                    element.classList.add('active');
                }

                sortOrder = sortOrder === 'asc' ? 'desc' : 'asc';
                let src = sortOrder === 'desc' ? '/images/sort-panel/arrow_down_blue.svg' : '/images/sort-panel/arrow_up_blue.svg'
                element.setAttribute('data-sort-order', sortOrder);
                img.setAttribute('src', src)

                this.sendRequest()
            }

            function sendRequest ()
            {
                const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

                if (showMoreItems) {
                    page ++;
                } else {
                    page = 1
                }

                let url = `/listings/${listingId}/courses?page=${page}`;

                if (sortValue && sortOrder) {
                    url += `&sort_value=${sortOrder}&sort_key=${sortValue}`
                }

                if (tagsFilters.length) {
                    tagsFilters.forEach(function (tagfilter) {
                        url += `&tags[]=${tagfilter}`
                    })
                }


                fetch(`${url}`, {
                    method: 'GET',
                    headers: {
                        'X-CSRF-TOKEN': csrfToken,
                    }
                })
                    .then(response => response.text())
                    .then(data => {
                        let block = document.getElementById('courses_block')
                        if (showMoreItems) {
                            const parser = new DOMParser();
                            const parsedHTML = parser.parseFromString(data, 'text/html');

                            const fragment = parsedHTML.documentElement;

                            let items = fragment.getElementsByClassName('course-element');
                            const itemsArray = Array.from(items);

                            itemsArray.forEach(function (item) {
                                block.appendChild(item)
                            })
                            showMoreItems = false;
                        } else {
                            block.innerHTML = data
                        }
                    })
                    .catch(error => {
                        alert('Something went wrong');
                        console.error('Error:', error);
                    });
            }

            function updateSortButtons () {
                const elements = document.querySelectorAll('.product-sort-btn.active');

                elements.forEach(element => {
                    element.classList.remove('active');
                    element.setAttribute('data-sort-order', '');
                    element.querySelector('img').setAttribute('src', '/images/sort-panel/arrow_up_black.svg');
                });
            }

            function handleTagFilter (tagId)
            {
                if (tagsFilters.includes(tagId)) {
                    let index = tagsFilters.indexOf(tagId);
                    tagsFilters.splice(index, 1);
                } else {
                    tagsFilters.push(tagId);
                }

                this.sendRequest();

            }
        </script>

@endsection




