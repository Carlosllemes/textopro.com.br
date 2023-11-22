<div class="social">
    <?php if(isset($urlTwitter)):?>
        <a rel="nofollow" class="social__icons twitter" href="<?=$urlTwitter?>" target="_blank" title="Twitter">
            <i class="fab fa-twitter" aria-hidden="true"></i>
        </a>
    <?php endif ?>
    <?php if(isset($urlInstagram)):?>
        <a rel="nofollow" class="social__icons instagram" href="<?=$urlInstagram?>" target="_blank" title="Instagram">
            <i class="fab fa-instagram" aria-hidden="true"></i>
        </a>
    <?php endif ?>
    <?php if(isset($urlLinkedIn)):?>
        <a rel="nofollow" class="social__icons linkedin" href="<?=$urlLinkedIn?>" target="_blank" title="Linked In">
            <i class="fab fa-linkedin-in" aria-hidden="true"></i>
        </a>
    <?php endif ?>
    <?php if(isset($urlYouTube)):?>
        <a rel="nofollow" class="social__icons youtube" href="<?=$urlYouTube?>" target="_blank" title="Youtube">
            <i class="fab fa-youtube" aria-hidden="true"></i>
        </a>
    <?php endif ?>
    <?php if(isset($paginaFacebook)):?>
        <a rel="nofollow" class="social__icons facebook" href="https://www.facebook.com/<?=$paginaFacebook?>" target="_blank" title="Facebook">
            <i class="fab fa-facebook" aria-hidden="true"></i>
        </a>
    <?php endif ?>
</div>