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
    },

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
    },

    {
        "@context": "https://schema.org",
        "@type": "Restaurant",
        "image": [
            "<?= $url ?>assets/img/testimonials-bg.jpg",
            "<?= $url ?>assets/img/features.jpg",
            "<?= $url ?>assets/img/logo.png"
        ],
        "name": "<?= $siteName ?>",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "<?= $rua ?>",
            "addressLocality": "<?= $cidade ?>",
            "addressRegion": "<?= $UF ?>",
            "postalCode": "<?= $cep ?>",
            "addressCountry": "BR"
        },
        "review": {
            "@type": "Review",
            "reviewRating": {
                "@type": "Rating",
                "ratingValue": "4",
                "bestRating": "5"
            },
            "author": {
                "@type": "Person",
                "name": "Eduardo Esdras"
            }
        },
        "geo": {
            "@type": "GeoCoordinates",
            "latitude": 23.6675328,
            "longitude": -46.7506931
        },
        "url": "https://www.example.com/restaurant-locations/manhattan",
        "telephone": "11951048219",
        "servesCuisine": "Brasil",
        "priceRange": "50 a 2190",
        "openingHoursSpecification": {
            "@type": "OpeningHoursSpecification",
            "dayOfWeek": [
                "Monday",
                "Tuesday",
                "Wednesday",
                "Thursday",
                "Friday",
                "Saturday"
            ],
            "opens": "09:00",
            "closes": "18:00"
        }
    }
</script>