<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php hybrid_get_sidebar( 'off-canvas' ); // Loads the sidebar/off-canvas.php template. ?>

<div id="page" class="site off-canvas-content" data-off-canvas-content>
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'croft' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<div class="row">

			<div class="site-branding">
				<button class="menu-toggle" data-toggle="sidebar-off-canvas"><?php croft_do_svg( 'menu-toggle', array( 'inline' => true ) ); ?> <?php esc_html_e( 'Menu', 'croft' );?></button>

				<?php if ( has_custom_logo() ) : // If the site logo is set. ?>
					<?php if ( is_front_page() || is_home() ) : ?>
						<h1 <?php hybrid_attr( 'site-title' ); ?>><?php the_custom_logo(); ?></h1>
					<?php else: ?>
						<p <?php hybrid_attr( 'site-title' ); ?>><?php the_custom_logo(); ?></p>
					<?php endif; ?>
				<?php else: // If no site logo set. ?>
					<?php hybrid_site_title(); ?>
				<?php endif; ?>

				<?php if ( get_bloginfo( 'description', 'display' ) || is_customize_preview() ) : ?>
					<?php hybrid_site_description(); ?>
				<?php endif; ?>
			</div><!-- .site-branding -->

			<?php hybrid_get_menu( 'primary' ); // Loads the menu/primary.php template. ?>

		</div><!-- .row -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
