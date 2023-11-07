@if($listing->childes)
    @php
        $allChildesHaveNoChildren = true;

        // Check if any child has children
        foreach($listing->childes as $index => $childFirst) {
            if (count($childFirst->childes) > 0) {
                $allChildesHaveNoChildren = false;
                break;
            }
        }
    @endphp

    @if($allChildesHaveNoChildren && $isFirstLevel)
        <div class="kursy-top_menu-left_subitems first" style="grid-row: 1/50">
            <div class="kursy-top_menu-right_label has_child_label only_mobile">
                <a href="{{'/'. $listing->url->url}}">
                    Посмотреть всё
                </a>
                <div class="kursy-top_menu-right_label-grey_chevron">
                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g id="Icon / chevron-left">
                            <path
                                id="Vector (Stroke)"
                                fill-rule="evenodd"
                                clip-rule="evenodd"
                                d="M5.72278 4.11002C5.5697 4.25672 5.5697 4.49457 5.72278 4.64127L9.05363 7.83333L5.72278 11.0254C5.5697 11.1721 5.5697 11.4099 5.72278 11.5566C5.87586 11.7033 6.12405 11.7033 6.27713 11.5566L9.88514 8.09896C10.0382 7.95226 10.0382 7.71441 9.88514 7.56771L6.27713 4.11002C6.12405 3.96332 5.87586 3.96333 5.72278 4.11002Z"
                                fill="#A9AAAA"
                            ></path>
                        </g>
                    </svg>
                </div>
                <div class="kursy-top_menu-right_label-black_chevron">
                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            fill-rule="evenodd"
                            clip-rule="evenodd"
                            d="M5.72281 4.11002C5.56973 4.25672 5.56973 4.49457 5.72281 4.64127L9.05366 7.83333L5.72281 11.0254C5.56973 11.1721 5.56973 11.4099 5.72281 11.5566C5.87589 11.7033 6.12408 11.7033 6.27716 11.5566L9.88517 8.09896C10.0383 7.95226 10.0383 7.71441 9.88517 7.56771L6.27716 4.11002C6.12408 3.96332 5.87589 3.96333 5.72281 4.11002Z"
                            fill="#101820"
                        ></path>
                    </svg>
                </div>
            </div>
            @foreach($listing->childes as $index => $childFirst)
                @if($index % 5 == 0 && $allChildesHaveNoChildren)
                    <div class="kursy-top_menu-block">
                        @endif
                        <div class="kursy-top_menu-body_item check-active">
                            <a href="{{linkWithSlash($childFirst->url->url)}}">
                                {{$childFirst->name}}
                            </a>

                            @if(count($childFirst->childes) > 0)
                                <div class="kursy-top_menu-right_label-grey_chevron">
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g id="Icon / chevron-left">
                                            <path
                                                id="Vector (Stroke)"
                                                fill-rule="evenodd"
                                                clip-rule="evenodd"
                                                d="M5.72278 4.11002C5.5697 4.25672 5.5697 4.49457 5.72278 4.64127L9.05363 7.83333L5.72278 11.0254C5.5697 11.1721 5.5697 11.4099 5.72278 11.5566C5.87586 11.7033 6.12405 11.7033 6.27713 11.5566L9.88514 8.09896C10.0382 7.95226 10.0382 7.71441 9.88514 7.56771L6.27713 4.11002C6.12405 3.96332 5.87586 3.96333 5.72278 4.11002Z"
                                                fill="#A9AAAA"
                                            ></path>
                                        </g>
                                    </svg>
                                </div>
                            @endif
                        </div>
                        @if(($index + 1) % 5 == 0 || $index == count($listing->childes) - 1 && $allChildesHaveNoChildren)
                    </div>
                @endif
            @endforeach
        </div>
    @else
        <div class="kursy-top_menu-left_subitems second" style="grid-row: 1/50">
            <div class="kursy-top_menu-right_cont has_child" style="grid-row:1/50; grid-template-rows: repeat(22, auto) 1fr;">
                <div class="kursy-top_menu-right_label has_child_label only_mobile">
                    <a href="{{'/'. $listing->url->url}}">
                        Посмотреть всё
                    </a>
                    <div class="kursy-top_menu-right_label-grey_chevron">
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g id="Icon / chevron-left">
                                <path
                                    id="Vector (Stroke)"
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                                    d="M5.72278 4.11002C5.5697 4.25672 5.5697 4.49457 5.72278 4.64127L9.05363 7.83333L5.72278 11.0254C5.5697 11.1721 5.5697 11.4099 5.72278 11.5566C5.87586 11.7033 6.12405 11.7033 6.27713 11.5566L9.88514 8.09896C10.0382 7.95226 10.0382 7.71441 9.88514 7.56771L6.27713 4.11002C6.12405 3.96332 5.87586 3.96333 5.72278 4.11002Z"
                                    fill="#A9AAAA"
                                ></path>
                            </g>
                        </svg>
                    </div>
                    <div class="kursy-top_menu-right_label-black_chevron">
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                fill-rule="evenodd"
                                clip-rule="evenodd"
                                d="M5.72281 4.11002C5.56973 4.25672 5.56973 4.49457 5.72281 4.64127L9.05366 7.83333L5.72281 11.0254C5.56973 11.1721 5.56973 11.4099 5.72281 11.5566C5.87589 11.7033 6.12408 11.7033 6.27716 11.5566L9.88517 8.09896C10.0383 7.95226 10.0383 7.71441 9.88517 7.56771L6.27716 4.11002C6.12408 3.96332 5.87589 3.96333 5.72281 4.11002Z"
                                fill="#101820"
                            ></path>
                        </svg>
                    </div>
                </div>
                @foreach($listing->childes as $index => $childFirst)
                    <div class="kursy-top_menu-right_label no_link has_child_label check-active {{$childFirst->childes->isEmpty() ? 'no-childs' : ''}} {{($index > 18 && $isFirstLevel) ? 'hide-item items-for-hide' : ''}}">
                        <a href="{{linkWithSlash($childFirst->url->url)}}">
                            {{$childFirst->name}}
                        </a>

                        @if(!$childFirst->childes->isEmpty())
                            <div class="kursy-top_menu-right_label-grey_chevron">
                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g id="Icon / chevron-left">
                                        <path
                                            id="Vector (Stroke)"
                                            fill-rule="evenodd"
                                            clip-rule="evenodd"
                                            d="M5.72278 4.11002C5.5697 4.25672 5.5697 4.49457 5.72278 4.64127L9.05363 7.83333L5.72278 11.0254C5.5697 11.1721 5.5697 11.4099 5.72278 11.5566C5.87586 11.7033 6.12405 11.7033 6.27713 11.5566L9.88514 8.09896C10.0382 7.95226 10.0382 7.71441 9.88514 7.56771L6.27713 4.11002C6.12405 3.96332 5.87586 3.96333 5.72278 4.11002Z"
                                            fill="#A9AAAA"
                                        ></path>
                                    </g>
                                </svg>
                            </div>
                            <div class="kursy-top_menu-right_label-black_chevron">
                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        fill-rule="evenodd"
                                        clip-rule="evenodd"
                                        d="M5.72281 4.11002C5.56973 4.25672 5.56973 4.49457 5.72281 4.64127L9.05366 7.83333L5.72281 11.0254C5.56973 11.1721 5.56973 11.4099 5.72281 11.5566C5.87589 11.7033 6.12408 11.7033 6.27716 11.5566L9.88517 8.09896C10.0383 7.95226 10.0383 7.71441 9.88517 7.56771L6.27716 4.11002C6.12408 3.96332 5.87589 3.96333 5.72281 4.11002Z"
                                        fill="#101820"
                                    ></path>
                                </svg>
                            </div>
                        @endif
                    </div>

                    @if(!$childFirst->childes->isEmpty())
                        @include('site.v3.modules.1-header.catalog-listing-childes', ["listing" => $childFirst, "isFirstLevel" => false])
                    @endif
                @endforeach

                @if(count($listing->childes) > 18 && $isFirstLevel)
                    <div class="kursy-top_menu-right_label kursy-top_menu-right_dropdown dropdown-button" onclick="openDropdown(event)">
                        <span>Показать все</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                            <path
                                fill-rule="evenodd"
                                clip-rule="evenodd"
                                d="M4.11481 6.11481C4.26789 5.96173 4.51608 5.96173 4.66915 6.11481L8 9.44565L11.3308 6.11481C11.4839 5.96173 11.7321 5.96173 11.8852 6.11481C12.0383 6.26789 12.0383 6.51608 11.8852 6.66915L8.27717 10.2772C8.12409 10.4303 7.87591 10.4303 7.72283 10.2772L4.11481 6.66915C3.96173 6.51608 3.96173 6.26789 4.11481 6.11481Z"
                                fill="#101820"
                            ></path>
                        </svg>
                    </div>
                @endif
            </div>
        </div>
    @endif
@endif
