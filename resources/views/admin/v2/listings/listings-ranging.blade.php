@extends('admin.v2.layout')
@section('title', 'Листинги - Верхняя перелинковка')
@section('h1', 'Листинги - Верхняя перелинковка')
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

@section('content')

    <form action="{{ route('admin.updateListingSimilars', [$id]) }}" method="post">

        {{ method_field('POST') }}

        <input type="hidden" name="_token" id="key" value="{{ csrf_token() }}">
        <button type="submit" class="btn btn-success pull-right"><i class="fa fa-save"></i> Сохранить</button>
        <br>

        <input type="text" id="searchListings" placeholder="Поиск по листингам ">

        <table class="table table-hover" id="listingsTable">
            <tr>
                <th scope="col">Название</th>
            </tr>

            @foreach($allListings as $item)
                <tr>
                    <td>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="listings[]" value="{{$item->id}}" @if($item->checked) checked @endif >
                                {{$item->name}}
                            </label>
                        </div>
                    </td>
                </tr>
            @endforeach

        </table>


    </form>
    <script>
        $(document).ready(function() {
            // Add an event listener for the input field
            $('#searchListings').on('input', function() {
                let searchTerm = $(this).val().toLowerCase();

                // Loop through rows and hide/show based on the search term
                $('table#listingsTable tbody tr').each(function() {
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
