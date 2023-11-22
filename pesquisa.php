<?
$h1         = 'Pesquisa no Site';
$title      = 'Pesquisa no Site';
$desc       = 'Pesquisa no Site - Navegue pelo menu do nosso site e encontre o que está procurando, escolha abaixo a página que deseja visualizar.';
$key        = 'Pesquisa no Site, encontre o que está procurando';
$var        = 'Pesquisa no Site';
include('inc/head.php');
?>
</head>
<body>
    <? include('inc/topo.php');?>
    <main>
        <div class="content">
            <section>
                <?=$caminho?>
                <div class="container">
                    <div class="wrapper">
                        <div class="search my-5">
                            <input type="text" placeholder="Buscar por ..." id="inputSearch" onkeypress="if(event.key === 'Enter'){startSearch();}" value="<?=$_POST['palavra']?>">
                            <div class="button-group">
                                <button type="submit" onclick="startSearch();"><i class="fas fa-search"></i></button>
                                <button type="reset" onclick="clearSearch();"><i class="fas fa-redo"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="container">
                    <div class="wrapper">
                        <div class="search-content" id="thumbSearch">
                            <ul>
                                <? include('inc/menu-top.php');?>
                            </ul>
                        </div>
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