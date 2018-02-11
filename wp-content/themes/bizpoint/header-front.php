<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div class="<?php if ( get_theme_mod( 'boxed_site' ) ) : echo 'container'; endif; ?> bp-content-bg">
		<div id="page" class="site">
			<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'bizpoint' ); ?></a>

			<?php if( get_theme_mod( 'bp_header_layout' ) == '2' ) : ?>
				<?php get_template_part( 'template-parts/header-layouts/layout-2' ); ?>
			<?php elseif( get_theme_mod( 'bp_header_layout' ) == '3' ) : ?>
				<?php get_template_part( 'template-parts/header-layouts/layout-3' ); ?>
			<?php else : ?>
				<?php get_template_part( 'template-parts/header-layouts/layout-1' ); ?>
			<?php endif; ?>

			<div id="content" class="site-content pt-0">
				<div class="<?php if ( !get_theme_mod( 'boxed_site' ) ) : echo ''; endif; ?>">
					<div class="row <?php if ( !get_theme_mod( 'boxed_site' ) ) : echo 'ml-0 mr-0'; endif; ?>">
