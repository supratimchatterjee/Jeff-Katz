<?php
/*
Template Name: Service
 */

get_header(); ?>
<!--Page Title-->
<section class="page-title" style="background-image:url(<?php the_field('image'); ?>);">
	<div class="auto-container">
		<h1><?php the_title(); ?></h1>
		<div class="bread-crumb-outer">
			<ul class="bread-crumb clearfix">
			<?php echo do_shortcode('[breadcrumb]'); ?>
			</ul>
		</div>
	</div>
</section>


<!--Sidebar Page-->
<div class="sidebar-page-container with-left-sidebar">
	<div class="auto-container">
		<div class="row clearfix">
			<!--Content Side-->
			<div class="content-side pull-right col-lg-9 col-md-8 col-sm-12 col-xs-12">
				<!--Service Details-->
				<section class="service-details">
					<figure class="big-image"><img src="images/resource/jdsjdjs.jpg" alt=""></figure>
					<!--Text Content-->
					<div class="content">
						<?php the_field('content'); ?>
					</div>
				</section>
			</div>
			<!--Content Side-->

			<!--Sidebar-->
			<div class="sidebar-side pull-left col-lg-3 col-md-4 col-sm-12 col-xs-12">
				<aside class="sidebar">
					<!-- Services -->
					<div class="sidebar-widget services">
					<?php wp_nav_menu( array( 'theme_location' => 'sidebar-menu', 'menu_id' => 'sidebar-menu', 'menu_class' => 'service-list', 'container' => false ) ); ?>
					</div>

					<!-- Downloads -->
					<div class="sidebar-widget downloads">
						<ul class="download-list">
							<li><a href="<?php the_field('phone_number'); ?>"><span class="fa fa-file-pdf-o"></span>Call now</a></li>
						   <li data-toggle="modal" data-target="#myModal"><a href="#"><span class="fa fa-file-word-o"></span>Contact Form</a></li>
						</ul>
					</div>

					<!--Modal-->
						<div id="myModal" class="modal fade" role="dialog">
							<div class="modal-dialog">
								<!-- Modal content-->
								<div class="modal-content">
									<div class="modal-body">
										<div class="default-form quote-form wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
											<?php the_field('form_shortcode');?>
											<p class="tm-form-text">The use of the internet or this form for communication with the firm or any other individual member of the firm does not establish an attorney-client relationship. Confidential or time sensitive information should not be sent through this form</p>
										</div>
									</div>

								</div>
							</div>
						</div>

					<!--Modal end-->


					<!-- Popular Tags -->
					<section class="service-details">
					<div class="content">
				<?php if(have_rows('content_editor')):?>
					<?php while(have_rows('content_editor')):the_row(); ?>
					 <div class="txt"><h3><?php the_sub_field('title'); ?><span class="theme_color"></span> </h3></div>
					<p>
						<?php the_sub_field('content'); ?>
					</p>
				<?php endwhile;?>
					<?php endif;?>
					</div>
					</section>
				</aside>
			</div>
			<!--Sidebar-->

		</div>
	</div>
</div>

<?php
get_footer();
