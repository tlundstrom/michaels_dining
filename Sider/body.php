<div id="sider" class="sider-column  shelved">
    <div id="glue" class="sider-glue">

    <?php get_template_part('sider/header'); ?>

    <section id="sider-navigation" class="sider-navigation">
        <nav>
            <?php
            $defaults = array(
                'container' => false,
                'theme_location' => 'primary-menu',
                'menu_class' => 'no_bullet'
            );

            wp_nav_menu( $defaults);
            ?>
        </nav>
    </section>

    <?php get_template_part('sider/footer'); ?>

</div><!--/glue-->
</div><!--/sider-->
