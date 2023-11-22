<aside class="aside">
                        <div class="aside__menu">
                            <h2 class="mt-0"><a href="<?=$url?>produtos" title="Produtos">Produtos</a></h2>
                            <nav>
                                <ul>
                                    <? include('inc/sub-menu-produtos.php'); ?>
                                </ul>
                            </nav>
                        </div>
                        <div class="aside__contato">
                            <div class="d-flex align-items-center justify-content-center">
                                <?php foreach ($fone as $key => $value) { ?>
                                    <a rel="nofollow" title="Clique e ligue" href="tel:<?=$value[0].$value[1]?>">
                                        <i class="<?=$value[2]?>"></i>
                                    </a>
                                    <?php if($key >= 2) break;
                                } ?>
                            </div>
                            <a href="<?=$url?>contato" class="aside__btn btn-orc" title="Orçamento">Orçamento</a>
                        </div>
                    </aside>