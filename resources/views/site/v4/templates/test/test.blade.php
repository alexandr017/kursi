@extends('site.v4.layouts.main')
@section('title', 'Тестовая страница')
@section('h1', 'Тестовая страница')

@section('content')

    @include('design-system.v4.components.organisms.header.index')
    <div class="container">
        <div class="row">
            @include('design-system.v4.components.organisms.filter.index')
        </div>
    </div>
@endsection

@section('js')
    <script defer href="/v4/listings/load.js"></script>
@endsection
