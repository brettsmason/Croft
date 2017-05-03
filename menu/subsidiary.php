<?php if ( has_nav_menu( 'subsidiary' ) ) : // Check if there's a menu assigned to the 'footer' location. ?>

	<nav id="footer-navigation" class="footer-navigation" role="navigation">

		<?php wp_nav_menu(
			array(
				'theme_location' => 'subsidiary',
				'container'      => '',
				'menu_id'        => 'subsidiary-menu',
				'menu_class'     => 'menu-items menu',
				'fallback_cb'    => '',
				'items_wrap'     => '<ul id="%s" class="%s">%s</ul>',
				'depth'          => 1,
				'walker'         => new Foundation_Menu_Walker()
			)
		); ?>

	</nav><!-- #footer-navigation -->

<?php endif; // End check for menu. ?>
