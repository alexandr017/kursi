@extends('design-system.v4.templates.layout')
@section('title', 'Дизайн система - Шаблон "' . $templateName . '"')
@section('h1', 'Дизайн система - Шаблон "' . $templateName . '"')

@section('content')

@include('design-system.v4.components.organisms.header.index')
<div class="container">
    <div class="row">
        @include('design-system.v4.components.organisms.filter.index')
    </div>
</div>
@endsection
