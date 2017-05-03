<?php get_header(); ?>

	<div class="wrap">
		<div id="primary" class="content-area">
			<main id="main" class="site-main" role="main">

				<section class="entry error-404 not-found">
					<header class="entry-header">
						<h1 class="entry-title">><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'croft' ); ?></h1>
					</header><!-- .entry-header -->

					<div class="entry-content">
						<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try a search?', 'croft' ); ?></p>

						<?php get_search_form(); ?>

					</div><!-- .entry-content -->
				</section><!-- .error-404 -->

			</main><!-- #main -->
		</div><!-- #primary -->
	</div><!-- .wrap -->

<?php hybrid_get_sidebar( 'primary' ); // Loads the sidebar/primary.php template. ?>
<?php get_footer(); ?>
