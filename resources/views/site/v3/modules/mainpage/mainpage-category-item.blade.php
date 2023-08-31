<li class="swiper_styles-item swiper-slide swiper-slide-active" id="bx_1847241719_45" role="group" aria-label="1 / 17">
    <div>
        <a href="{{$listing->url?->url}}">
            <img class="section_slider-black_img" src="/images/listing-icons/{{__('listing-icons.' . $listing->name)}}_01.svg" alt="{{$listing->name}}" title="{{$listing->name}}">
            <img class="section_slider-grey_img" src="/images/listing-icons/{{__('listing-icons.' . $listing->name)}}_03.svg" alt="{{$listing->name}}" title="{{$listing->name}}">
            <img class="section_slider-blue_img" src="/images/listing-icons/{{__('listing-icons.' . $listing->name)}}_02.svg" alt="{{$listing->name}}" title="{{$listing->name}}">
            <span>
                {{$listing->name}}
            </span>
        </a>
    </div>

    <ul class="second_lvl">
        <input type="checkbox" name="" id="open_section_45" value="">

        @foreach($listing->childes as $child)
            <li class="" id="bx_1847241719_450">
                <div>
                    <a href="{{$child->url?->url}}">
                    <span>
                        {{$child->name}}
                    </span>
                    </a>
                </div>
            </li>
        @endforeach


        <label for="open_section_45" class="open_section_btn"> Ещё 2</label>
        <label for="" class="close_section_btn"> Скрыть 2</label>

    </ul>
</li>


@push('styles')
    <link href="{{ Vite::asset('resources/css/mainpage/mainpage-category-item.css') }}" rel="stylesheet">
@endpush