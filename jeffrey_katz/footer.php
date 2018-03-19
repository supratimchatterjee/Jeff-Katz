<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Jeffrey_Katz
 */

?>
<footer class="main-footer">



	<!--Footer Bottom-->
	<div class="footer-bottom">
		<div class="auto-container">
			<div class="row clearfix">
				<div class="col-md-6 col-sm-6 col-xs-12"><div class="copyright-text">© 2017 All Rights Reserved - Powered by <a href="http://brandrevive.com">Brand Revive</a>
				<?php the_field('footer_info','option'); ?>
				</div></div>
				<div class="col-md-6 col-sm-6 col-xs-12">
					<!--Bottom Nav-->
					<nav class="footer-nav clearfix">
							<?php wp_nav_menu( array( 'theme_location' => 'footer-menu', 'menu_id' => 'footer-menu', 'menu_class' => 'pull-right clearfix', 'container' => false ) ); ?>
					</nav>
				</div>
			</div>
		</div>
	</div>

</footer>

</div>
<!--End pagewrapper-->

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-up"></span></div>

<?php wp_footer(); ?>

</body>
</html>
