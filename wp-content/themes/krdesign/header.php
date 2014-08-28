<?php
    $backimages = miu_get_images(get_the_ID());
    if(empty($backimages)){
        $backimages[] = get_template_directory_uri().'/images/whiteback.png';
    }
    $allimages = '';
    if(!empty($backimages)){
        foreach ($backimages as $backimage) {
            $allimages .=  $backimage.',';
        }
    }
    $allimages = rtrim($allimages,',');

/**
 * The Header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 *  @package WordPress
 *  @subpackage krdesign
 *  @since krdesign
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8) ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

<input type="hidden" id="allimages" value="<?php echo $allimages; ?>" />
<input type="hidden" id="templateuri" value="<?php echo get_template_directory_uri(); ?>" />
<div class="wrapper">
	<header>
		<a id="touch-menu" class="mobile-menu" href="#">Menu</a>
        <nav>
            <?php wp_nav_menu( array( 'theme_location' => 'mainmenu', 'menu_class' => 'menu' ) ); ?>
        </nav>
        <div class="logo">
        	<a href="<?php echo site_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt=""></a>
        </div>
    	
    </header>
    
    <section class="banner">
	