<?php if ( ! defined( 'WPINC' ) ) { die('Direct access prohibited!'); }?>

			</main><!-- #main -->
		</div><!-- #primary -->
	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">

	    <?php if ( has_nav_menu( 'footer' ) ) : ?>
			<nav aria-label="Secondary menu" class="footer-navigation">
				<ul class="footer-navigation-wrapper">
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'footer',
							'items_wrap'     => '%3$s',
							'container'      => false,
							'depth'          => 1,
							'link_before'    => '<span>',
							'link_after'     => '</span>',
							'fallback_cb'    => false,
						)
					);
					?>
				</ul><!-- .footer-navigation-wrapper -->
			</nav><!-- .footer-navigation -->
		<?php endif; ?>

	    <p>
	    	&copy; <?php echo date( 'Y' ) ?> <?php bloginfo('name') ?>.
	    <br>
	    	WP theme by <a href="https://corenominal.org">corenominal</a>.
	    </p>
	
	</footer><!-- #colophon -->

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
