<?php get_header() ?>
<main class="principal">

    <h1>Les catégories des cours.</h1>

    <a href="?cletri=title&ordre=asc">Ascendant</a>
    <a href="?cletri=title&ordre=des">Descendant</a><br>

    <?php wp_nav_menu(array(
        "menu" => "categorie_cours",
        "container" => "nav"
    )) ?>

    <section class="formation">
        <h2 class="formation__titre">Liste des cours du programme TIM</h2>
        <div class="formation__liste">
            <?php if (have_posts()):
                while (have_posts()): the_post(); ?>
                    <?php 
                    if (is_category(array('cours','web','jeu','utilitaire','design','cration-3d','video'))):
                    get_template_part('gabarit/content', 'cours');
                    else :
                    get_template_part('gabarit/content', 'macrame'); 
                    endif
                    ?>
                <?php endwhile ?>
            <?php endif ?>
        </div>
    </section>
</main>
<?php get_footer() ?>