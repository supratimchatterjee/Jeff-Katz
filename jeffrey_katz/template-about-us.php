<?php
/*
Template Name: About Us
 */

get_header(); ?>
<!--Page Title-->
<section class="page-title" style="background-image:url(<?php the_field('image'); ?>">
	<div class="auto-container">
		<h1><?php the_title(); ?></h1>
		<div class="bread-crumb-outer">
			<ul class="bread-crumb clearfix">
			<?php echo do_shortcode('[breadcrumb]'); ?>
			</ul>
		</div>
	</div>
</section>


<!--About Us--->
<section class="about-us">
	<div class="auto-container">
		<div class="row clearfix">
			<!--Content Column-->
			<div class="content-column pull-right col-md-7 col-sm-12 col-xs-12">
				<div class="inner">
					<!--Title-->
					<div class="sec-title">
						<h2><?php the_field('title'); ?></h2>
						<div class="desc-text"><?php the_field('childhood'); ?></div>
					</div>

					<!--Service Block Two-->
					<div class="service-block-two">
						<div class="inner-box">
							<div class="icon-box"><span class="flaticon-pen-1"></span></div>
							<div class="text">
							<?php the_field('education'); ?>
</div>
						</div>
					</div>
					<!--Service Block Two-->
					<div class="service-block-two">
						<div class="inner-box">
							<div class="icon-box"><span class="flaticon-briefcase-3"></span></div>
							<div class="text">
						<?php the_field('experiance'); ?>
						</div>
						</div>
					</div>
					<!--Service Block Two-->
										</div>
			</div>

			<!--Image Column-->
			<div class="image-column pull-left col-md-5 col-sm-12 col-xs-12">
				<div class="inner">
					<figure class="image wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms"><img src="<?php the_field('image_about'); ?>" alt=""></figure>
				</div>
			</div>

		</div>
	</div>
</section>

<!--Get Quote Section-->
<section class="get-quote-section" style="background-image:url(<?php echo get_template_directory_uri();?>/images/background/image-5.jpg);">
	<div class="auto-container">
		<div class="get-quote-bg">

			<div class="row">
				<div class="col-md-6 col-sm-12">
					<div class="small-title"><h3><?php the_field('title_frm'); ?></h3></div>
					<div class="text">
						<?php the_field('content'); ?>
					</div>

				</div>
				<div class="col-md-6 col-sm-12">
					<!--Quote Form-->
					<div class="default-form quote-form wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
					<?php the_field('form_shortcode');?>
					</div><!--End Quote Form-->
				</div>
			</div>
		</div>

	</div>
</section>
<?php
get_footer();
