</div><!-- end content -->

<footer role="contentinfo">

    <div id="footer-content" class="center-div">
        <?php if($footerText = get_theme_option('Footer Text')): ?>
        <div id="custom-footer-text">
            <p><?php echo get_theme_option('Footer Text'); ?></p>
        </div>
        <?php endif; ?>
        <?php if ((get_theme_option('Display Footer Copyright') == 1) && $copyright = option('copyright')): ?>
        <p><?php echo $copyright; ?></p>
        <?php endif; ?>
        <nav id="bottom-nav"><?php echo public_nav_main()->setMaxDepth(0); ?></nav>
        <p><a href="http://www.rehdi.co/" target="_blank"><img src="http://www.rehdi.co/images/logosmall.png?crc=4171246930"></a></p>
        <p><?php echo __('Proudly powered by <a href="http://omeka.org">Omeka</a> '); ?>:: <a href="/sosunivpub/changelog">versión 0.93 [2018-10-13]</a></p>

    </div><!-- end footer-content -->

     <?php fire_plugin_hook('public_footer', array('view'=>$this)); ?>

</footer>

<script type="text/javascript">
    jQuery(document).ready(function(){
        Omeka.skipNav();
    });
</script>

</body>

</html>
