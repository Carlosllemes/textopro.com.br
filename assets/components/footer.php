<footer id="footer">
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="footer-info">
                        <h3>TextoPro<span>.</span></h3>
                        <p>
                            <?= $rua ?> <br>
                            <?= $cidade ?>, <?= $UF ?><br><br>
                            <strong>Telefone:</strong> (<?= $phone[0][0] ?>) <?= $phone[0][1] ?><br>
                            <strong>Email:</strong> <?= $email ?><br>
                        </p>
                        <div class="social-links mt-3">
                            <a title="Whatsapp" href="https://api.whatsapp.com/send?phone=5511951048219&text=%22Ol%C3%A1,%20tudo%20bem?%20Gostaria%20de%20saber%20mais%20sobre%20os%20conte%C3%BAdos%20que%20voc%C3%AAs%20oferecem.%22%0A%0A" class="facebook" target="_blank"><i class="bx bxl-whatsapp"></i></a>
                            <a href="https://www.instagram.com/" title="instagram" class="instagram" target="_blank"><i class="bx bxl-instagram"></i></a>
                            <a href="https://www.linkedin.com/feed/" title="linkedin" class="linkedin" target="_blank"><i class="bx bxl-linkedin"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 footer-links">
                    <h4>Links Úteis</h4>
                    <ul>
                        <li><i class="bx bx-chevron-right"></i>
                            <a href="<? $url ?>index" title="Ir para a seção Home">Home</a>
                        </li>
                        <li><i class="bx bx-chevron-right"></i>
                            <a href="<? $url ?>index#solucoes" title="Ir para a seção Soluções">Serviços</a>
                        </li>
                        <li><i class="bx bx-chevron-right"></i>
                            <a href="<? $url ?>index#pricing-plans" title="Planos">Planos</a>
                        </li>
                        <li><i class="bx bx-chevron-right"></i>
                            <a href="<? $url ?>index#sobre" title="Ir para a seção Sobre Nós">Quem somos</a>
                        </li>
                        <li><i class="bx bx-chevron-right"></i>
                            <a href="<? $url ?>index#faq" title="Ir para a seção FAQ">FAQ</a>
                        </li>

                        <li><i class="bx bx-chevron-right"></i> <a title="Mapa do site" href="<?= $url ?>mapa-site">Mapa do site</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6 footer-links">
                    <h4>Outros Serviços</h4>
                    <ul>
                        <?php include("assets/inc/blog-menu.php"); ?>
                        <?php foreach ($linksBlog as $produto) : ?>
                            <li><i class="bx bx-chevron-right"></i> <a href="<?= $url . $produto['url'] ?>" title="<?= $produto['alt'] ?>"><?= $produto['nome'] ?></a></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <div class="col-lg-4 col-md-6 footer-newsletter">
                    <h4>Nossa Newsletter</h4>
                    <p>Não perca nenhuma novidade ou promoção exclusiva da nossa empresa! Cadastre-se agora em nossa newsletter e tenha acesso a informações valiosas diretamente em sua caixa de entrada. Inscreva-se já e fique à frente da concorrência!</p>
                    <form action="contato.php" method="post">
                        <input placeholder="Email" type="email" name="email"><input type="submit" value="Se inscreva">
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="fixed-bottom whatsapp-btn">
        <a target="_blank" href="https://api.whatsapp.com/send?phone=5511951048219&text=%22Ol%C3%A1,%20tudo%20bem?%20Gostaria%20de%20saber%20mais%20sobre%20os%20conte%C3%BAdos%20que%20voc%C3%AAs%20oferecem.%22%0A%0A" class="whatsapp-button mb-5 m-2 btn btn-primary btn-lg">
            <i class='bx bxl-whatsapp bx-lg'></i> WhatsApp
        </a>
    </div>
    <div class="container">
        <div class="copyright">
            &copy; Copyright <strong><span>TextoPro</span></strong>. Todos direitos reservados!
        </div>
    </div>
</footer>
<div id="preloader"></div>
<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
<!-- Vendor JS Files -->
<script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
<script src="assets/vendor/aos/aos.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
<!--<script src="assets/vendor/php-email-form/validate.js"></script>-->
<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>
<script>
    var isMobile = /iPhone|iPad|iPod|Android/i.test(navigator.userAgent);
    var url = isMobile ? 'https://api.whatsapp.com/send?phone=5511951048219&text=%22Ol%C3%A1,%20tudo%20bem?%20Gostaria%20de%20saber%20mais%20sobre%20os%20conte%C3%BAdos%20que%20voc%C3%AAs%20oferecem.%22%0A%0A' : 'https://web.whatsapp.com/send?phone=5511951048219&text=%22Ol%C3%A1,%20tudo%20bem?%20Gostaria%20de%20saber%20mais%20sobre%20os%20conte%C3%BAdos%20que%20voc%C3%AAs%20oferecem.%22%0A%0A';
    document.getElementById('wp-btn').href = url;
</script>

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-8MFNHM6P2L"></script>
<script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'G-8MFNHM6P2L');
</script>
<script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Organization",
        "url": "https://www.textopro.com.br",
        "logo": "https://www.textopro.com.br/assets/img/logo.png"
    }
</script>
<script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "LocalBusiness",
        "image": [
            "https://www.textopro.com.br/assets/img/blog/roteiros-videos-podcasts-preco-01.webp",
            "https://www.textopro.com.br/assets/img/blog/comprar-emails-newsletters-01.webp"
        ],
        "name": "TextoPro.",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "Rua Expedito de oliveira santos",
            "addressLocality": "São Paulo",
            "addressRegion": "SP",
            "postalCode": "05825030",
            "addressCountry": "BR"
        },
        "author": {
            "@type": "Person",
            "name": "TextoPro."
        },
        "url": "https://www.google.com/maps/place/R.+Expedito+de+Oliveira+Santos+-+Parque+Santo+Ant%C3%B4nio,+S%C3%A3o+Paulo+-+SP,+05821-050/@-23.6673056,-46.7511983,18z/data=!4m15!1m8!3m7!1s0x94ce522b13af0d29:0x437002fea8aad9e2!2sR.+Expedito+de+Oliveira+Santos+-+Parque+Santo+Ant%C3%B4nio,+S%C3%A3o+Paulo+-+SP,+05821-050!3b1!8m2!3d-23.6673069!4d-46.7506283!16s%2Fg%2F1ymspckh2!3m5!1s0x94ce522b13af0d29:0x437002fea8aad9e2!8m2!3d-23.6673069!4d-46.7506283!16s%2Fg%2F1ymspckh2",
        "telephone": "+551195104819",
        "servesCuisine": "Brasil",
        "priceRange": "1.190,00"
    }
</script>
