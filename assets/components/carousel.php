<div class="container" data-aos="zoom-in">
    <?php
    $dir = 'assets/img/clients/';
    $files = array_diff(scandir($dir), array('.', '..'));
    $numImages = count($files);

    ?>

    <div class="clients-slider swiper">
        <div class="swiper-wrapper align-items-center">
            <?php for ($i = 1; $i <= $numImages; $i++) : ?>
                <div class="swiper-slide"><img src="<?php echo $dir; ?>client-<?php echo $i; ?>.png" class="img-fluid" alt=""></div>
            <?php endfor; ?>
        </div>
        <div class="swiper-pagination"></div>
    </div>
</div>