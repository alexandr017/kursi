@extends('site.v3.layouts.main')
@section ('title', Shortcode::compile($page->title))
@section ('og_title', Shortcode::compile($page->h1))
@section ('meta_description', Shortcode::compile($page->meta_description))

@section('style')
    <link href='//fonts.googleapis.com/css?family=Montserrat:thin,extra-light,light,100,200,300,400,500,600,700,800' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="/v3/css/about.css">
@endsection

@section('content')
    <div class="content max-width">
        @include('site.v3.modules.51-our-dashboard.51-our-dashboard', compact('countSchools', 'coursesCount', 'employeesCount', 'reviewsCount'))

        @include('site.v3.modules.52-our-advantages.52-our-advantages')

        @include('site.v3.modules.53-our-team.53-our-team', compact('team'))

        @include('site.v3.modules.54-our-history.54-our-history', compact('histories'))

        @include('site.v3.modules.55-our-patents.55-our-patents')

        @include('site.v3.modules.56-smi-about-as.56-smi-about-as')

        @include('site.v3.modules.57-our-partners.57-our-partners')

        @include('site.v3.modules.58-official-communities.58-official-communities')
    </div>
@endsection


@section('additional-scripts')
    @parent
@endsection

@section('custom-structured-data')
    @parent
    @foreach($team as $person)
        @include('site.structured-data.Person')
    @endforeach
@endsection




