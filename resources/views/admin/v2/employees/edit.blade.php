@extends('admin.v2.layout')
@section('title', 'Сотдрудники - Редактирование')
@section('h1', 'Сотдрудники - Редактирование')

@section('content')
    <a class="btn-preview" href="/{{$item->urls->url}}" target="_blank"><i class="fa fa-eye"></i> {{Request::root()}}/{{$item->urls->url}}</a>

    <form action="{{ route('admin.employees.update',$item->id) }}" method="post">

        {{ method_field('PATCH') }}

        <input type="hidden" name="_token" id="key" value="{{ csrf_token() }}">

        @include('admin.v2.employees._form')

        <button type="submit" class="btn btn-success pull-right"><i class="fa fa-save"></i> Сохранить</button>

    </form>

    <div class="clearfix"></div>
@stop
