<?php /* Template Name: Évenement */ ?> 
<?php get_header() ?>
<main class="site__main">

    <h1>Évenement</h1>
    <?php if (have_posts()): the_post(); ?>
    <?php the_post_thumbnail(); ?>
        <?php the_title() ?>
        <div class="evn__img">
            <?php 
                $image = get_field('image');
                if( !empty( $image ) ): ?>
                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                <?php endif; ?>
                <section class="evn__content">
            <div class="evn__loc">
                <h4>L'endroit
                </h4>
                <div class="evn__txt">
                <p><?php the_field('endroit'); ?></p>
                <p>Date de l'évenement: <?php the_field('date'); ?></p>
                <p>L'heure: <?php the_field('heure'); ?></p>
                <p>L'heure: <?php the_field('heure'); ?></p>
                </div>
            </div>
            <div class="evn__res">
                <h4>Résumé de l'évenement</h4>
                <p><?php the_field('resume'); ?></p>
            </div>
            <div class="evn__org">
                <h4>Organisateur de l'évenement</h4>
                <p><?php the_field('organisateur'); ?></p>
            </div>
        </section>
        </div>
        
        
    <?php endif ?>
</main>
<?php get_footer() ?>

