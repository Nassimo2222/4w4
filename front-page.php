<?php get_header() ?>
<main class="site__main">

<!-- Sphères d'animations plus utlisé <section class="animation">
    <div class="animation__bloc">H</div>
    <div class="animation__bloc">E</div>
    <div class="animation__bloc">L</div>
    <div class="animation__bloc">L</div>
    <div class="animation__bloc">O</div>
    <div class="animation__bloc">!</div>
</section> -->

<h2>Activités en TIM</h2>

<?php 
    wp_nav_menu(array("menu"=>"accueil",
                        "container"=>"nav"));                    
?>

<h2>Les événements importants pour l'année</h2>

<?php 
    wp_nav_menu(array("menu"=>"evenement",
                            "container"=>"nav")); 
?>

    
    <?php if (have_posts()): /*while(have_posts()) :*/ the_post(); ?>
        <?php the_title() ?>
        <?php the_content() ?>
        
    
    <?php endif ?>
</main>
<?php get_footer() ?>