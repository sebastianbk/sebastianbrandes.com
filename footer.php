		<!-- footer -->
		<footer class="container" role="contentinfo">
			<div class="row">
			<!-- copyright -->
			<div class="col-lg-12">
				<?php
					wp_nav_menu(
					array(
						'theme_location'  => 'header-menu',
						'echo'            => true,
						'fallback_cb'     => 'wp_page_menu',
						'before'          => '',
						'after'           => '',
						'link_before'     => '',
						'link_after'      => '',
						'items_wrap'      => '<ul class="list-unstyled"><li class="pull-right"><a href="#top">Back to top</a></li>%3$s</ul>',
						'depth'           => 0,
						'walker'          => ''
						)
					);
					?>
				<p>Copyright &copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. <?php _e('Powered by', 'sebastianbrandes'); ?>
				<a href="//wordpress.org" title="WordPress">WordPress</a> and a modified edition of <a href="//html5blank.com" title="HTML5 Blank">HTML5 Blank</a>.</p>
				<p>Based on <a href="http://getbootstrap.com" rel="nofollow">Bootstrap</a>. Icons from <a href="http://fortawesome.github.io/Font-Awesome/" rel="nofollow">Font Awesome</a>. Web fonts from <a href="http://www.google.com/webfonts" rel="nofollow">Google</a>.</p>
			</div>
			<!-- /copyright -->
			</div>
		</footer>
		<!-- /footer -->

		<?php wp_footer(); ?>
		
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	</body>
</html>
