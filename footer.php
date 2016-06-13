	</div><!-- close .container-->
</div><!-- close #main-content-->

<footer id="main-footer">
	<div class="container">
		<?php if ( ! dynamic_sidebar( 'Footer' ) ) : ?><!--Wigitized Footer--><?php endif ?>
		<nav id="footer-menu">
			<?php wp_nav_menu( array('theme_location' => 'footer-menu' )); ?>
		</nav>
		<p>&copy; <?php echo date("Y") ?> <a href="<?php bloginfo('url'); ?>/" title="<?php bloginfo('description'); ?>"><?php bloginfo('name'); ?></a>. All Rights Reserved.</p>
	</div><!--close .container-->
</footer>

<?php wp_footer(); ?>
<script src="<?php bloginfo('template_url'); ?>/js/script.js"></script>
</body>
</html>