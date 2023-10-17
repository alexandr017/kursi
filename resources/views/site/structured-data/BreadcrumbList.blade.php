@if(isset($breadcrumbs))
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "BreadcrumbList",
    "itemListElement": [
    {
            "@type": "ListItem",
            "position": 1,
            "name":  "Главная" ,
            "item":  "https://kursy.ru/"
    }
    <?php $breadcrumbCounter = 2; ?>
        @foreach($breadcrumbs as $key => $breadcrumb)
            @if($key != 'metric_prefix')
                ,{
                    "@type": "ListItem",
                    "position": {{$breadcrumbCounter}},
            "name": @if(isset($breadcrumb['h1'])) "{{$breadcrumb['h1']}}" @elseif($key == 'h1') "{{$breadcrumb}}" @else "00" @endif,
            @if ($key != (count($breadcrumbs)-1))
                    "item": @if(isset($breadcrumb['link'])) "https://vsezaimyonline.ru{{$breadcrumb['link']}}" @else "{{Request::url()}}" @endif
                @else
                    "item": "{{Request::url()}}"
            @endif
                }
<?php $breadcrumbCounter++; ?>
            @endif
        @endforeach
    ]
}
</script>
@endif
