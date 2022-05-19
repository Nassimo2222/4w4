<?php /* Template Name: Atelier */ ?> 
<?php get_header() ?>
<main class="site__main">

    <h1>Atelier : <?php the_title() ?></h1>
    <?php if (have_posts()): the_post(); ?>
    <?php the_post_thumbnail(); ?>
        <section class="at__content">
            <h2> Description de l'atelier</h2>
            <span>L'animateur de l'atelier : <span class="at"><?php the_field('animateur'); ?></span></span>
            <span>L'atelier sera donné au local : <span class="at"><?php the_field('local'); ?></span></span>
            <p><?php the_field('description_de_latelier'); ?></p>
            <h2>Horaire et dates de l'atelier</h2>
            <span>Durée de chacune des scéances est de <span class="at"><?php the_field('duree')?> heures.</span></span>
            <span>Date de début : <span class="at"><?php the_field('date_de_debut')?></span></span>
            <span>Date de fin : <span class="at"><?php the_field('date_de_fin')?></span></span>
            <span>La formation se donnera de <span class="at"><?php the_field('les_journees_de_latelier')?> </span></span>
            <span>L'horaire : de <span class="at"><?php the_field('heure_de_debut')?></span> à <span class="at"><?php the_field('heure_de_fin')?></span></span>
        </section>
        
        
    <?php endif ?>
</main>
<?php get_footer() ?>