<div class="author_card-cont_position">
    <div class="author_card-cont">
        <div class="author_card-title">
            {{$title ?? 'Автор'}}
        </div>
        <div class="author_card-img">
            <img src="https://kursy.ru/upload/iblock/45e/ikrjacl0owpjqvcypequ6nxf62q0sw1e/kruzhochki150_12.png" alt="Иван Нестеренко" title="Иван Нестеренко">
        </div>
        <div class="author_card-name">
            {{$employee->name}}
        </div>
        <div class="author_card-post">
            {{$employee->job}}
        </div>
        <div class="author_card-date">
            {{date('Y-m-d', strtotime($employee->created_at))}}
        </div>
    </div>
</div>

@push('styles')
    <link href="{{ Vite::asset('resources/css/employee/employee.css') }}" rel="stylesheet">
@endpush

