@extends('site.v3.layouts.main')
@section ('title', Shortcode::compile($page->title))
@section ('og_title', Shortcode::compile($page->h1))
@section ('meta_description', Shortcode::compile($page->meta_description))

@section('content')
    <?php // todo : подключение стилей link переделать ?>
    <link rel="stylesheet" href="https://kursy.ru/bitrix/cache/css/s1/kursi/page_328ba2dd40407034f13ea925e72c4d30/page_328ba2dd40407034f13ea925e72c4d30_v1.css?168473026413467">

    <div class="content max-width">
        @include('site.v3.modules.51-our-dashboard.51-our-dashboard', compact('countSchools', 'coursesCount', 'employeesCount', 'reviewsCount'))

        @include('site.v3.modules.52-our-advantages.52-our-advantages')

        @include('site.v3.modules.53-our-team.53-our-team', compact('team'))

        @include('site.v3.modules.54-our-history.54-our-history')

        @include('site.v3.modules.55-our-patents.55-our-patents')

        @include('site.v3.modules.56-smi-about-as.56-smi-about-as')

        @include('site.v3.modules.57-our-partners.57-our-partners')

        @include('site.v3.modules.58-official-communities.58-official-communities')
    </div>
@endsection


@section('additional-scripts')
    @parent
@endsection

@section('custom-structured data')
    @parent
    @foreach($team as $employee)
        <script type="application/ld+json">
			{
				"@context": "http://schema.org/",
				"@type": "Person",
				"name": "{{$employee->name}}",
				"image": "-",
				"url": "",
				"jobTitle": "",
				"worksFor": {
					"@type": "Organization",
					"name": "Курсы.ру"
				},
				"sameAs": [
					""
                ]
			}
		</script>
    @endforeach
@endsection




