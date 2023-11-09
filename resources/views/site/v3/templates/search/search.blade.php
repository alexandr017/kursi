@extends('site.v3.layouts.main')

@section('content')
    <div class="content max-width">
        <div class=" search_page-contetnt_cont">
            @include('site.v3.modules.search.search-courses')
            @include('site.v3.modules.search.search-companies')
            @include('site.v3.modules.search.search-posts')
        </div>
    </div>
@endsection


