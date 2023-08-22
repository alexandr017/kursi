@extends('admin.v2.layout')
@section('title', 'Листинги - Редактирование')
@section('h1', 'Листинги - Редактирование')

@section('content')
    <form action="{{ route('admin.listings.update',$item->id) }}" method="post">

        {{ method_field('PATCH') }}

        <input type="hidden" name="_token" id="key" value="{{ csrf_token() }}">

        @include('admin.v2.listings._form')

        <button type="submit" class="btn btn-success pull-right"><i class="fa fa-save"></i> Сохранить</button>

    </form>

    <div class="clearfix"></div>
@stop
