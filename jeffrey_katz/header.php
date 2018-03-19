<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Jeffrey_Katz
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>

	<link href="https://fonts.googleapis.com/css?family=Maven+Pro:400,500,700,900" rel="stylesheet">
	<style>
	.smallers{
	    font-size:14px;
	    padding-left:10px;
	}
	</style>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div class="page-wrapper body_wrapper">

	    <!-- Preloader
	    <div class="preloader"></div>-->

	    <!-- Main Header / Header Style One-->
	    <header class="main-header header-style-one">
        <!-- Header Lower -->
	        <div class="header-lower">
	            <div class="main-box">
	                <div class="auto-container">
	                    <div class="outer-container clearfix">
	                        <!--Logo Box-->
	                        <div class="logo-box">
	                            <div class="logo"><a href="<?php bloginfo('url') ?>" title="Jeffrey Katz Law"><h1 class="logo-text">Jeffrey Katz Law |<span class="smallers">llc</span></h1><p>Local Philadelphia Lawyer</p></a></div>
	                        </div>

	                        <!--Nav Outer-->
	                        <div class="nav-outer clearfix">
	                            <!-- Main Menu -->
	                            <nav class="main-menu">
	                                <div class="navbar-header">
	                                    <!-- Toggle Button -->
	                                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
	                                    <span class="icon-bar"></span>
	                                    <span class="icon-bar"></span>
	                                    <span class="icon-bar"></span>
	                                    </button>
	                                </div>
	                                <div class="navbar-collapse collapse clearfix">
										<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu', 'menu_class' => 'navigation clearfix', 'container' => false ) ); ?>
	                                </div>
	                            </nav><!-- Main Menu End-->
	                        </div><!--Nav Outer End-->
	                    </div>
	                </div>
	            </div>
	        </div>

	        <!--Sticky Header-->
	        <div class="sticky-header">
	            <div class="auto-container clearfix">
	                <!--Logo-->
	                <div class="logo pull-left">
	                    <a href="<?php bloginfo('url') ?>" title="Jeffrey Katz Law"><h2 class="logo-text">Jeffrey Katz Law</span></h2></a>
	                </div>

	                <!--Right Col-->
	                <div class="right-col pull-right">
	                    <!-- Main Menu -->
	                    <nav class="main-menu">
	                        <div class="navbar-header">
	                            <!-- Toggle Button -->
	                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
	                            <span class="icon-bar"></span>
	                            <span class="icon-bar"></span>
	                            <span class="icon-bar"></span>
	                            </button>
	                        </div>

	                        <div class="navbar-collapse collapse clearfix">
	                           	<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu', 'menu_class' => 'navigation clearfix', 'container' => false ) ); ?>
	                        </div>
	                    </nav><!-- Main Menu End-->
	                </div>

	            </div>
	        </div><!--End Sticky Header-->

	    </header>
