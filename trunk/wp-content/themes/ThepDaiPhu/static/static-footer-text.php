<?php /* Static Name: Footer text */ ?>
<div id="footer-text" class="footer-text">
	<?php $myfooter_text = of_get_option('footer_text'); ?>
	<?php if($myfooter_text){?>
		<?php echo of_get_option('footer_text'); ?>
	<?php } else { ?>
	<?php } ?>
        <div data-motopress-type="static" data-motopress-static-file="static/static-footer-text.php">
            <div id="footer-text" class="footer-text">
                Copyright © 2014 by Thép Đại Phú. 
                <br>
                Website được xây dựng bởi <a href="http://www.web88.vn" target="_blank">www.web88.vn</a>	
            </div>		
        </div>
</div>