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

    @if(!$allChildesHaveNoChildren)
        <div class="block">
    @endif
        @foreach($listing->childes as $index => $childFirst)
            @if($index % 5 == 0 && $allChildesHaveNoChildren)
                <div class="block">
            @endif

            <div class="li childes" style="grid-row: {{$index + 1}}">
                <div class="header_top_menu-text childes">
                    <a href="/{{$childFirst->url->url}}">
                        {{$childFirst->name}}
                    </a>

                    @if(count($childFirst->childes) > 0)
                        <div class="kursy-top_menu-right_label-grey_chevron">
                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g id="Icon / chevron-left">
                                    <path id="Vector (Stroke)" fill-rule="evenodd" clip-rule="evenodd" d="M5.72278 4.11002C5.5697 4.25672 5.5697 4.49457 5.72278 4.64127L9.05363 7.83333L5.72278 11.0254C5.5697 11.1721 5.5697 11.4099 5.72278 11.5566C5.87586 11.7033 6.12405 11.7033 6.27713 11.5566L9.88514 8.09896C10.0382 7.95226 10.0382 7.71441 9.88514 7.56771L6.27713 4.11002C6.12405 3.96332 5.87586 3.96333 5.72278 4.11002Z" fill="#A9AAAA"></path>
                                </g>
                            </svg>
                        </div>
                    @endif
                </div>
            </div>

            @if(!$allChildesHaveNoChildren)
                <div class="childes_list" style="grid-row: 1/37">
                    <div>
                        @include('site.v3.modules.1-header.catalog-listing-childes', ["listing" => $childFirst])
                    </div>
                </div>
            @elseif(($index + 1) % 5 == 0 || $index == count($listing->childes) - 1 && $allChildesHaveNoChildren)
                </div>
            @endif
        @endforeach
    @if(!$allChildesHaveNoChildren)
        </div>
    @endif
@endif

<style>
    .block {
        grid-template-rows: repeat(35, auto) 1fr;
        display: grid;
        grid-template-columns: auto 1fr;
        padding-left: 32px;
    }

    .li.childes {
        display: inline-flex;
        justify-content: space-between;
        align-items: center;
        gap: 8px;
    }

    .childes_list {
        display: none;
    }

    .li:hover + .childes_list,
    .childes_list:hover {
        display: grid;
        grid-column: 2;
        background: white;
        height: 100%;
    }

    .block .header_top_menu-text.childes {
        justify-content: space-between;
        width: 100%;
    }

    .ul.third_lvl a {
        width: 100%;
        color: #000000;
    }
</style>
