<?php /* Template Name: Atelier */ ?> 
<?php get_header() ?>
<main class="site__main">

    <h1>Atelier : <?php the_title() ?></h1>
    <?php if (have_posts()): the_post(); ?>
    <?php the_post_thumbnail(); ?>
        <section class="at__content">
            <h2> Description de l'atelier</h2>
            <h4>L'animateur de l'atelier : <h4 class="at"><?php the_field('animateur'); ?></h4></h4>
            <h4>L'atelier sera donné au local : <h4 class="at"><?php the_field('local'); ?></ph4></h4>
            <p><?php the_field('description_de_latelier'); ?></p>
            <h2>Horaire et dates de l'atelier</h2>
            <h4>Durée de chacune des scéances est de <h4 class="at"><?php the_field('les_journes_de_latelier')?></h4></h4>
            <h4>Date de début : <h4 class="at"><?php the_field('date_de_debut')?></h4></h4>
            <h4>Date de fin : <h4 class="at"><?php the_field('date_de_fin')?></h4></h4>
            <h4>La formation se donnera de <h4 class="at"><?php the_field('duree')?> heures.</h4></h4>
            <h4>L'horaire : de <h4 class="at"><?php the_field('heure_de_debut')?></h4> à <h4 class="at"><?php the_field('heure_de_fin')?></h4></h4>
        </section>
        
        
    <?php endif ?>
</main>
<?php get_footer() ?>