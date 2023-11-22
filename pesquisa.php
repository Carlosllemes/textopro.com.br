<?
$h1         = 'Pesquisa no Site';
$title      = 'Pesquisa no Site';
$desc       = 'Pesquisa no Site - Navegue pelo menu do nosso site e encontre o que está procurando, escolha abaixo a página que deseja visualizar.';
$key        = 'Pesquisa no Site, encontre o que está procurando';
$var        = 'Pesquisa no Site';
include('inc/head.php');
include('inc/fancy.php'); ?>
<link defer rel="stylesheet" href="<?=$url?>/js/sweetalert/css/sweetalert.css">
<script defer src="<?=$url?>/js/sweetalert/js/sweetalert.min.js"></script>
</head>
<body>
    <? include('inc/topo.php');?>
    <main>
        <div class="content">
            <section>
                <?=$caminho?>
                <div class="container">
                    <div class="wrapper">
                        <div id="search">
                            <input type="text" id="inputSearch" placeholder="Buscar...">
                            <button type="reset" onclick="clearSearch();"><i class="fas fa-redo"></i></button>
                        </div>
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="container">
                    <div class="wrapper">
                        <div id="countResult"></div>
                        <h2 id="searching">Buscando...</h2>
                        <ul id="searchThumb" style="display: none">
                            <? include('inc/menu-top.php');?>
                        </ul>
                    </div>
                    <div class="clear"></div>
                </div>
            </section>
        </div>
    </main>
    <? include('inc/footer.php');?>
    <script>
        <?include ('js/pesquisa.js');?>
    </script>
</body>
</html>