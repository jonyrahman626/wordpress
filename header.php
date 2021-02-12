<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('title');?> | <?php bloginfo('description');?></title>

    <?php wp_head(); ?>
</head>
<body>
    <!-- ===================================================
                     Header Part Start
    =====================================================-->
    <section id="header">
        <div class="container header_cont border-bottom border-danger">
            <div class="row">
                <div class="col-6">
                    <div class="header_left">
                        <p><?= get_theme_mod('header_setting'); ?></p>
                    </div>
                </div>
                <div class="col-6 text-right">
                    <div class="header_right">
                        <p class="inline-block"><?= get_theme_mod('header_setting1'); ?></p>
                        <a href="">
                            English
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>    
    <!-- ===================================================
                    Header Part End
    =====================================================-->
    <!-- ===================================================
                            Header Logo Body Start
    =====================================================-->
    <section id="main_body">
        <div class="container">
            <div class="row">
                <div class="col-5">
                    <?= the_custom_logo(); ?>
                </div>
                <div class="col-4">
                    <form class="form-inline pl-5 pt-4">
                        <div class="form-group">
                          <label for="inputPassword2" class="sr-only">Password</label>
                          <input type="text" class="form-control form-control-sm" id="inputPassword2" placeholder="খুঁজুন" value="<?= get_search_query(); ?>" name="search">
                        </div>
                        <button type="submit" class="btn btn-sm btn-secondary">অনুসন্ধান</button>
                      </form>
                </div>                
                <div class="col-3 pt-4">
                    <img src="https://bangladesh.gov.bd/themes/responsive_npf/templates/bangladesh/images/a2i-logo-footer.png" alt="">
                    |
                    <img src="https://bangladesh.gov.bd/themes/responsive_npf/templates/bangladesh/images/facebook-icon.png" alt="">
                    <img src="https://bangladesh.gov.bd/themes/responsive_npf/templates/bangladesh/images/twitter-blue-icon.png" alt="">
                    <img src="https://bangladesh.gov.bd/themes/responsive_npf/templates/bangladesh/images/youtube-icon.png" alt="">
                    <img src="https://bangladesh.gov.bd/themes/responsive_npf/templates/bangladesh/images/gplus-icon.png" alt="">
                </div>                
            </div>
        </div>
    </section>
    <!-- ===================================================
                            Header Logo Body End
    =====================================================-->
    <!-- ===================================================
                            Menu Start
    =====================================================-->
    <nav class="navbar navbar-expand-lg p-0">
        <div class="container nav_container">            
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <?php
                    wp_nav_menu(
                        array(
                            'theme_location' => 'menu-1',
                            'menu_id'        => 'primary-menu',
                            'menu_class'        => 'navbar-nav',
                        )
                    );
                ?>
            </div>
        </div>
    </nav>
    <!-- ===================================================
                            Menu End
    =====================================================-->