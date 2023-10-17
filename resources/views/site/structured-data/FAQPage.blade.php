<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "FAQPage",
    "mainEntity": [
    @foreach($faq as $item)
        {
        "@type": "Question",
        "name": "{{$item->name}}",
        "acceptedAnswer": {
            "@type": "Answer",
            "text": "{!! $item->text !!}"
            }
        } @if (end($faq) != $item) , @endif
    @endforeach
    ]
}
</script>
