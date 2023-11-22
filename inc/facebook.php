<!-- Plugin facebook -->
<script>
   // Disparando função através do scroll
   var keyscroll;
   $(window).on('scroll', function(e){
       if($(this).scrollTop() >= 50 && !keyscroll){
           
           //Inicio do Facebook
           (function(d, s, id) {
               var js, fjs = d.getElementsByTagName(s)[0];
               if (d.getElementById(id)) return;
               js = d.createElement(s); js.id = id;
               js.src = "//connect.facebook.net/pt_BR/all.js#xfbml=1";
               fjs.parentNode.insertBefore(js, fjs);
           }(document, 'script', 'facebook-jssdk'));
           //Fim do Facebook

           $("aside .fb-page").css("display", "block");

           keyscroll = true;
       }
   });
</script>