<?php /* Static Name: Footer text */ ?>
<div id="footer-text" class="footer-text">
	<?php $myfooter_text = of_get_option('footer_text'); ?>
	<?php if($myfooter_text){?>
		<?php echo of_get_option('footer_text'); ?>
	<?php } else { ?>
		<a href="<?php echo home_url(); ?>/" title="<?php bloginfo('description'); ?>" class="site-name"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/logo-footer.png"></a><br><span>&copy; <?php echo date('Y'); ?> | <a href="<?php echo home_url(); ?>/privacy-policy/" title="<?php echo theme_locals('privacy_policy'); ?>" class='privacy'><?php echo theme_locals("privacy_policy"); ?></a></span>
	<?php } ?>
	<?php if( is_front_page() ) { ?>
		<a rel="nofollow" href="http://www.templatemonster.com/wordpress-themes.php" target="_blank">TemplateMonster</a> Design. 
	<?php } ?>
</div>