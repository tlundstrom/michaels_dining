                <footer id="footer-main">
                    <div class="foot-wrapper">
                        <div id="address">
                            <h3>Michael's Seafood & Steakhouse</h3>
                            <p>117 B East 1st Street</p>
                            <p>Port Angeles, WA 98362</p>
                            <p id="telephone">360-417-6929</p>
                            <div id="clear-fix"></div>
                        </div>
                        <div id="hours">
                            <h3>Hours of Operation</h3>
                           <?php footer_text(); ?>
                        </div>
                        <div id="clear-fix"></div>
                    </div>
                </footer>
            </main>
                <div id="sideNav" <?php body_class(); ?>>
                    <div id="glue">
                        <header class="sideNav-header">
                            <div class="logo-wrapper">
                                <img class="michaels-logo" src="<?php echo get_template_directory_uri() . '/images/logo.png'; ?>"></img>
                            </div>
                        </header>
                        <section class="sideNav-navigation">
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
                        <footer class="sideNav-footer">
			<ul class="pe-social">
                              <li><a href="https://www.facebook.com/MichaelsPA"><i class="pe-so-facebook pe-bg-cl pe-bg pe-hover pe-2x"></i></a></li>
                              <li><a href="http://www.yelp.com/biz/michaels-seafood-and-steakhouse-port-angeles-3"><i class="pe-so-yelp pe-bg-cl pe-bg pe-hover pe-2x"></i></a></li>
                              <li><a href="http://www.tripadvisor.com/Restaurant_Review-g60921-d487313-Reviews-Michaels_Seafood_and_Steakhouse-Port_Angeles_Washington.html"><i class="pe-so-tripadvisor pe-bg-cl pe-bg pe-hover pe-2x"></i></a></li>
                            </ul>
                            <hr>
                                <p>Designed by:<br></p>
                                <a href="http://www.thomaswlundstrom.com">Thomas Lundstrom</a>
                                <hr>
                                <a href="/terms-and-conditions-of-use/">Terms & Conditions</a>
                                <hr>
                                <p>&copy; Michael Lynch Inc. <?php echo date('Y'); ?></p>
                        </footer>     
                    </div>
                </div>
            </div>
            <div class="footer-extend"></div>
        </div>
        <?php wp_footer(); ?>
    </body>
</html>