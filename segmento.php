<?
$h1         = 'Segmento';
$title      = 'Segmento';
$desc       = 'Segmento - ';
$key        = 'uuuuuuuuuu, jjjjjjjjjjjj, lllllllllll';
$var        = 'Segmento';
include('inc/head.php');
?>
<!--STARTSCRIPTSHEADER-->
<!--ENDSCRIPTSHEADER-->
</head>
<body>
    <? include('inc/topo.php');?>
    <main>
        <div class="content">
            <section>
                <?= $autoBreadcrumb ?>
                <div class="container">
                    <div class="wrapper">
                        <article>
                            <!--STARTCOMPONENTS-->
                            <div class="segmento">
                                <h2>Lorem Ipsum</h2>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing, elit. Itaque natus facere id assumenda molestias, adipisci accusantium officia, quas cupiditate minus expedita sunt, ratione quae dolore aperiam cum distinctio ducimus consequuntur.</p>
                            </div>
                            <!--ENDCOMPONENTS-->
                        </article>
                        <? include('inc/auto-aside.php'); ?>
                    </div>
                </div>
                
            </section>
        </div> <!-- end content -->
    </main>
    <? include('inc/footer.php');?>
    <!--STARTSCRIPTSFOOTER-->
    <!--ENDSCRIPTSFOOTER-->
</body>
</html>