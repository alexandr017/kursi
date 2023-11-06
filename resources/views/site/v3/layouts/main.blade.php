<!DOCTYPE html>
<html prefix="og: http://ogp.me/ns#" lang="ru">
<head>
    <title>@yield('title', 'kursy.ru')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="@yield('meta_description', 'kursy.ru')">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta property="og:title" content="@yield('title', 'kursy.ru')">
    <meta name="twitter:title" content="@yield('title', 'kursy.ru')">
    <meta property="og:description" content="@yield('meta_description', 'kursy.ru')">
    <meta name="twitter:description" content="@yield('meta_description', 'kursy.ru')">
    <meta property="og:image" content="@yield('og_image', 'https://kursy.ru/v3/images/og_logo.jpg')">
    <meta property="og:site_name" content="Курсы.ру">
    <meta property="og:url" content="{{Request::url()}}">
    <meta property="og:locale" content="ru_RU">
    <meta property="og:type" content="article">
    <meta name="format-detection" content="telephone=no">
    <meta name="format-detection" content="address=no">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:image" content="https://kursy.ru">
    <meta name="google-site-verification" content="WYU9mgND_HRtNkkoBGe8Mt_kRGzV4wwsCo4_QxyAWco" />
    <meta name="yandex-verification" content="6ca1d53bafb9a79f" />
    <link href="//fonts.googleapis.com/css?family=Montserrat:thin,extra-light,light,100,200,300,400,500,600,700,800" rel="stylesheet" type="text/css">
    <link href="//fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet" type="text/css">
    @if(str_contains(Request::url(), '/page/'))
        <link rel="prev" href="{{getCanonicalPrev()}}">
    @endif
    <link rel="canonical" href="{{getCanonical()}}">
    @if(isset($pagesCount))
        <link rel="next" href="{{getCanonicalNext($pagesCount)}}">
    @endif

    @yield('style')

    @stack('styles')
    <link rel="stylesheet" href="/v3/css/style.css">
    <link rel="shortcut icon" href="/v3/images/favicon.svg">
    <style> .nca-cookiesaccept-line { box-sizing: border-box !important; margin: 0 !important; border: none !important; width: 100% !important; min-height: 10px !important; max-height: 250px !important; display: block; clear: both !important; padding: 12px !important; /* position: absolute; */ position: fixed; bottom: 0px !important; opacity: 1; transform: translateY(0%); z-index: 99999; } .nca-cookiesaccept-line > div { display: flex; align-items: center; } .nca-cookiesaccept-line > div > div { padding-left: 5%; padding-right: 5%; } .nca-cookiesaccept-line a { color: inherit; text-decoration:underline; } @media screen and (max-width:767px) { .nca-cookiesaccept-line > div > div { padding-left: 1%; padding-right: 1%; } } </style>
</head>
<body>
@include('site.v3.modules.1-header.1-header')
@yield('content')
@include('site.v3.modules.2-footer.2-footer')

@yield('additional-scripts')


@stack('scripts')

@include('site.admin-nav')
@include('site.analytics-scripts')

@include('site.structured-data.SearchAction')
@include('site.structured-data.Organization')
@include('site.structured-data.BreadcrumbList')
@yield('custom-structured-data')


<script type="text/javascript">
    if (window == window.top) {
        document.addEventListener("DOMContentLoaded", function() {
            var div = document.createElement("div");
            div.innerHTML = ' <div id="nca-cookiesaccept-line" class="nca-cookiesaccept-line style-1 " > <div id="nca-nca-position-left"id="nca-bar" class="nca-bar nca-style- nca-animation-none nca-position-left "> <div class="nca-cookiesaccept-line-text"><div class="site_text"><img src="/v3/images/cookies.svg" ><span>Используя наш сайт сайт вы даете согласие на обработку файлов cookie и <a href="/privacy/">пользовательских данных</a>.</span></div><span class="land_text">Используя наш сайт, вы даете согласие на использование файлов <a href="/privacy/">cookie</a>.</span></div> <div><button type="button" id="nca-cookiesaccept-line-accept-btn" onclick="ncaCookieAcceptBtn()" >Принять</button></div> </div> </div> ';
            document.body.appendChild(div);
        });
    }

    function ncaCookieAcceptBtn(){
        var alertWindow = document.getElementById("nca-cookiesaccept-line");
        alertWindow.remove();

        var cookie_string = "NCA_COOKIE_ACCEPT_1" + "=" + escape("Y");
        var expires = new Date((new Date).getTime() + (1000 * 60 * 60 * 24 * 730));
        cookie_string += "; expires=" + expires.toUTCString();
        cookie_string += "; path=" + escape ("/");
        document.cookie = cookie_string;

    }

    function ncaCookieAcceptCheck(){
        var closeCookieValue = "N";
        var value = "; " + document.cookie;
        var parts = value.split("; " + "NCA_COOKIE_ACCEPT_1" + "=");
        if (parts.length == 2) {
            closeCookieValue = parts.pop().split(";").shift();
        }
        if(closeCookieValue != "Y") {
            /*document.head.insertAdjacentHTML("beforeend", "<style>#nca-cookiesaccept-line {display:flex}</style>")*/
        } else {
            document.head.insertAdjacentHTML("beforeend", "<style>#nca-cookiesaccept-line {display:none}</style>")
        }
    }

    ncaCookieAcceptCheck();

</script>
</body>
</html>
