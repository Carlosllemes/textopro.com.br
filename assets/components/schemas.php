<script type="application/ld+json">
    {
        "@context": "https://schema.org/",
        "@type": "ImageObject",
        "contentUrl": "<?= $url ?>assets/img/blog/<?= $urlPagina ?>-01.jpg",
        "license": "",
        "acquireLicensePage": "",
        "creditText": "Image Database",
        "creator": {
            "@type": "Person",
            "name": "<?= $siteName ?>"
        },
        "copyrightNotice": "<?= $siteName ?>"
    }
</script>

<script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "BlogPosting",
        "headline": "<?= $h1 ?>",
        "datePublished": "<?= $datePublished ?>",
        "author": {
            "@type": "Person",
            "name": "<?= $siteName ?>",
            "url": "https://www.linkedin.com/in/carlos-lemes-43a38a120/"
        },
        "image": "<?= $url ?>assets/img/blog/<?= $urlPagina ?>-01.jpg",
        "publisher": {
            "@type": "Organization",
            "name": "<?= $siteName ?>",
            "logo": {
                "@type": "ImageObject",
                "url": "<?= $url ?>assets/img/blog/<?= $urlPagina ?>-01.jpg"
            }
        }
    }
</script>