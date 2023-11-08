@extends('site.v3.layouts.main')

@section ('title', Shortcode::compile($page->title))
@section ('og_title', Shortcode::compile($page->h1))
@section ('meta_description', Shortcode::compile($page->meta_description))

@section('content')
    <div class="content max-width ">
        @include('site.v3.modules.mainpage.mainpage-head')
        @include('site.v3.modules.mainpage.mainpage-categories', ['listings' => $listings])

        <h2 class="index_subtitle popular">Популярные курсы</h2>
        @include('site.v3.modules.courses.courses-cards', ['courses' => $popularCourses, 'fromMainPage' => true])

        <h2 class="index_subtitle rewiews">Последние отзывы</h2>
        @include('site.v3.modules.mainpage.mainpage-reviews', ['reviews' => $reviews ])

        <h2 class="index_subtitle popular">Акции</h2>
        @include('site.v3.modules.courses.courses-cards', ['courses' => $withPromotionCourses  ])

        <h2 class="index_subtitle popular">Последние статьи</h2>
        @include('site.v3.modules.mainpage.mainpage-posts', ['posts' => $posts])

        @include('site.v3.modules.mainpage.mainpage-news')

        @include('site.v3.modules.5-rating.rating', ['entityId' => $page->id, 'entityType' => 'main_page', 'ratingCount' => $page->getRatingsCount(),'ratingValue' => $page->getRatingsValue()])

    </div>

    @push('styles')
        <link href="{{ Vite::asset('resources/css/mainpage/mainpage.css') }}" rel="stylesheet">
    @endpush
@endsection

@section('custom-structured-data')

<script type="application/ld+json">
@php [$lowPrice, $highPrice] = productStructuredDataCalculate($popularCoursesForStructuredData); @endphp
{
    "@context": "https://www.schema.org",
    "@type": "Product",
    "aggregateRating": {
        "@type": "AggregateRating",
        "bestRating": "5",
        "ratingValue": {{$page->rating_value}},
        "reviewCount": {{$page->rating_count}}
    },
    "name": "Популярные курсы",
    "description": "Популярные курсы",
    "offers": {
        "@type": "AggregateOffer",
        "offerCount": {{$popularCoursesForStructuredData->count()}},
        "highPrice": "{{$highPrice}}",
        "lowPrice": "{{$lowPrice}}",
        "priceCurrency": "Rub",
        "offers": [
            @foreach($popularCoursesForStructuredData as $course)
            {
                "@type": "Offer",
                "name": "{{$course->title}}",
                "url": "{{$course->affiliate_link}}",
                "price": "{{$course->cost}}",
                "offeredBy": {
                    "@type": "EducationalOrganization",
                    "name": "{{$course->school?->name}}",
                    "image": {
                        "@type": "ImageObject",
                        "url": "{{$course->school?->logo}}"
                    }
                }
            } @if($course != $popularCoursesForStructuredData->last()) , @endif
            @endforeach
        ]
    }
}
</script>

<script type="application/ld+json">
{
    "@context": "http://schema.org",
    "@type": "ItemList",
    "name": "Последние отзывы",
    "numberOfItems": {{$reviewsForStructuredData->count()}},
    "itemListElement": [
    @php $position = 1 @endphp
    @foreach($reviewsForStructuredData as $review)
        {
            "@type": "ListItem",
            "position": {{$position}},
            "item": {
                "@context": "https://schema.org/",
                "@type": "Review",
                "itemReviewed": {
                    "@type": "Organization",
                    "image": "{{$review->company?->logo}}",
                    "name": "{{$review->company?->name}}"
                    },
                "reviewRating": { "@type": "Rating", "ratingValue": {{$review->rating}} },
                "name": "{{$review->title}}",
                "author": { "@type": "Person", "name": "{{$review->author_name}}" },
                "publisher": { "@type": "Organization", "name": "Курсы.ру" }
            }
        } @if($review != $reviewsForStructuredData->last()) , @endif
        @php $position++ @endphp
        @endforeach
    ]
}
</script>


<script type="application/ld+json">
@php [$lowPrice, $highPrice] = productStructuredDataCalculate($withPromotionCoursesForStructuredData); @endphp
{
    "@context": "https://www.schema.org",
    "@type": "Product",
    "aggregateRating": {
    "@type": "AggregateRating",
        "bestRating": "5",
        "ratingValue": {{$page->rating_value}},
        "reviewCount": {{$page->rating_count}}
    },
    "name": "Акции",
    "description": "Акции",
    "offers": {
    "@type": "AggregateOffer",
        "offerCount": {{$withPromotionCoursesForStructuredData->count()}},
        "highPrice": "{{$highPrice}}",
        "lowPrice": "{{$lowPrice}}",
        "priceCurrency": "Rub",
        "offers": [
            @foreach($withPromotionCoursesForStructuredData as $course)
            {
                "@type": "Offer",
                "name": "{{$course->title}}",
                "url": "{{$course->affiliate_link}}",
                "price": "{{$course->cost}}",
                "offeredBy": {
                    "@type": "EducationalOrganization",
                    "name": "{{$course->school?->name}}",
                    "image": {
                        "@type": "ImageObject",
                        "url": "{{$course->school?->logo}}"
                    }
                }
            } @if($course != $withPromotionCoursesForStructuredData->last()) , @endif
            @endforeach
        ]
    }
}

