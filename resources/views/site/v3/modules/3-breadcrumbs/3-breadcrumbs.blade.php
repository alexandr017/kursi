<div class="breadchumb" id="navigation">
    <div class="bx-breadcrumb max-width">
        <span class="bx-breadcrumb-item" id="bx_breadcrumb_0">
            <a href="/" title="Главная">
                <span>Главная</span>
            </a>
        </span>
        <span class="bx-breadcrumb-item" id="bx_breadcrumb_1">
        <span class="separator">/</span>
        <a href="/about/" title="Сотрудники">
        <span>Сотрудники</span>
        </a>
        </span>
        <span class="bx-breadcrumb-item last-element">
        <span class="separator">/</span>
        <span>Нестеренко Иван</span>
        </span><span style="clear:both"></span>
    </div>
</div>


<div class="breadcrumbs">
    <div class="container">
{{--        <a href="/">ВсеЗаймыОнлайн</a>--}}
{{--        <svg xmlns="http://www.w3.org/2000/svg" width="6" height="8" viewBox="0 0 6 8" fill="none">--}}
{{--            <path d="M1 7.5L5 4L1 0.5" stroke="#222735" stroke-linecap="round" stroke-linejoin="round"/>--}}
{{--        </svg>--}}
        @if(isset($breadcrumbs))
            @foreach($breadcrumbs as $key => $breadcrumb)
                @if(is_integer($key))
                    @if ($key != (count($breadcrumbs)-1))
                            <?php //dd($key != (count($breadcrumbs)-1), $key, $breadcrumbs, $breadcrumb); ?>
                        <a href="{{$breadcrumb['link']}}">{{$breadcrumb['h1']}}</a>
                        <svg xmlns="http://www.w3.org/2000/svg" width="6" height="8" viewBox="0 0 6 8" fill="none">
                            <path d="M1 7.5L5 4L1 0.5" stroke="#222735" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    @else
                        @if(isset($breadcrumb['h1']))
                            <span class="kb_title dark-grey">{{$breadcrumb['h1']}}</span>
                        @else
                            <span class="kb_title dark-grey">{{$breadcrumb}}</span>
                        @endif
                    @endif
                @elseif (is_string($breadcrumb))
                    <span class="kb_title dark-grey">{{$breadcrumb}}</span>
                @endif

            @endforeach
        @endif
    </div>
</div>
