<?php /* Wrapper Name: Footer */ ?>
<div class="row footer-widgets">
	<div class="span2" data-motopress-type="dynamic-sidebar" data-motopress-sidebar-id="footer-sidebar-1">
		<?php dynamic_sidebar("footer-sidebar-1"); ?>
	</div>
	<div class="span2" data-motopress-type="dynamic-sidebar" data-motopress-sidebar-id="footer-sidebar-2">
		<?php dynamic_sidebar("footer-sidebar-2"); ?>
	</div>
	<div class="span2" data-motopress-type="dynamic-sidebar" data-motopress-sidebar-id="footer-sidebar-3">
		<?php dynamic_sidebar("footer-sidebar-3"); ?>
	</div>
	<div class="span3" data-motopress-type="static" data-motopress-static-file="static/static-footer-nav.php">
		<?php get_template_part("static/static-footer-nav"); ?>
	</div>
	<div class="span3">
		<div data-motopress-type="dynamic-sidebar" data-motopress-sidebar-id="footer-sidebar-4">
			<?php dynamic_sidebar("footer-sidebar-4"); ?>
		</div>
		<div data-motopress-type="static" data-motopress-static-file="static/static-footer-text.php">
			<?php get_template_part("static/static-footer-text"); ?>
		</div>
		<div class="social-nets-wrapper" data-motopress-type="static" data-motopress-static-file="static/static-social-networks.php">
			<?php get_template_part("static/static-social-networks"); ?>
		</div>
	</div>
</div>