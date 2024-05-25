<?php
use Kliver\Core\Util;

defined('_INCLUDE_PROTECTION') or die();

include PATH_TEMPLATE_INCLUDE.'_meta.php';
?>

<body> 
    <header>
        <?php include PATH_TEMPLATE_INCLUDE.'_topbar.php'; ?>       
        <section class="header-main">
            <div class="container">
                <div class="row">
                    <div class="col col-lg-12 col-xl-auto text-center text-xl-start">
                        <div class="logo">
                            <a href="/">
                                <?php
                                    if (Util::getArrayItem($__global['head'], 'logo_file', '') != '') {
                                        echo '<img src="'.Util::getArrayItem($__global['head'], 'logo_file', '').'" alt="'.Util::getArrayItem($__global['head'], 'logo_alt', '').'">';
                                    } else {
                                        echo '<img src="/mdata/fileman/images/logo_'.$__tmpl['key'].'.png" alt="'.Util::getArrayItem($__global['head'], 'logo_alt', '').'">';
                                    }
                                ?>                               
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-12 col-xl d-none d-md-block">
                        <div class="row align-items-center justify-content-center justify-content-xl-end" style="height:100%">
                            <?php
                                if (isset($__global['head']['main_view'])) {
                                    foreach($__global['head']['main_view'] as $key => $view) {
                                        if ($view) {
                                            $ico = Util::getArrayItem($__global['head'], array('main_ico', $key), '');
                                            $title = Util::getArrayItem($__global['head'], array('main_title', $key), '');
                                            $text = Util::getArrayItem($__global['head'], array('main_text', $key), '');
                                            $link = Util::getArrayItem($__global['head'], array('main_link', $key), '');
                                            echo '
                                                <div class="col-auto col-xl px-4 px-xl-3">
                                                    <div class="header-icon-box">
                                                        <div class="icon-container">
                                                            <i class="'.$ico.'"></i>
                                                        </div>
                                                        <div>
                                                            <span class="head-heading">'.$title.'</span>                                                
                                                            '.($link != '' ? '<a href="'.$link.'">' : '').'
                                                                <span class="head-content">'.$text.'</span>
                                                            '.($link != '' ? '</a>' : '').'
                                                        </div>
                                                    </div>
                                                </div>';
                                        }
                                    }
                                }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section style="min-height:61px;">
            <nav class="main-navbar-panel">
                <div class="container">
                    <div class="row">
                        <div class="col d-none d-xl-block">
                            <ul id="cmlex-mainmenu-ul" class="main-navbar">
                                <?php
                                    include PATH_TEMPLATE_INCLUDE.'_menu.php';
                                ?>
                            </ul>
                        </div>
                        <?php
                            if(Util::getArrayItem($__global['cart'], 'view', false)) {
                        ?>
                            <div class="col d-xl-none text-end">
                                <button class="mobmenu-button" onclick="showMobMenu()" type="button"><i class="fa-solid fa-bars"></i><span>Меню</span></button>
                            </div>
                            <div class="col col-xl-auto text-start">
                                <button type="button" class="nav-cart mx-4 mx-xl-0" onclick="location.href='/cart'">
                                    <i class="fa-solid fa-cart-shopping"></i>
                                    <span class="cmlex-header-cart-total cart-header-count"><?php echo Util::getPrice($__cart['total']['count']); ?></span>
                                </button>
                            </div>
                        <?php 
                            } else { 
                        ?>
                            <div class="col d-xl-none text-center">
                                <button class="mobmenu-button" onclick="showMobMenu()" type="button"><i class="fa-solid fa-bars"></i><span>Меню</span></button>
                            </div>
                        <?php 
                            } 
                        ?>
                    </div>
                </div>
            </nav>
        </section>
    </header>
    
    <?php
        foreach($__section as $nameSection => $rowSection) {
            if (file_exists(PATH_TEMPLATE_INCLUDE.'main/_'.$nameSection.'.php')) {
                include PATH_TEMPLATE_INCLUDE.'main/_'.$nameSection.'.php';
            }
        }
 
include PATH_TEMPLATE_INCLUDE.'_footer.php';
    