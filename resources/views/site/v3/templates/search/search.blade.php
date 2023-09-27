@extends('site.v3.layouts.main')

@section('content')
    <div class="search_page-content">
        <div class="max-width search_page-contetnt_cont">
            @include('site.v3.modules.search.search-courses')
            @include('site.v3.modules.search.search-companies')
            @include('site.v3.modules.search.search-posts')
        </div>
    </div>
@endsection


