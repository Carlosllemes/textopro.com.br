HOW TO USE:
-----------

1 - Fazer chamada do css na head:

  <style>
      <?php if(!$isMobile): ?>
          include ("animate/animate.min.css");
      <?php endif; ?>
  </style>

  </head?>


2 - Fazer chamada do js no footer:

<?php if(!$isMobile): ?>  
    <script>
        <?include ('animate/animate.min.js');?>
    </script>
<?php endif; ?>


3 - Aplicando aos elementos: 
  
  // Definir classe com os seguintes valores: scrollanimation animated tipoAnimação

  // Exemplos:
  <div class="scrollanimation animated fadeIn"></div>
  <div class="scrollanimation animated fadeInDown"></div>
  <div class="scrollanimation animated fadeInLeft"></div>
  <div class="scrollanimation animated fadeInRight"></div>
  <div class="scrollanimation animated fadeInUp"></div>

----------------------------------------------------------------------------------------------------------------------------------