<?php get_header(); ?>

	<div id="primary" <?php hybrid_attr( 'content-area' ); ?>>
		<main id="main" <?php hybrid_attr( 'site-main' ); ?>>

			<?php 
			/* Start the Loop */
			while ( have_posts() ) : the_post(); ?>

				<?php
				/*
				 * Loads the content/singular/page.php template.
				 */
				hybrid_get_content_template(); ?>

				<?php
				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) : ?>
					<?php comments_template(); ?>
				<?php endif; ?>

			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php hybrid_get_sidebar( 'primary' ); // Loads the sidebar/primary.php template. ?>
<?php get_footer(); ?>
