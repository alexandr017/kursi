@extends('site.v3.layouts.main')
@section ('title', Shortcode::compile($page->title))
@section ('og_title', Shortcode::compile($page->h1))
@section ('meta_description', Shortcode::compile($page->meta_description))

@push('styles')
    <link href="{{ Vite::asset('resources/css/company/companies.css') }}" rel="stylesheet">
@endpush

@section('content')
    <div class="content max-width">
        <div class="schools_head">
            <h1 class="schools_head-title">{{$page->h1}}</h1>

            <div class="schools_head-desk">
                <div class="schools_head-desk_test">
                    <?php // todo этот текст должен выводится из поля $page->lead ?>
                    На странице рейтинга школ вы найдете<br>
                    список лучших онлайн-школ,<br>
                    их особенности и преимущества, оценки<br>
                    и отзывы от реальных студентов. Наша<br>
                    команда собрала для вас полную<br>
                    информацию, чтобы помочь вам выбрать<br>
                    идеальную платформу для обучения.
                </div>
            </div>
        </div>

        @include('site.v3.templates.company.companies-main-content', ['companies' => $companies])
    </div>


@endsection

@section('custom-structured-data')
<script type="application/ld+json">
{
    "@context":"https://schema.org",
    "@type":"ItemList",
    "itemListElement": [
    @php $position = 1 @endphp
    <?php // тут выводятся не все компании ?>
    @foreach($companies as $company)
        {
            "@type":"ListItem",
            "position": {{$position}},
            "url":" /{{$company->url?->url}}/"
        } @if($companies->last() != $company) , @endif
        @php $position++ @endphp
	@endforeach
    ]
}
</script>
@endsection
