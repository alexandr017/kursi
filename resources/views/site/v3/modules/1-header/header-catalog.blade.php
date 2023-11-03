<div
    class="ul second_lvl"
    style="display: none"
    id="{{$path}}"
>
    <div class="header_top_menu-mobile_back_btn">
        <img
            src="/v3/images/arrow.svg"
            alt="Назад"
            title="Назад"
        >
        Назад
    </div>

    @foreach($listings as $listing)
        <div class="li header_menu_parents" name="{{'/'. $listing->url->url}}">
            <div class="header_top_menu-text">
                <div class="only_mobile section_back_btn">
                    <svg width="24" height="24" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M5.72281 4.11002C5.56973 4.25672 5.56973 4.49457 5.72281 4.64127L9.05366 7.83333L5.72281 11.0254C5.56973 11.1721 5.56973 11.4099 5.72281 11.5566C5.87589 11.7033 6.12408 11.7033 6.27716 11.5566L9.88517 8.09896C10.0383 7.95226 10.0383 7.71441 9.88517 7.56771L6.27716 4.11002C6.12408 3.96332 5.87589 3.96333 5.72281 4.11002Z" fill="#101820"></path>
                    </svg>
                </div>

                <img
                    src="/images/listing-icons/{{__('listing-icons.' . $listing->name)}}_01.svg"
                    class="section_img black_img"
                    alt="{{$listing->name}}"
                    title="{{$listing->name}}"
                >
                <img
                    src="/images/listing-icons/{{__('listing-icons.' . $listing->name)}}_02.svg"
                    class="section_img blue_img"
                    alt="{{$listing->name}}"
                    title="{{$listing->name}}"
                >
                <img
                    src="/images/listing-icons/{{__('listing-icons.' . $listing->name)}}_03.svg"
                    class="section_img grey_img"
                    alt="{{$listing->name}}"
                    title="{{$listing->name}}"
                >

                <a href="/{{$listing->url->url}}">
                    {{$listing->name}}
                    <img
                        src="/v3/images/arrow.svg"
                        class="mobile_next_btn"
                    >
                </a>
            </div>

            <div class="ul_cont">
                <div class="ul third_lvl">
                    <div class="kursy-top_menu-right_labelright_labelright_label show-all has_child_label only_mobile">
                        <a href="{{'/'. $listing->url->url}}" class="show-allow-text" >
                            Посмотреть всё
                        </a>
                        <div class="kursy-top_menu-right_label-black_chevron">
                            @include('site.v3.modules.1-header.catalog-listing-childes', ["listing" => $listing])

                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M5.72281 4.11002C5.56973 4.25672 5.56973 4.49457 5.72281 4.64127L9.05366 7.83333L5.72281 11.0254C5.56973 11.1721 5.56973 11.4099 5.72281 11.5566C5.87589 11.7033 6.12408 11.7033 6.27716 11.5566L9.88517 8.09896C10.0383 7.95226 10.0383 7.71441 9.88517 7.56771L6.27716 4.11002C6.12408 3.96332 5.87589 3.96333 5.72281 4.11002Z" fill="#101820"></path>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>

