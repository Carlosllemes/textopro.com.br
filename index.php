<?php
$desc = "Textopro - O melhor serviço de criação de conteúdo";
$title = "Com a Textopro, você tem acesso ao melhor serviço de criação de conteúdo! Aumente sua visibilidade online e atraia mais clientes com textos persuasivos e de alta qualidade. Experimente agora!";
include("assets/inc/head.php") ?>
</head>

<body>
  <!-- ======= Header ======= -->
  <?php include("assets/inc/header.php") ?>
  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center justify-content-center">
    <?php include("assets/components/menu-banner.php") ?>
  </section>
  <!-- End Hero -->
  <main id="main">
    <!-- ======= Sobre Section ======= -->
    <?php include("assets/components/about-us.php") ?>
    <!-- End Sobre Section -->
    <!-- ======= Services Section ======= -->
    <section id="solucoes" class="services">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>Serviços</h2>
          <p>Conheça nossos serviços</p>
        </div>
        <?php include("assets/components/cards-service.php") ?>
      </div>
    </section><!-- End Services Section -->
    <!-- ======= Features Section ======= -->
    <? include("assets/components/faq.php") ?>
    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
      <div class="container" data-aos="zoom-in">
        <div class="text-center">
          <h3>Conecte-se com seus clientes através das palavras certas!</h3>
          <p>A TextoPro oferece serviços de criação de conteúdo, como blogs, roteiros, revisão de textos, descrições de produtos e muito mais. Com nossas soluções de conteúdo personalizadas, ajudamos sua empresa a se destacar da concorrência e alcançar seus objetivos de marketing. Não perca a oportunidade de se conectar com seus clientes de uma forma mais significativa e eficaz. Entre em contato com a TextoPro hoje mesmo e veja como podemos ajudar sua empresa a crescer com conteúdo de qualidade!</p>
          <a class="cta-btn" href="#">Entre em contato agora</a>
        </div>
      </div>
    </section>
    <!-- End Cta Section -->
    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <? include('assets/components/contact.php') ?>
    </section>
    <!-- End Contact Section -->
  </main>
  <!-- End #main -->
  <!-- ======= Footer ======= -->
  <? include('assets/components/footer.php') ?>
  <!-- End Footer -->

</body>

</html>