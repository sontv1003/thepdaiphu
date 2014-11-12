<?php get_header();?>
<?php cherry_setPostViews(get_the_ID()); ?>
<div class="motopress-wrapper content-holder clearfix">
	<div class="container">
		<div class="row">
			<div class="<?php echo cherry_get_layout_class( 'full_width_content' ); ?>" data-motopress-wrapper-file="single.php" data-motopress-wrapper-type="content">
				<div class="row">
					<div class="<?php echo cherry_get_layout_class( 'full_width_content' ); ?>" data-motopress-type="static" data-motopress-static-file="static/static-title.php">
						<?php get_template_part("static/static-title"); ?>
					</div>
				</div>
				<div class="row">
					<div class="<?php echo cherry_get_layout_class( 'content' ); ?> <?php echo of_get_option('blog_sidebar_pos'); ?>" id="content" data-motopress-type="loop" data-motopress-loop-file="loop/loop-single.php">
						<?php get_template_part("loop/loop-single"); ?>
					</div>
					<div class="<?php echo cherry_get_layout_class( 'sidebar' ); ?> sidebar" id="sidebar" data-motopress-type="static-sidebar"  data-motopress-sidebar-file="sidebar.php">
						<?php get_sidebar(); ?>
					</div>
                                        <div class="fb-comment">
                                            <div id="fb-root"></div>
                                            <script>(function(d, s, id) {
                                                            var js, fjs = d.getElementsByTagName(s)[0];
                                                            if (d.getElementById(id))
                                                                return;
                                                            js = d.createElement(s);
                                                            js.id = id;
                                                            js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=542409615782070";
                                                            fjs.parentNode.insertBefore(js, fjs);
                                                        }(document, 'script', 'facebook-jssdk'));</script>

                                            <fb:comments href="<?php echo get_permalink(); ?>" width="100%" num_posts="10"></fb:comments>
                                        </div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>