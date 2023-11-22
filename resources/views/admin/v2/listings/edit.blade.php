@extends('admin.v2.layout')
@section('title', 'Листинги - Редактирование')
@section('h1', 'Листинги - Редактирование')

@section('content')
    <a class="btn-preview" href="{{linkWithSlash($item->urls->url)}}" target="_blank"><i class="fa fa-eye"></i> {{Request::root()}}{{linkWithSlash($item->urls->url)}}</a>
    <br>

    <a href="{{route('admin.listings.courses', [$item->id])}}" class="btn btn-primary"><i class="far fa-address-card"></i> Ранжирование курсов</a>
    <br>
    <br>

    <form action="{{ route('admin.listings.update',$item->id) }}" method="post">

        {{ method_field('PATCH') }}

        <input type="hidden" name="_token" id="key" value="{{ csrf_token() }}">

        @include('admin.v2.listings._form')

        <button type="submit" class="btn btn-success pull-right"><i class="fa fa-save"></i> Сохранить</button>

    </form>

    <div class="clearfix"></div>
@stop
