<?php get_header(); ?>

<header id="global-header" class="main-header">
    <i class="pe-7f-menu pe-4x pe-va mobile-menu-button"></i>
    <h1 id="site-title"><?php bloginfo(name); ?></h1>
    <h2 id="site-description"><?php bloginfo(description); ?></h2>
</header>
<section class="row">

   <?php // Introductory Article
    if ( ( get_post_status('1') == 'publish' ) && ( get_the_title('1') == 'Hello world!') ) { get_template_part( 'includes/startup/welcome' ); }  ?>

    <?php while ( have_posts() ) : the_post(); ?>

        <?php get_template_part('articles/post'); ?>

    <?php endwhile; // end of the loop. ?>

</section>

<?php get_footer(); ?>