@extends('admin.v2.layout')
@section('title', 'Листинги - Ранжирование курса')
@section('h1', 'Листинги - Ранжирование курса')
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

@section('content')

    <form action="{{ route('admin.updateListingCourses', [$id]) }}" method="post">

        {{ method_field('POST') }}

        <input type="hidden" name="_token" id="key" value="{{ csrf_token() }}">
        <button type="submit" class="btn btn-success pull-right"><i class="fa fa-save"></i> Сохранить</button>
        <br>

        <input type="text" id="searchCourses" placeholder="Поиск по курсам  ">

        <table class="table table-hover" id="coursesTable">
            <tr>
                <th scope="col">Название</th>
                <th scope="col">Школа</th>
            </tr>

                @foreach($allCourses as $item)
                <tr>
                    <td>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="courses[]" value="{{$item->id}}" @if($item->checked) checked @endif >
                                {{$item->title}}
                            </label>
                        </div>
                    </td>
                    <td>
                        <label for="course_{{$item->id}}"><i class="red"></i>{{$item->title}}</label>
                    </td>
                </tr>
                @endforeach

        </table>


    </form>
    <script>
        $(document).ready(function() {
            // Add an event listener for the input field
            $('#searchCourses').on('input', function() {
                let searchTerm = $(this).val().toLowerCase();

                // Loop through rows and hide/show based on the search term
                $('table#coursesTable tbody tr').each(function() {
                    let courseName = $(this).find('.checkbox label').text().toLowerCase();
                    if (courseName.includes(searchTerm)) {
                        $(this).show();
                    } else {
                        $(this).hide();
                    }
                });
            });
        });
    </script>

@endsection
