@extends('site.v3.layouts.main')
@section ('title', Shortcode::compile($listing->title))
@section ('og_title', Shortcode::compile($listing->h1))
@section ('meta_description', Shortcode::compile($listing->meta_description))

@section('content')

    <div class="content max-width">
        <div class="tagpage_head"><h1
                    class="tagpage_head-title"
                    id="bx_1847241719_243"
            >{{$listing->title}}</h1> h1

            <div class="tagpage_head-desk">
                <div class="tagpage_head-desk_test">
                    {{$listing->description}}lead
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
                @include('site.v3.modules.employee.employee', ['title' => 'Автор подборки', 'employee' => $listing->author])
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


@section('custom-structured-data')
    <script type="application/ld+json">
        {
            "@context": "https://www.schema.org",
            "@type": "Product",
            "aggregateRating": {
            "@type": "AggregateRating",
                "bestRating": "5",
                "ratingValue": 4.7599999999999997868371792719699442386627197265625,
                "reviewCount": 23
        },
            "name": "Рисование комиксов",
            "description": "Подборка лучших онлайн-курсов рисования комиксов для детей и подростков. Онлайн-обучение с профессиональными преподавателями. Эффективная программа и отзывы учеников.",
            "offers": {
            "@type": "AggregateOffer",
                "offerCount": 6,
                "highPrice": "57600",
                "lowPrice": "1990",
                "priceCurrency": "Rub",
                "offers": [
                {
                    "@type": "Offer",
                    "name": "Создание комиксов Манга",
                    "url": "https://go.redav.online/c3619c64969478b1?dl=https%3A%2F%2Fcoddyschool.com%2Fcourses%2Fsozdanie_komiksov_manga%2F",
                    "price": "6800",
                    "offeredBy": {
                        "@type": "EducationalOrganization",
                        "name": "Coddyschool",
                        "image": {
                            "@type": "ImageObject",
                            "url": "https://kursy.ru/upload/iblock/839/2qzqwrdiyhbeem9e3moj0j0yhqozn1b0/CoddyLogo.webp"
                        }
                    }
                },
                {
                    "@type": "Offer",
                    "name": "Как рисовать комикс",
                    "url": "https://lil.school/course/kak-risovat-komiks/",
                    "price": "1990",
                    "offeredBy": {
                        "@type": "EducationalOrganization",
                        "name": "Lil school",
                        "image": {
                            "@type": "ImageObject",
                            "url": "https://kursy.ru/upload/iblock/4cc/kxd0mstzl2p9m3i5qvk1bul4ldn0mqln/Lil-school-_1_.webp"
                        }
                    }
                },
                {
                    "@type": "Offer",
                    "name": "Авторский комикс. Углубленный курс",
                    "url": "https://design.hse.ru/kids/programs/234",
                    "price": "57600",
                    "offeredBy": {
                        "@type": "EducationalOrganization",
                        "name": "Детская школа дизайна НИУ ВШЭ",
                        "image": {
                            "@type": "ImageObject",
                            "url": "https://kursy.ru/upload/iblock/0d0/t117s3agxa34sz6g6fi4tvy9jdkzx76w/niu_vshe.webp"
                        }
                    }
                },
                {
                    "@type": "Offer",
                    "name": "Авторский комикс, (Санкт-Петербург)",
                    "url": "https://design.hse.ru/kids/programs/263",
                    "price": "57600",
                    "offeredBy": {
                        "@type": "EducationalOrganization",
                        "name": "Детская школа дизайна НИУ ВШЭ",
                        "image": {
                            "@type": "ImageObject",
                            "url": "https://kursy.ru/upload/iblock/0d0/t117s3agxa34sz6g6fi4tvy9jdkzx76w/niu_vshe.webp"
                        }
                    }
                },
                {
                    "@type": "Offer",
                    "name": "Авторский комикс",
                    "url": "https://design.hse.ru/kids/programs/131",
                    "price": "57600",
                    "offeredBy": {
                        "@type": "EducationalOrganization",
                        "name": "Детская школа дизайна НИУ ВШЭ",
                        "image": {
                            "@type": "ImageObject",
                            "url": "https://kursy.ru/upload/iblock/0d0/t117s3agxa34sz6g6fi4tvy9jdkzx76w/niu_vshe.webp"
                        }
                    }
                },
                {
                    "@type": "Offer",
                    "name": "Создаем собственный комикс: мастер-класс для подростков 12+",
                    "url": "https://designschool.ru/courses/schoolchild/sozdaem-sobstvennyiy-komiks-master-klass-dlya-podrostkov-12/",
                    "price": "4000",
                    "offeredBy": {
                        "@type": "EducationalOrganization",
                        "name": "Международная школа дизайна",
                        "image": {
                            "@type": "ImageObject",
                            "url": "https://kursy.ru/upload/iblock/168/f2wncnwly83np4cmb2nto0yxqmi089mu/mezhdunarodnaya_shkola_dizajna.webp"
                        }
                    }
                }
            ]
        },
            "image": "https://kursy.ru/upload/iblock/359/dmvuwptfexpnbpmo4ipd7ode642k22bn/risovanie_komiksov.webp"
        }
    </script>
@endsection

