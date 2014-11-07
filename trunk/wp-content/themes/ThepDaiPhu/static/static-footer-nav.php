<?php /* Static Name: Footer navigation */
	if (has_nav_menu('footer_menu')) {
		if ( of_get_option('footer_menu') == 'true') { ?>  
		<nav class="nav footer-nav">
			<h4>navigation</h4>
			<?php wp_nav_menu( array(
				'container'       => 'ul',
				'depth'           => 0,
				'theme_location' => 'footer_menu' 
				)); 
			?>
		</nav>
	<?php }
	}
?>