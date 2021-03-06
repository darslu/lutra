<header id="masthead" class="site-header bp-header-2">
    <div class="<?php if ( !get_theme_mod( 'boxed_site' ) ) : echo 'container'; endif; ?>">
        <div class="row align-items-center">
            <div class="col-md-5">
                <div class="site-branding">
                    <?php
                    the_custom_logo();

                    if ( !get_theme_mod( 'hide_site_title' ) ) {
                        if ( is_front_page() && is_home() ) : ?>
                            <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                        <?php else : ?>
                            <h2 class="site-title h1"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h2>
                        <?php
                        endif;
                    }

                    if ( get_theme_mod( 'show_site_description' ) ) {
                        $description = get_bloginfo( 'description', 'display' );
                        if ( $description || is_customize_preview() ) : ?>
                            <p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
                        <?php
                        endif;
                    }

                    ?>
                </div><!-- .site-branding -->
            </div>
            <!-- /.col-md-5 -->
            <div class="col-md-7 text-md-right">
                <?php if ( is_active_sidebar( 'sidebar-header-right' ) ) : ?>
                    <?php dynamic_sidebar( 'sidebar-header-right' ); ?>
                <?php endif; ?><!-- header sidebar -->
            </div>
            <!-- /.col-md-7 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</header><!-- #masthead -->

<div class="nav-bg bp-header-2-nav">
    <div class="<?php if ( !get_theme_mod( 'boxed_site' ) ) : echo 'container'; endif; ?>">
        <div class="row">
            <div class="col-md-12">
                <div class="<?php if( get_theme_mod( 'show_search_in_nav' ) ) : echo "bp-search-nav"; endif; ?>">
                    <nav id="site-navigation" class="main-navigation">
                        <?php
                            wp_nav_menu( array(
                                'theme_location' => 'menu-1',
                                'menu_id'        => 'primary-menu',
                            ) );
                        ?>
                    </nav><!-- #site-navigation -->
                </div>
            </div>
            <!-- /.col-md-12 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</div>
<!-- /.nav-bg -->
