@extends('admin.v2.layout')
@section('title', 'Сотдрудники')
@section('h1', 'Сотдрудники')

@section('content')
    <form action="{{ route('admin.employees.store') }}" method="post">

        <input type="hidden" name="_token" id="key" value="{{ csrf_token() }}">

        @include('admin.v2.employees._form')

        <button type="submit" class="btn btn-success pull-right"><i class="fa fa-save"></i> Сохранить</button>

    </form>

    <div class="clearfix"></div>
@stop
