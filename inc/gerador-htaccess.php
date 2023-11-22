<?php 



//Código do htaccess

if (!file_exists('.htaccess')):

    $RAIZ = RAIZ;

    $HTACCESS = HTACCESS;

    $htaccesswrite = "

    # Definindo o idioma. Recursos como x-webkit-speech

    DefaultLanguage pt-BR



    # eliminar a “assinatura” do servidor que é exibida nas páginas de erro

    ServerSignature Off



    



    Options All -Indexes



    # Forçando a codificação

    AddDefaultCharset utf-8

    AddCharset utf-8 .html .css .js .xml .json .rss



    <IfModule mod_rewrite.c>

      RewriteEngine On
      RewriteCond %{HTTPS} !=on
      RewriteRule ^.*$ https://%{SERVER_NAME}%{REQUEST_URI} [R,L]

      # Adiciona www. no prefixo do domínio
      RewriteCond %{HTTP_HOST} !^www\. [NC]
      RewriteRule ^ https://www.%{HTTP_HOST}%{REQUEST_URI} [R=301,L]

        RewriteCond %{http_host} ^{$HTACCESS} [NC]

        RewriteRule ^(.*)$ {$RAIZ}$1 [r=301,NC]

        RewriteRule ^index.php$ {$RAIZ} [r=301,NC,L]



        RewriteCond %{REQUEST_FILENAME} !-d

        RewriteCond %{REQUEST_FILENAME}.php -f

        RewriteRule ^(.*)$ $1.php



        #redirects 

       #redirect 301 /produto {$RAIZ}produtos
        redirect 301 /parceiros {$RAIZ}informacoes
        redirect 301 /empresa {$RAIZ}empresa-blindagem
        redirect 301 /veiculos/audi {$RAIZ}
        redirect 301 /veiculos/mercedes-benz {$RAIZ}melhores-blindadoras
        redirect 301 /politica-de-privacidade {$RAIZ}politica-privacidade
        redirect 301 /veiculos/hyundai/hyundai-ix35-2-0l-flex-aut {$RAIZ}
        redirect 301 /veiculos/volvo/volvo-xc60-2-0-d5-diesel-momentum-awd-geartronic {$RAIZ}veiculos-eletricos-ou-hibridos-blindados
        redirect 301 /veiculos/land-rover/land-rover-discovery-4-hse-3-0-4x4-tdv6-sdv6-die-aut {$RAIZ}blindagem-veiculos-eletricos-ou-hibridos
        redirect 301 /veiculos/chevrolet/chevrolet-s10-cabine-dupla-s10-2-8-ctdi-ltz-4wd-cabine-dupla-aut {$RAIZ}
        redirect 301 /veiculos {$RAIZ}
        redirect 301 /veiculos/land-rover/land-rover-range-rover-sport-hse-4x4-5-0-v8-supercharged {$RAIZ}
        redirect 301 /veiculos/toyota/toyota-hilux-sw4-srx-4x4-2-8-tdi-16v-dies-aut {$RAIZ}
        redirect 301 /audi-rs-q3-2-5-tfsi-s-tronic-quattro {$RAIZ}
        redirect 301 /veiculos/audi/audi-rs-q3-2-5-tfsi-s-tronic-quattro {$RAIZ}
        redirect 301 /modules/handle-key {$RAIZ}
        redirect 301 /handle-dom {$RAIZ}
        redirect 301 /a {$RAIZ}


        
        #RewriteCond %{REQUEST_URI} ^(.*)colar_link_antigo(.*)$
        #RewriteRule ^(.*) novo_dominio [L,R=301,QSD]

        

    </IfModule>



    # Exibe página não encontrada se url não existir

    errordocument 404 {$RAIZ}404



    # Redireciona erro 403 para página 404

    errordocument 403 {$RAIZ}404



    # Exibe 404 para uma reescrita se uma pasta de mesmo nome não existir

    Options -MultiViews



    # Impede de navegar em pastas sem um documento padrão (index) e exibe Erro 403 - permissão negada

    <IfModule mod_autoindex.c>

        Options -Indexes

    </IfModule>



    # Forçando a última versão do IE, em vários casos quando ele poderia voltar ao modo IE7

    <IfModule mod_setenvif.c>

      <IfModule mod_headers.c>

        BrowserMatch MSIE ie

        Header set X-UA-Compatible 'IE=Edge,chrome=1' env=ie

      </IfModule>

    </IfModule>



    # Informar os proxies alterações de conteúdo baseado em UA

    <IfModule mod_headers.c>

      Header append Vary User-Agent

    </IfModule>



    # Permite o acesso de todos os domínios para as web fontes.

    <FilesMatch '.(ttf|otf|eot|woff|font.css)$'>

      <IfModule mod_headers.c>

        Header set Access-Control-Allow-Origin '*'

      </IfModule>

    </FilesMatch>



    # Compressão gzip

    <IfModule mod_deflate.c>



      # html, txt, css, js, json, xml, htc:

      #AddOutputFilterByType DEFLATE text/html text/plain text/css application/json

      #AddOutputFilterByType DEFLATE text/javascript application/javascript application/x-javascript

      #AddOutputFilterByType DEFLATE text/xml application/xml text/x-component



      # webfonts e svg:

      <FilesMatch '.(ttf|otf|eot|svg)$' >

        SetOutputFilter DEFLATE

      </FilesMatch>



    </IfModule>



    # Fazendo cache de recursos com Expires HTTP

    <IfModule mod_expires.c>

      Header set Cache-Control 'public'

      ExpiresActive on



      ExpiresDefault 'access plus 1 month'

      ExpiresByType text/cache-manifest 'access plus 0 seconds'

      ExpiresByType text/html 'access plus 0 seconds'



      # Dados

      ExpiresByType text/xml 'access plus 0 seconds'

      ExpiresByType application/xml 'access plus 0 seconds'

      ExpiresByType application/json 'access plus 0 seconds'



      # Feed RSS

      ExpiresByType application/rss+xml 'access plus 1 hour'



      # Favicon (não pode ser renomeado)

      ExpiresByType image/vnd.microsoft.icon 'access plus 1 week'



      # Imagens, vídeo, audio;

      ExpiresByType image/gif 'access plus 1 month'

      ExpiresByType image/png 'access plus 1 month'

      ExpiresByType image/jpg 'access plus 1 month'

      ExpiresByType image/jpeg 'access plus 1 month'



      ExpiresByType video/ogg 'access plus 1 month'

      ExpiresByType audio/ogg 'access plus 1 month'

      ExpiresByType video/mp4 'access plus 1 month'

      ExpiresByType video/webm 'access plus 1 month'



      # Webfonts

      ExpiresByType font/truetype 'access plus 1 month'

      ExpiresByType font/opentype 'access plus 1 month'

      ExpiresByType font/woff 'access plus 1 month'
      
      ExpiresByType font/woff2 'access plus 1 month'

      ExpiresByType image/svg+xml 'access plus 1 month'

      ExpiresByType application/vnd.ms-fontobject 'access plus 1 month'



      # CSS / jScript

      ExpiresByType text/css 'access plus 1 month'

      ExpiresByType application/javascript 'access plus 1 month'

      ExpiresByType text/javascript 'access plus 1 month'

    </IfModule>

    ";

    $htaccess = fopen('.htaccess', "w");

    fwrite($htaccess, str_replace("'", '"', $htaccesswrite));

    fclose($htaccess);

endif;
