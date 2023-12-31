<?php global $c; $c = $listing->coursesStructuredData; ?>
@extends('site.v3.layouts.main')
@section ('title', Shortcode::compile($listing->meta_title))
@section ('og_title', Shortcode::compile($listing->h1))
@section ('meta_description', Shortcode::compile($listing->meta_description))

@section('content')
    <div class="content max-width">
        <div class="tagpage_head">
            <h1 class="tagpage_head-title">{{$listing->h1}}</h1>

            <div class="tagpage_head-desk">
                <div class="tagpage_head-desk_test">
                    {{$listing->lead}}
                </div>
            </div>

            @if(!is_null($listing->photo))
                <div class="tagpage_head-img">
                    <img src="{{$listing->photo}}" alt="{{$listing->title}}">
                </div>
            @endif
        </div>

        @include(
            'site.v3.modules.courses.courses-main',
            [
             'courses' => $listing->courses,
             'tags' => $listing->tags,
             'listingId' => $listing->id,
             'listingPhoto' => $listing->photo
            ]
        )

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

        <div>
            @include('site.v3.modules.5-rating.rating', ['entityId' => $listing->id, 'entityType' => 'listing', 'ratingCount' => $listing->getRatingsCount(),'ratingValue' => $listing->getRatingsValue()])
        </div>

        <div class="linker_cont">
            <div class="linker_title">
                <h2>Все курсы {{$listing->parent->name}}</h2>
            </div>

            {{--            <input type="checkbox" id="linker_show_input" name="" value="">--}}
            <ul class="linker_list linker_list_courses" id="listing-linker-show-more">
                @foreach($listing->parent->childes as $key => $child)
                    <li id="bx_{{$child->id}}" class="@if($key > 17)  for-hide-linker-items @endif">
                        <p class="linker_item">
                            <a href="{{linkWithSlash($child->url->url)}}">
                                {{$child->name}}
                            </a>
                        </p>
                    </li>
                @endforeach
            </ul>

            @if($listing->parent->childes->count() > 18)
                <label id="show-more-linker-items" for="linker_show_input" class="linker_open_btn show_more_btn_color" onclick="showMoreChildes()">Показать ещё</label>
            @endif

            <div style="clear: both;"></div>
        </div>

    </div>

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
                        let itemsArray;
                        if (showMoreItems) {
                            const parser = new DOMParser();
                            const parsedHTML = parser.parseFromString(data, 'text/html');

                            const fragment = parsedHTML.documentElement;

                            let items = fragment.getElementsByClassName('course-element');
                            itemsArray = Array.from(items);

                            itemsArray.forEach(function (item) {
                                block.appendChild(item)
                            })
                            showMoreItems = false;
                        } else {
                            block.innerHTML = data

                            const parser = new DOMParser();
                            const parsedHTML = parser.parseFromString(data, 'text/html');

                            const fragment = parsedHTML.documentElement;

                            let items = fragment.getElementsByClassName('course-element');
                            itemsArray = Array.from(items);
                        }

                        if (itemsArray.length < 5) {
                            document.getElementById('courses-show-more').style.display = 'none'
                        }
                    })
                    .catch(error => {
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

            document.addEventListener('DOMContentLoaded', hearListeners);

            function hearListeners() {
                document.querySelectorAll('.content_video_block').forEach(function(element) {
                    element.addEventListener("click", addVideoContent);
                });
            }

            function addVideoContent(event) {
                let videoUrl = getVideoUrl(event);

                const videoWrapper = document.createElement('div');
                videoWrapper.className = 'video_page-wrapper video_optional-width';
                videoWrapper.id = 'videoContent';

                videoWrapper.addEventListener('click', handleOutsideClick);

                const innerHTML = `
        <div class="vertical_position-wrapper-video null" >
            <div class="video-wrapper_position">
                <div class="wrapper_svg" onclick="closeVideoContent()">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="12" cy="12" r="12" fill="#D9D9D9"></circle>
                        <path d="M13.0579 11.9999L16.2829 8.7824C16.4242 8.64117 16.5035 8.44962 16.5035 8.2499C16.5035 8.05017 16.4242 7.85862 16.2829 7.71739C16.1417 7.57617 15.9502 7.49683 15.7504 7.49683C15.5507 7.49683 15.3592 7.57617 15.2179 7.71739L12.0004 10.9424L8.78294 7.71739C8.64171 7.57617 8.45017 7.49683 8.25044 7.49683C8.05072 7.49683 7.85917 7.57617 7.71794 7.71739C7.57671 7.85862 7.49737 8.05017 7.49737 8.2499C7.49737 8.44962 7.57671 8.64117 7.71794 8.7824L10.9429 11.9999L7.71794 15.2174C7.64765 15.2871 7.59185 15.3701 7.55377 15.4615C7.5157 15.5529 7.49609 15.6509 7.49609 15.7499C7.49609 15.8489 7.5157 15.9469 7.55377 16.0383C7.59185 16.1297 7.64765 16.2127 7.71794 16.2824C7.78766 16.3527 7.87062 16.4085 7.96201 16.4466C8.0534 16.4846 8.15143 16.5042 8.25044 16.5042C8.34945 16.5042 8.44748 16.4846 8.53888 16.4466C8.63027 16.4085 8.71322 16.3527 8.78294 16.2824L12.0004 13.0574L15.2179 16.2824C15.2877 16.3527 15.3706 16.4085 15.462 16.4466C15.5534 16.4846 15.6514 16.5042 15.7504 16.5042C15.8495 16.5042 15.9475 16.4846 16.0389 16.4466C16.1303 16.4085 16.2132 16.3527 16.2829 16.2824C16.3532 16.2127 16.409 16.1297 16.4471 16.0383C16.4852 15.9469 16.5048 15.8489 16.5048 15.7499C16.5048 15.6509 16.4852 15.5529 16.4471 15.4615C16.409 15.3701 16.3532 15.2871 16.2829 15.2174L13.0579 11.9999Z" fill="white"></path>
                    </svg>
                </div>
                <div class="iframe-shadow" style="line-height: 0;">
                    <iframe class="border-radius" style="width: 100%; height: 100%" src=${videoUrl}?autoplay=1 allow="autoplay"></iframe>
                </div>
            </div>
        </div>
    `;

                videoWrapper.innerHTML = innerHTML;
                document.body.appendChild(videoWrapper);
            }

            function handleOutsideClick(event) {
                const clickedElement = event.target;

                if (!clickedElement.closest('.videoContent')) {
                    closeVideoContent();
                }
            }

            function getVideoUrl() {
                let clickedElement = event.target;

                while (clickedElement && !clickedElement.hasAttribute("data-url")) {
                    clickedElement = clickedElement.parentElement;
                }

                return clickedElement.getAttribute("data-url");
            }

            function closeVideoContent() {
                const videoContent = document.querySelector('#videoContent');

                if (videoContent) {
                    videoContent.remove();
                }
            }

            function showMoreChildes() {
                let elementsChildes = document.getElementsByClassName('for-hide-linker-items');
                Array.from(elementsChildes).forEach(function (item) {
                    item.classList.remove('for-hide-linker-items')
                })

                document.getElementById('show-more-linker-items').style.display = 'none'
            }

        </script>

    @push('styles')
        <link href="{{ Vite::asset('resources/css/listing/listing.css') }}" rel="stylesheet">
    @endpush

    <style>
        .video_optional-width {
            padding: 0 160px;
            width: 100%;
            margin: 0 auto;
        }

        .video_page-wrapper {
            width: 100%;
        }

        .video_page-wrapper {
            z-index: 1000000;
            display: flex;
            flex-direction: row;
            justify-content: center;
            align-items: center;
            position: fixed;
            width: 100%;
            height: 100%;
        }

        .vertical_position-wrapper-video {
            width: 100%;
            display: flex;
            flex-direction: row;
            justify-content: center;
            align-items: center;
        }


        .video-wrapper_position {
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: row-reverse;
            gap: 24px;
            padding-top: 50%;
            position: relative;
        }

        .wrapper_svg {
            margin-bottom: 16px;
            display: flex;
            flex-direction: row;
            justify-content: end;
            align-items: end;
            align-self: flex-start;
            position: absolute;
            right: -49px;
            top: 0px;
            cursor: pointer;
        }

        .wrapper_svg svg path {
            fill: #343434;
        }

        .iframe-shadow {
            width: 100%;
            position: absolute;
            top: 0;
            left: 0;
            bottom: 0;
            right: 0;
        }

        .border-radius {
            border: none;
            border-radius: 16px;
        }

        @media (max-width: 1200px) {
            .video_optional-width {
                padding: 0px 80px;
            }
        }

        @media (max-width: 1000px) {
            .video_optional-width {
                padding: 0 28px;
            }

            .wrapper_svg {
                right: 1px;
                top: -41px;
            }
        }

        @media (max-width: 860px) {
            .video_optional-width {
                padding: 0 20px;
            }

            .wrapper_svg {
                align-self: flex-end;
            }

            .video-wrapper_position {
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
                gap: 0px;
            }

            .border-radius {
                border-radius: 8px;
            }
        }
    </style>
@endsection


@section('custom-structured-data')
@include('site.structured-data.ProductListing')
@endsection

