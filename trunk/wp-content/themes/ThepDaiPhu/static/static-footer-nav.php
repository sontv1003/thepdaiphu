<div> 
    <h4>Thông tin liên hệ</h4>
    <div class="footer-address" style="color: #fff;">
        Cty TNHH Sản xuất và Thương mại Thép Đại Phú<br/>
        Địa chỉ: Song Tháp – Châu Khê – Từ Sơn – Bắc Ninh<br/>
        Điện thoại: 0904.476.062 – 0917.952.986<br/>
        FAX: 0241.3843572<br/>
        E-mail: <a href="mailto:thepdaiphu@gmail.com">thepdaiphu@gmail.com</a><br/>
    </div>
</div>
<?php
/* Static Name: Footer navigation */
if (has_nav_menu('footer_menu')) {
    if (of_get_option('footer_menu') == 'true') {
        ?>  
        <nav class="nav footer-nav">
            <h4>navigation</h4>
            <?php
            wp_nav_menu(array(
                'container' => 'ul',
                'depth' => 0,
                'theme_location' => 'footer_menu'
            ));
            ?>
        </nav>
    <?php
    }
}
?>