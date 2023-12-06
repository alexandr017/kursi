@extends('design-system.v4.templates.layout')
@section('title', 'Дизайн система - Шаблон "' . $componentType . ' - '. $componentName)
@section('h1', 'Дизайн система - Шаблон "' . $componentType . ' - '. $componentName)

@section('content')
    <div class="container">
        <a href="/design-system/">🔙 Дизайн система</a>
        <h1 style="padding-top: 50px">Компонент - {{$componentType . ' - '. $componentName}}</h1>
    </div>
    @if(view()->exists($componentFullName))
        {!! view($componentFullName)->render() !!}
    @endif
@endsection
