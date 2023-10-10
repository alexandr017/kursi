<script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "WebSite",
      "url": "https://kursy.ru",
      "potentialAction": {
        "@type": "SearchAction",
        "target": {
          "@type": "EntryPoint",
          "urlTemplate": "https://kursy.ru/search?q={search_term_string}"
        },
        "query-input": "required name=search_term_string"
      }
    }
  </script>

<script type="application/ld+json">
{
	"@context": "http://schema.org/",
	"@type": "Organization",
	"name": "Курсы.ру",
	"logo": "https://kursy.ru/v3/images/logo.svg",
	"url": "https://www.kursy.ru/",
	"address": {
		"@type": "PostalAddress",
		"streetAddress": "ул. Овражная, 8, оф. 8",
		"addressLocality": "Новосибирск",
		"postalCode": "630091",
		"addressCountry": "Russia"
	},

  "contactPoint" : [
    {
        "@type": "ContactPoint",
        "telephone": "+7 (804) 700-20-77",
        "contactOption": "Бесплатно с мобильных на территории РФ",
        "contactType": "Служба поддержки клиентов",
        "email": "partners@kursy.ru"
    }
  ],
  "sameAs": [" https:\/\/t.me\/kursy_education","https:\/\/vk.com\/kursyru","https:\/\/www.youtube.com\/@kursyrueng"]}
</script>


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
