<?php get_header(); ?>

<header id="global-header" class="main-header">
    <i class="pe-7f-menu pe-4x pe-va mobile-menu-button"></i>
    <h1 id="site-title"><?php bloginfo(name); ?></h1>
    <h2 id="site-description"><?php bloginfo(description); ?></h2>
</header>
<section class="row">

            <?php while ( have_posts() ) : the_post(); ?>

                <?php get_template_part('articles/article'); ?>

            <?php endwhile; ?>

</section>

<?php get_footer(); ?>