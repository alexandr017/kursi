@extends('admin.v2.layout')
@section('title', 'Листинги - Ранжирование курса')
@section('h1', 'Листинги - Ранжирование курса')

@section('content')

    <form action="{{ route('admin.updateCoursesSort', [$id]) }}" method="post">

        {{ method_field('POST') }}

        <input type="hidden" name="_token" id="key" value="{{ csrf_token() }}">

        <table class="table table-hover" id="coolTable">
            <tr>
                <th scope="col">Название</th>
                <th scope="col">Школа</th>
                <th scope="col" style="min-width: 100px">Ранжирования</th>
            </tr>
            @foreach($courses as $item)
                <tr>
                    <td>
                        <label for="course_{{$item->id}}"><i class="red"></i>{{$item->title}}</label>
                    </td>
                    <td>
                        <label for="course_{{$item->id}}"><i class="red"></i>{{$item->school->name}}</label>
                    </td>
                    <td>
                        <input type="number" name="course[{{$item->id}}]" id="course[{{$item->id}}]" value="{{$item->listings->first()->pivot->sort}}" required>
                    </td>
                </tr>
            @endforeach
        </table>

        <button type="submit" class="btn btn-success pull-right"><i class="fa fa-save"></i> Сохранить</button>

    </form>


@endsection
