<div class="author_card-cont_position">
    <div class="author_card-cont">
        <div class="author_card-title">
            {{$title ?? 'Автор'}}
        </div>
        <div class="author_card-img">
            <img src="{{str_replace('webp', 'png', $employee->photo)}}" alt="{{$employee->name}}" title="{{$employee->name}}">
        </div>
        <div class="author_card-name">
            {{$employee->name}}
        </div>
        <div class="author_card-post">
            {{$employee->job}}
        </div>
        <div class="author_card-date">
            {{$date->locale('ru')->isoFormat('D MMMM Y')}}
        </div>
    </div>
</div>

@push('styles')
    <link href="{{ Vite::asset('resources/css/employee/employee.css') }}" rel="stylesheet">
@endpush

