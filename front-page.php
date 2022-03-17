<?php get_header() ?>
<main class="site__main">

<section class="animation">
    <div class="animation__bloc">H</div>
    <div class="animation__bloc">E</div>
    <div class="animation__bloc">L</div>
    <div class="animation__bloc">L</div>
    <div class="animation__bloc">O</div>
    <div class="animation__bloc">!</div>
</section>

    <h1>PAGE PRINCIPALE</h1>
    <?php if (have_posts()): while(have_posts()) : the_post(); ?>
        <?php the_title() ?>
        <?php the_content() ?>
        <?php endwhile ?>
    <?php endif ?>
</main>
<?php get_footer() ?>