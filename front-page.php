<?php get_header(); ?>

<div class="content">
    <div class="menu-holder">
        <div class="left-menu">
        
        <div class="mobile">
            <?php bellows( 'main' ); ?>
        </div>    
        
        <div class="desktop">
            <?php wp_nav_menu( array ( 'theme_location' => 'left-menu' ) ); ?>
        </div>
        </div>

        <div class="left-sub-menu desktop">
            <div class="small-strip"></div>
            <?php  wp_nav_menu( array( 'theme_location' => 'left-sub-menu' ) ); ?>
        </div>
        
        <div class="krd desktop"> 
            <a href="https://www.rzetelnafirma.pl/SKOU2XP6" rel="nofollow">
                <img src="/wp-content/themes/procity/img/KRD.png" alt="Kliknij i zobacz Certyfikat Rzetelności naszej firmy.">
            </a>
        </div>
    </div>
     
    <div class="page-holder">
        <div class="photocover desktop">
            <?php if ( has_post_thumbnail()) : ?>
                <a href="<?php the_permalink(); ?>" alt="<?php the_title_attribute(); ?>">
                <?php the_post_thumbnail(); ?>
                </a>
            <?php endif; ?>
        </div>
        
        <div class="beard">
            
        </div>

        <div class="page-content">
            <?php the_content(); ?>

            <div class="buttonup">
                <a href="#" class="topbutton">DO GÓRY</a>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>