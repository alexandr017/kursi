@if (isset($person))
<script type="application/ld+json">
{
    "@context": "http://schema.org/",
    "@type": "Person",
    "name": "{{$person->name}}",
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
    @endif