</script>

@foreach($postsForStructuredData as $post)
<script type="application/ld+json">
{
  	"@context": "http://schema.org/",
  	"@type": " Article",
  	"author": {
  		"@type": "Person",
  		"name": "{{$post->author?->name}}",
  		"url": "https://kursy.ru/{{$post->author->urls->url}}/"
  	},
  	"publisher": {
  		"@type": "Organization",
  		"name": "Kursi.ru",
  		"logo": {
  			"@type": "ImageObject",
  			"url": "https://kursy.ru/v3/images/logo.svg"
  		}
  	},
  	"headline": "{{$post->title}}",
  	"image": "{{$post->preview}}",
  	"datePublished": "{{date('d.m.Y', strtotime($post->created_at))}}",
  	"dateModified ": "{{date('d.m.Y', strtotime($post->updated_at))}}"
}
</script>
@endforeach


<script type="application/ld+json">
	{
	"@context": "http://schema.org/",
	"@type": " Article",
	"author": {
		"@type": "Person",
		"name": "",
		"url": "https://kursy.ru"
	},
	"publisher": {
		"@type": "Organization",
		"name": "Kursi.ru",
		"logo": {
			"@type": "ImageObject",
			"url": "https://kursy.ru/v3/images/logo.svg"
		}
	},
	"headline": "Главная страница",
	"image": "https://kursy.ru",
	"datePublished": "",
	"dateModified ": "19.06.2023 14:05:10"
	}
</script>


<?php
    // todo $faq должен через шорткод выводится из базы
$faq = (object) [
    (object) [
        'name' => '<h3>Останется ли доступ к материалам курса?</h3>',
        'text' => 'Для получения доступа к материалам курса вам, как правило, нужно зарегистрироваться на платформе для онлайн-обучения и войти в свой аккаунт.'
    ],
    (object) [
        'name' => '<h3>Есть ли дедлайны для выполнения заданий?</h3>',
        'text' => 'Это зависит от конкретного курса и организации, которая его проводит. Некоторые курсы могут иметь жесткие дедлайны, другие - более гибкие.',
    ],
    (object) [
        'name' => '<h3>Можно ли получить сертификат по окончании курса?</h3>',
        'text' => 'Это также зависит от конкретного курса и организации. Некоторые курсы могут предлагать сертификаты по окончании, другие - нет.',
    ],
    (object) [
        'name' => '<h3>Как я могу общаться с преподавателем или другими студентами?</h3>',
        'text' => 'Общение с преподавателем и другими студентами в онлайн-курсах обычно осуществляется через форумы или чаты на платформе для онлайн-обучения.',
    ],
    (object) [
        'name' => '<h3>Как я могу оценить свои успехи в курсе?</h3>',
        'text' => 'Оценка успехов в онлайн-курсе может варьироваться в зависимости от платформы или организации, которая проводит курс. <br>\n\t\t\t В общем, это может включать в себя оценку за: \n\t\t\t<ul>\n\t\t\t\t<li>Тесты </li>\n\t\t\t\t<li>Задания </li>\n\t\t\t\t<li>Проекты </li>\n\t\t\t\t<li>Презентации</li>\n\t\t\t</ul>\n\t\t\t В некоторых случаях может быть предоставлена обратная связь от преподавателя.',
    ],
    (object) [
        'name' => '<h3>Условия обучения</h3>',
        'text' => '<table border=\"1\" cellpadding=\"1\" cellspacing=\"1\">\n<tbody>\n<tr>\n\t<th>\n\t\t &nbsp;Стоимость обучения:\n\t</th>\n\t<td>\n\t\t 📚 От&nbsp;0 до 250 тысяч рублей<br>\n\t</td>\n</tr>\n<tr>\n\t<th>\n\t\t &nbsp;Длительность:\n\t</th>\n\t<td>\n\t\t 📚 От часа до 5 лет<br>\n\t</td>\n</tr>\n<tr>\n\t<th>\n\t\t &nbsp;Количество школ:\n\t</th>\n\t<td colspan=\"1\">\n\t\t 📚 155 школ\n\t</td>\n</tr>\n<tr>\n\t<th>\n\t\t &nbsp;Количество курсов:\n\t</th>\n\t<td>\n\t\t 📚 5603 курса<br>\n\t</td>\n</tr>\n</tbody>\n</table>\n <br>',
    ],
];
?>
@include('site.structured-data.FAQPage', compact('faq'))



@endsection
