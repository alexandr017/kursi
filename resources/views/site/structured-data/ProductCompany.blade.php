@if(isset($company))
@php [$lowPrice, $highPrice] = productStructuredDataCalculate($company->coursesStructuredData); @endphp
<script type="application/ld+json">
{
    "@context": "https://www.schema.org",
    "@type": "Product",
    "brand": "{{$company->name}}",
    "logo": "https://kursy.ru{{str_replace('https://kursy.ru', '', $company->logo)}}",
    "name": "{{$company->name}}",
    "category": "{{$company->name}}",
    "description": "{{$company->lead}}",
    "aggregateRating": {
    "@type": "AggregateRating",
    "bestRating": "5",
    "ratingValue": {{$company->rating_value}},
    "reviewCount": {{$company->rating_count}}
    },
    "offers": {
        "@type": "AggregateOffer",
        "offerCount": {{$company->courses_count}},
    "highPrice": "{{$highPrice}}",
    "lowPrice": "{{$lowPrice}}",
    "priceCurrency": "Rub",
    "offers": [
    @foreach($company->coursesStructuredData as $course)
        {
            "@type": "Offer",
            "name": "{{$course->title}}",
            "url": "{{$course->affiliate_link}}",
            "price": "{{$course->cost}}",
            "offeredBy": {
                "@type": "EducationalOrganization",
                "name": "{{$company->name}}",
                "image": {
                    "@type": "ImageObject",
                    "url": "https://kursy.ru{{str_replace('https://kursy.ru', '', $company->logo)}}"
                }
            }
        }
        @if($course != $company->coursesStructuredData->last()) , @endif
    @endforeach
    ]
    },
    "review": [
    @foreach($company->reviewsStructuredData as $review)
        {
            "@type": "Review",
            "name": "{{$review->title}}",
            "reviewBody": "{{$review->content}} @if($review->pluses) | {{$review->pluses}} @endif  @if($review->minuses)  | {{$review->minuses}} @endif ",
            "datePublished": "{{date('Y-m-d', strtotime($company->reviewsStructuredData->first()->created_at))}}",
            "reviewRating": { "@type": "Rating", "ratingValue": {{(int) $review->rating}} },
            "author": { "@type": "Person", "name": "{{$review->author_name}}" }
        }
        @if($review != $company->reviewsStructuredData->last()) , @endif
    @endforeach
    ]
}
</script>
@endif
