<?php
/*
Template Name: Contact
 */

get_header(); ?>
<!--Page Title-->
<section class="page-title" style="background-image:url(<?php the_field('image'); ?>);">
	<div class="auto-container">
		<h1><?php the_title();?></h1>
		<div class="bread-crumb-outer">
			<ul class="bread-crumb clearfix">
				<?php echo do_shortcode('[breadcrumb]'); ?>
			</ul>
		</div>
	</div>
</section>


<!--Contact Section-->
<section class="contact-section">
	<div class="auto-container">


		<div class="row clearfix">

			<!--Form Container-->
			<div class="form-column col-md-8 col-sm-12 col-xs-12">

				<h2><?php the_field('title'); ?></h2>

				<!--Contact Form-->
				<div class="default-form contact-form">
				<?php the_field('form_shortcode');?>
				</div><!--End Contact Form-->

			</div>

			<!--Info Column-->
			<div class="info-column col-md-4 col-sm-12 col-xs-12">
				<h2><?php the_field('title_rs'); ?></h2>
				<div class="text"><?php the_field('description_rs'); ?></div>

				<ul class="contact-info">
					<a href="<?php the_field('address'); ?>"><li><div class="icon-box"><span class="fa fa-building-o"></span></div><?php the_field('address'); ?></li></a>
					<a href="<?php the_field('phone_number'); ?>"><li><div class="icon-box"><span class="fa fa-phone"></span></div><?php the_field('phone_number'); ?></li></a>
					<a href="<?php the_field('emailemail'); ?>"><li><div class="icon-box"><span class="fa fa-envelope-o"></span></div><?php the_field('email'); ?></li></a>
				</ul>

			</div>

		</div>




	</div>
</section>

<section class="map-area">
	<!--Map Box-->
		<div class="map-box">
			<div class="map-outer">

				<!--Map Canvas-->
				<div class="map-canvas">
				<?php
				$location = get_field('map');

				if( !empty($location) ):
				?>
				<div class="acf-map">
					<div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>"></div>
				</div>
				<?php endif; ?>
				</div>

			</div>
		</div>
</section>



<style type="text/css">

.acf-map {
	width: 100%;
	height: 430px;
	margin:  0;
}

/* fixes potential theme css conflict */
.acf-map img {
   max-width: inherit !important;
}

</style>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBfrcMGhm7A7J3K4oXEgXU6xxX8NLpZzWg "></script>

<script type="text/javascript">
(function($) {

/*
*  new_map
*
*  This function will render a Google Map onto the selected jQuery element
*
*  @type	function
*  @date	8/11/2013
*  @since	4.3.0
*
*  @param	$el (jQuery element)
*  @return	n/a
*/

function new_map( $el ) {

	// var
	var $markers = $el.find('.marker');


	// vars
	var args = {
		zoom		: 16,
		center		: new google.maps.LatLng(0, 0),
		mapTypeId	: google.maps.MapTypeId.ROADMAP
	};


	// create map
	var map = new google.maps.Map( $el[0], args);


	// add a markers reference
	map.markers = [];


	// add markers
	$markers.each(function(){

    	add_marker( $(this), map );

	});


	// center map
	center_map( map );


	// return
	return map;

}

/*
*  add_marker
*
*  This function will add a marker to the selected Google Map
*
*  @type	function
*  @date	8/11/2013
*  @since	4.3.0
*
*  @param	$marker (jQuery element)
*  @param	map (Google Map object)
*  @return	n/a
*/

function add_marker( $marker, map ) {

	// var
	var latlng = new google.maps.LatLng( $marker.attr('data-lat'), $marker.attr('data-lng') );

	// create marker
	var marker = new google.maps.Marker({
		position	: latlng,
		map			: map
	});

	// add to array
	map.markers.push( marker );

	// if marker contains HTML, add it to an infoWindow
	if( $marker.html() )
	{
		// create info window
		var infowindow = new google.maps.InfoWindow({
			content		: $marker.html()
		});

		// show info window when marker is clicked
		google.maps.event.addListener(marker, 'click', function() {

			infowindow.open( map, marker );

		});
	}

}

/*
*  center_map
*
*  This function will center the map, showing all markers attached to this map
*
*  @type	function
*  @date	8/11/2013
*  @since	4.3.0
*
*  @param	map (Google Map object)
*  @return	n/a
*/

function center_map( map ) {

	// vars
	var bounds = new google.maps.LatLngBounds();

	// loop through all markers and create bounds
	$.each( map.markers, function( i, marker ){

		var latlng = new google.maps.LatLng( marker.position.lat(), marker.position.lng() );

		bounds.extend( latlng );

	});

	// only 1 marker?
	if( map.markers.length == 1 )
	{
		// set center of map
	    map.setCenter( bounds.getCenter() );
	    map.setZoom( 16 );
	}
	else
	{
		// fit to bounds
		map.fitBounds( bounds );
	}

}

/*
*  document ready
*
*  This function will render each map when the document is ready (page has loaded)
*
*  @type	function
*  @date	8/11/2013
*  @since	5.0.0
*
*  @param	n/a
*  @return	n/a
*/
// global var
var map = null;

$(document).ready(function(){

	$('.acf-map').each(function(){

		// create map
		map = new_map( $(this) );

	});

});

})(jQuery);
</script>


<?php
get_footer();
