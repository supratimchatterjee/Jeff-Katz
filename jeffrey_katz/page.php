<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Jeffrey_Katz
 */

get_header(); ?>
	<?php while ( have_posts() ) : the_post();?>
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
		<div class="auto-container default-page">
			<?php the_content(); ?>
		</div>
	<?php endwhile; ?>
<?php get_footer();
