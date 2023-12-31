@if(isset($listing))
@php [$lowPrice, $highPrice] = productStructuredDataCalculate($listing->coursesStructuredData); @endphp
<script type="application/ld+json">
    {
        "@context": "https://www.schema.org",
        "@type": "Product",
        "aggregateRating": {
        "@type": "AggregateRating",
            "bestRating": "5",
            "ratingValue": {{$listing->rating_value}},
            "reviewCount": {{$listing->rating_count}}
    },
    "name": "{{$listing->name ?? $listing->h1}}",
    "description": "{{$listing->meta_description}}",
    "offers": {
    "@type": "AggregateOffer",
        "offerCount": {{$listing->coursesStructuredData->count()}},
        "highPrice": "{{$highPrice}}",
        "lowPrice": "{{$lowPrice}}",
        "priceCurrency": "Rub",
        "offers": [
        @foreach($listing->coursesStructuredData as $course)
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
            } @if ($listing->coursesStructuredData->last() != $course) , @endif
        @endforeach
        ]
    },
    "image": "https://kursy.ru/{{$listing->photo}}"
    }
</script>
@endif
