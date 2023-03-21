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
                            <a href="#" class="facebook"><i class="bx bxl-whatsapp"></i></a>
                            <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                            <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 footer-links">
                    <h4>Links Úteis</h4>
                    <ul>
                        <li><i class="bx bx-chevron-right"></i> <a href="<?= $url ?>">Home</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#sobre">Quem somos</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#solucoes">Serviços</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#faq">FAQ</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="<?= $url ?>">Política de privacidade</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6 footer-links">
                    <h4>Outros Serviços</h4>
                    <ul>
                        <li><i class="bx bx-chevron-right"></i> <a href="<?= $url ?>">Artigos para blogs e sites</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="<?= $url ?>">Conteúdo para mídias sociais</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="<?= $url ?>">Descrições de produtos e serviços</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="<?= $url ?>">Redação para materiais institucionais</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="<?= $url ?>">Revisão e edição de textos</a></li>
                    </ul>
                </div>
                <div class="col-lg-4 col-md-6 footer-newsletter">
                    <h4>Nossa Newsletter</h4>
                    <p>Não perca nenhuma novidade ou promoção exclusiva da nossa empresa! Cadastre-se agora em nossa newsletter e tenha acesso a informações valiosas diretamente em sua caixa de entrada. Inscreva-se já e fique à frente da concorrência!</p>
                    <form action="contato.php" method="post">
                        <input type="email" name="email"><input type="submit" value="Se inscreva">
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="fixed-bottom whatsapp-btn">
        <span class="cta-whatsapp">Faça um orçamento agóra</span>
        <a target="_blank" href="#" id="whatsapp-button" class="mb-5 m-2 btn btn-primary btn-lg">
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
<script src="assets/vendor/php-email-form/validate.js"></script>
<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>
<script>
    var isMobile = /iPhone|iPad|iPod|Android/i.test(navigator.userAgent);
    var url = isMobile ? 'https://api.whatsapp.com/send?phone=5511951048219&text=%22Ol%C3%A1,%20tudo%20bem?%20Gostaria%20de%20saber%20mais%20sobre%20os%20conte%C3%BAdos%20que%20voc%C3%AAs%20oferecem.%22%0A%0A' : 'https://web.whatsapp.com/send?phone=5511951048219&text=%22Ol%C3%A1,%20tudo%20bem?%20Gostaria%20de%20saber%20mais%20sobre%20os%20conte%C3%BAdos%20que%20voc%C3%AAs%20oferecem.%22%0A%0A';
    document.getElementById('whatsapp-button').href = url;
</script>
<script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Organization",
        "name": "TextoPro",
        "logo": "https://www.textopro.com.br/logo.png",
        "url": "https://www.textopro.com.br",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "Rua Expedito de Oliveira Santos 451, Parque Santo",
            "addressLocality": "São Paulo",
            "postalCode": "05821050",
            "addressCountry": "BR"
        },
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