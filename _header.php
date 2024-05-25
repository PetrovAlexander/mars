<?php
use Kliver\Core\Util;

defined('_INCLUDE_PROTECTION') or die();
?>    
    <body> 
        <?php
            if (is_array(Util::getArrayItem($__global, ['js_body_begin', 'script'], null))) {
                foreach($__global['js_body_begin']['script'] as $idScript) {
                    if ((bool)Util::getArrayItem($__global['js_body_begin'], ['use', $idScript], false)) {
                        echo PHP_EOL.Util::getArrayItem($__global['js_body_begin'], ['code', $idScript], '');
                    }
                }
            }        
        ?>
        <header>
            <?php include PATH_TEMPLATE_INCLUDE.'_topbar.php'; ?>
            <section style="min-height:78px;"> 
                <nav class="main-navbar-panel main-navbar-panel-sec">         
                    <div class="container">
                        <div class="row justify-content-end align-items-center">
                            <div class="col col-xl-auto text-start is-sticky-hide">
                                <a class="logo-sec" href="/">
                                    <?php
                                        if (Util::getArrayItem($__global['head'], 'logo_file', '') != '') {
                                            echo '<img src="'.Util::getArrayItem($__global['head'], 'logo_file', '').'" alt="'.Util::getArrayItem($__global['head'], 'logo_alt', '').'">';
                                        } else {
                                            echo '<img src="/mdata/fileman/images/logo_'.$__tmpl['key'].'.png" alt="'.Util::getArrayItem($__global['head'], 'logo_alt', '').'">';
                                        }
                                    ?>
                                </a>
                            </div>
                            <div class="col-12 col-sm d-none d-xl-block">
                                <ul id="cmlex-mainmenu-ul" class="main-navbar">
                                    <?php
                                        include PATH_TEMPLATE_INCLUDE.'_menu.php';
                                    ?>
                                </ul>
                            </div>                    

                            <?php 
                                if (isset($__optionsList['filter_panel_show'])) {
                                    if ($__optionsList['filter_panel_show']) {
                                        echo '
                                            <div class="d-block d-lg-none col-auto text-end">
                                                <button type="button" class="nav-filter" onclick="showMobFilterPanel()">
                                                    <i class="fa-solid fa-filter"></i>
                                                    '.($__optionsList['used_count'] > 0 ? '<span>'.$__optionsList['used_count'].'</span>' : '').'
                                                </button>
                                            </div>';
                                    } 
                                } 
                            ?>

                            <div class="col-auto d-xl-none text-start text-end">
                                <button class="mobmenu-button px-3 px-sm-2 " onclick="showMobMenu()" type="button"><i class="fa-solid fa-bars"></i><span class="d-none d-sm-inline">Меню</span></button>
                            </div>
                            <?php
                                if (Util::getArrayItem($__global['cart'], 'view', false)) {
                            ?>                            
                                <div class="col-auto text-end">
                                    <button type="button" class="nav-cart" onclick="location.href='/cart'">
                                        <i class="fa-solid fa-cart-shopping"></i>
                                        <span class="cmlex-header-cart-total cart-header-count"><?php echo Util::getPrice($__cart['total']['count']); ?></span>
                                    </button>
                                </div>                            
                            <?php
                                }
                            ?>    
                        </div>
                    </div>
                </nav>
            </section>

            <section class="page-header">
                <div class="container">
                    <div class="row">
                        <div class="col text-center">
                            <h1>
                                <?php 
                                    if($__content['heading'] != '') {
                                        echo $__content['heading'];
                                    } else {
                                        echo $__content['part_name'];
                                    }                                    
                                ?>
                            </h1>
                            <nav>
                                <?php include PATH_TEMPLATE_INCLUDE.'_breadcrumb.php'; ?>
                            </nav>
                        </div>
                    </div>
                </div>
            </section>            
        </header>
                    