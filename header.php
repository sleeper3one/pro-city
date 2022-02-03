<!DOCTYPE html>
<html lang="pl">
    <head>
        <title></title>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">   
        <meta name="viewport" content="width=device-width, initial-scale=1">

        

        <?php wp_head(); ?>
    </head>

    <body <?php body_class(); ?>>

    <header>
            
            <div class="head">
                <div class="logo">
                    <?php if ( function_exists( 'the_custom_logo' ) ) {
                            the_custom_logo();
                            }
                        ?>
                </div>
                
                <div class="mobile-view">
                <div class="infobar">
                    <div class="cell-a">ZAPYTAJ O WYCENĘ:</div>
                    <div class="cell-b"><a href="mailto:biuro@pro-city.pl">
                    <img src="http://localhost/city/wp-content/themes/procity/img/mail.png" alt="Napisz do nas w sprawie wyceny. Oto nasz adres mailowy." class="no-border" style="display: inline;">biuro@pro-city.pl</a></div>
                    <div class="cell-c"><a href="tel:+48531717818">
                    <img src="http://localhost/city/wp-content/themes/procity/img/phone.png" alt="Zadzwoń do nas w sprawie wyceny. Oto nasz numer komórkowy." class="no-border" style="display: inline;">+48 531-717-818</a></div>
                    <div class="cell-d"><a href="tel:+48717345504">
                    <img src="http://localhost/city/wp-content/themes/procity/img/cell.png" alt="Zadzwoń do nas w sprawie wyceny. Oto nasz numer stacjonarny." class="no-border" style="display: inline;">+48 71 734-55-04</a></div>
                </div>
                </div>
                
                <nav class="menu main">

                    <nav id="site-navigation" class="main-navigation mobile" role="navigation">
                        <button class="menu-toggle">&#9776;</button>
                        <?php wp_nav_menu( array( 'theme_location' => 'header-menu', 'menu_class' => 'nav-menu' ) ); ?>
                    </nav>

                    <div class="desktop">
                        <?php wp_nav_menu( array( 
                            'theme_location' => 'header-menu',
                            'container_class' => 'main-nav'
                            )); ?>
                    </div>

                </nav>

            </div>

            
            
            <div id="facebook_slider_widget" class="desktop" style="display: none">
                <script type="text/javascript" src="http://webfrik.pl/widget/facebook_slider.html?fb_url=https://www.facebook.com/gemma.wroclaw&amp;fb_width=290&amp;fb_height=590&amp;fb_faces=true&amp;fb_stream=true&amp;fb_header=true&amp;fb_border=true&amp;fb_theme=light&amp;chx=787&amp;speed=SLOW&amp;fb_pic=logo&amp;position=RIGHT">
                </script>
	        </div>
    </header>
        