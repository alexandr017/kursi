<div class="catalog-section bx-blue" data-entity="container-1">
    <div class="row" data-entity="items-row">
{{--            @foreach()--}}
                @include('site.v3.templates.company.company-catalog-item')
{{--            @endforeach--}}
    </div>
</div>

@push('styles')
    <link href="{{ Vite::asset('resources/css/company/company-catalog-section.css') }}" rel="stylesheet">
@endpush
