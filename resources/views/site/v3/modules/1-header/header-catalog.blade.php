<div class="kursy-top_menu-tab" id="{{$path}}">
    <label class="kursy-top_menu-left_label only_mobile close-catalog">
        <svg width="24" height="24" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path
                fill-rule="evenodd"
                clip-rule="evenodd"
                d="M5.72281 4.11002C5.56973 4.25672 5.56973 4.49457 5.72281 4.64127L9.05366 7.83333L5.72281 11.0254C5.56973 11.1721 5.56973 11.4099 5.72281 11.5566C5.87589 11.7033 6.12408 11.7033 6.27716 11.5566L9.88517 8.09896C10.0383 7.95226 10.0383 7.71441 9.88517 7.56771L6.27716 4.11002C6.12408 3.96332 5.87589 3.96333 5.72281 4.11002Z"
                fill="#101820"
            ></path>
        </svg>
        <p>Назад</p>
    </label>

    @foreach($listings as $index => $listing)
        <div class="kursy-top_menu-left_label {{$index === 0 ? 'default_selected' : ''}} check-active">
            <div class="only_mobile section_back_btn">
                <svg width="24" height="24" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        fill-rule="evenodd"
                        clip-rule="evenodd"
                        d="M5.72281 4.11002C5.56973 4.25672 5.56973 4.49457 5.72281 4.64127L9.05366 7.83333L5.72281 11.0254C5.56973 11.1721 5.56973 11.4099 5.72281 11.5566C5.87589 11.7033 6.12408 11.7033 6.27716 11.5566L9.88517 8.09896C10.0383 7.95226 10.0383 7.71441 9.88517 7.56771L6.27716 4.11002C6.12408 3.96332 5.87589 3.96333 5.72281 4.11002Z"
                        fill="#101820"
                    ></path>
                </svg>
            </div>

            <div class="kursy-top_menu-left_img">
                <img
                    src="/images/listing-icons/{{__('listing-icons.' . $listing->name)}}_01.svg"
                    class="kursy-top_menu-left_img_black"
                    alt=""
                >
                <img
                    src="/images/listing-icons/{{__('listing-icons.' . $listing->name)}}_02.svg"
                    class="kursy-top_menu-left_img_blue"
                    alt=""
                >
                <img
                    src="/images/listing-icons/{{__('listing-icons.' . $listing->name)}}_03.svg"
                    class="kursy-top_menu-left_img_grey"
                    alt=""
                >
            </div>

            <a href="/{{$listing->url->url}}">{{ $listing->name }}</a>
        </div>

        @include('site.v3.modules.1-header.catalog-listing-childes', ["listing" => $listing, "isFirstLevel" => true])
    @endforeach
</div>

