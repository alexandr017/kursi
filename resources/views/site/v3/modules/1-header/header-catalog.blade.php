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
                        alt="Назад"
                        title="Назад"
                        class="mobile_next_btn"
                    >
                </a>
            </div>

            <div class="ul_cont">
                <div class="ul third_lvl">
                    @include('site.v3.modules.1-header.catalog-listing-childes', ["listing" => $listing])
                </div>
            </div>
        </div>
    @endforeach
</div>

