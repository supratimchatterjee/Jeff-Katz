<?php
/*
Template Name: Home
 */

get_header(); ?>


    <!--Main Slider-->
    <section class="main-slider" data-start-height="680" data-slide-overlay="yes">

        <div class="tp-banner-container">
            <div class="tp-banner">
				<?php if(have_rows('banner_section')):?>
	                <ul>
						<?php while(have_rows('banner_section')):the_row();?>
							<li data-transition="fade" data-slotamount="1" data-masterspeed="1000" data-thumb="images/main-slider/1.jpg"  data-saveperformance="off"  data-title="Awesome Title Here">
	                    <img src="<?php the_sub_field('image');?>"  alt=""  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
	                    <div class="tp-caption sfl sfb tp-resizeme"
		                    data-x="left" data-hoffset="15"
		                    data-y="center" data-voffset="-70"
		                    data-speed="500"
		                    data-start="0"
		                    data-easing="easeOutExpo"
		                    data-splitin="none"
		                    data-splitout="none"
		                    data-elementdelay="0.01"
		                    data-endelementdelay="0.3"
		                    data-endspeed="1200"
		                    data-endeasing="Power4.easeIn"><?php the_sub_field('description'); ?></div>
	                    <div class="tp-caption sfl sfb tp-resizeme"
		                    data-x="left" data-hoffset="15"
		                    data-y="center" data-voffset="25"
		                    data-speed="1500"
		                    data-start="1000"
		                    data-easing="easeOutExpo"
		                    data-splitin="none"
		                    data-splitout="none"
		                    data-elementdelay="0.01"
		                    data-endelementdelay="0.3"
		                    data-endspeed="1200"
		                    data-endeasing="Power4.easeIn"><div class="text text-left"><?php the_sub_field('sub_title'); ?></div></div>


		                    <div class="tp-caption sfl sfb tp-resizeme"
		                    data-x="left" data-hoffset="15"
		                    data-y="center" data-voffset="110"
		                    data-speed="1500"
		                    data-start="1500"
		                    data-easing="easeOutExpo"
		                    data-splitin="none"
		                    data-splitout="none"
		                    data-elementdelay="0.01"
		                    data-endelementdelay="0.3"
		                    data-endspeed="1200"
		                    data-endeasing="Power4.easeIn"><a href="<?php the_sub_field('contact_button_link');?>" class="theme-btn btn-style-one"><?php the_sub_field('contact_button_label');?></a> &ensp;&ensp; <a href="<?php the_sub_field('service_button_link'); ?>" class="theme-btn btn-style-two"><?php the_sub_field('service_button_label'); ?></a></div>

		                </li>
						<?php endwhile;?>
	                </ul>
				<?php endif;?>
            </div>
        </div>
    </section>

    <section class="call-to-action">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="column col-md-8 col-sm-12 col-xs-12">
                    <div class="text"><?php the_field('call_out_text'); ?></div>
                </div>
                <div class="column text-right col-md-4 col-sm-12 col-xs-12">
                    <a href="<?php the_field('telephone_number'); ?>" class="theme-btn btn-style-two"><?php the_field('button_label'); ?></a>
                </div>
            </div>
        </div>
    </section>

    <a name="services"></a>
    <section class="services-style-one">
        <div class="auto-container">
            <!--Title-->
            <div class="sec-title centered">
                <h2><?php the_field('title'); ?></h2>

            </div>

            <div class="row clearfix">
				<?php if(have_rows('offers')):?>
				<?php while(have_rows('offers')):the_row(); ?>
                <!--Service Block-->
                <div class="column col-lg-4 col-md-6 col-sm-6 col-xs-12">
                    <div class="service-block2">
                        <div class="inner-box">
                            <div class="image-box">
                                <img src="<?php the_sub_field('image'); ?>" alt="" />
                                <div class="caption"><?php the_sub_field('image_title'); ?></div>
                                <div class="overlay-box">
                                    <?php the_sub_field('description'); ?>
                                    <a class="read-more" href="<?php the_sub_field('read_more_link'); ?>">READ MORE <span class="fa fa-angle-double-right"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
			<?php endwhile;?>
		<?php endif;?>
            </div>
        </div>
    </section>

    <!--Default Section-->
    <section class="default-section">
    	<div class="auto-container">
            <!--Title-->
            <div class="sec-title centered">
                <h2><?php the_field('title_hlp'); ?></h2>
            </div>
        	<div class="services-outer wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
            	<div class="clearfix">
				<?php if(have_rows('types_of_helping')):?>
					<?php while(have_rows('types_of_helping')):the_row(); ?>
                	<!--Service Block-->
                    <div class="default-service-block col-md-4 col-sm-6 col-xs-12">
                    	<div class="inner-box">
                             <div class="caption"><?php the_sub_field('caption'); ?></div>
                        	<div class="icon-box"><img src="<?php the_sub_field('image'); ?>" height="50" width="50"></div>
                            <?php the_sub_field('description'); ?>
                            <a class="read-more" href="<?php the_sub_field('read_more_link'); ?>">Read More <span class="fa fa-angle-right"></span></a>
                        </div>
                    </div>
					<?php endwhile;?>
				<?php endif;?>
                </div>
            </div>
        </div>
    </section>
    <section class="get-quote-section" style="background-image:url(<?php echo get_template_directory_uri(); ?>/images/background/image-5.jpg);">
    	<div class="auto-container">
            <div class="get-quote-bg">

                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="small-title"><h3><?php the_field('title_frm'); ?></h3></div>
                        <div class="text">
                          <?php the_field('description_frm'); ?>
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
