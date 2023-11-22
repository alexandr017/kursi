@extends('admin.v2.layout')
@section('title', 'Листинги - Привязка курсов')
@section('h1', 'Листинги - Привязка курсов')

@section('content')

    <form action="{{ route('admin.updateCoursesSort', [$id]) }}" method="post">

        {{ method_field('POST') }}

        <input type="hidden" name="_token" id="key" value="{{ csrf_token() }}">

        @foreach($courses as $item)
            <div class="form-group" style="display: flex; justify-content: space-between">
                <label for="course_{{$item->id}}"><i class="red"></i>{{$item->title}}</label>
                <input type="number" name="course[{{$item->id}}]" id="course[{{$item->id}}]" value="{{$item->listings->first()->pivot->sort}}" required>
            </div>
        @endforeach

        <button type="submit" class="btn btn-success pull-right"><i class="fa fa-save"></i> Сохранить</button>

    </form>


@endsection
