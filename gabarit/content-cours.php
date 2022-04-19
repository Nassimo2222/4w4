<?php 
    $categories = get_the_category();          
?>

<article class="formation__cours <?php echo $categories[1]->slug; ?> ">
        <?php
        $titre = get_the_title();
        $titreFiltreCours = substr($titre, 4, -6);
        /*$nbHeures = substr($titre, -6);*/
        $nbHeures = get_field( "nombre_dheures");
        $departement = get_field("departement");
        $sigleCours = substr($titre, 0, 3);
        $descCours = wp_trim_words(get_the_content(), 15, '<button class="cours__desc__suite" href=#> la suite </button>');
        wp_enqueue_style('style-name', get_stylesheet_uri());
        ?>
        <?php the_post_thumbnail("thumbnail"); ?>
        <div class="cours__texte">

            <h3 class="cours__titre"> 
                <a href="<?php echo get_permalink(); ?>">
                    <?= $titreFiltreCours; ?>
                </a>
            </h3>
        <div class="cours__nbre-heure"><?= $nbHeures; ?></div>
        <p class="cours__sigle"><?= $sigleCours; ?> </p>
        <p class="cours__desc"> <?= $descCours; ?></p>
        <p class="cours__dep"><?= $departement; ?></p>
    </div>
</article>