<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package edanamar
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <meta charset="utf-8">
    <meta content="" name="description">
    <meta content="" name="keywords">


    <!--Font Cdn Links-->

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <?php wp_head(); ?>
</head>


<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<!--
	</div> -->
<!-- ======= Header ======= -->
<?php
$header_logo = get_field('header_logo', 'option');
$header_logo_anchortag = get_field('header_logo_anchortag', 'option');


$header_about_menu = get_field('header_about_menu', 'option');
$header_about_menu_anchortag = get_field('header_about_menu_anchortag', 'option');
$header_recent_menu = get_field('header_recent_menu', 'option');
$header_recent_menu_anchortag = get_field('header_recent_menu_anchortag', 'option');


$header_media_menu = get_field('header_media_menu', 'option');
$header_media_menu_anchortag = get_field('header_media_menu_anchortag', 'option');

$header_homevaluation_menu = get_field('header_homevaluation_menu', 'option');
$header_homevaluation_menu_anchortag = get_field('header_homevaluation_menu_anchortag', 'option');

$header_search_menu = get_field('header_search_menu', 'option');
$header_search_menu_anchortag = get_field('header_search_menu_anchortag', 'option');

$header_contact_menu = get_field('header_contact_menu', 'option');
$header_contact_menu_anchortag = get_field('header_contact_menu_anchortag', 'option');


?>
<?//php if (is_home() || is_front_page()) {
    //echo '<div class="loader_wrapper">
		//<div id="overlayer"></div>
		//<span class="loader">
			//<span class="loader-inner"></span>
		//</span>
	//</div>';
//}
//else {

//}
?>
<header id="header" class="fixed-top">
    <div class="container">
        <nav class="navbar navbar-expand-lg menuCust justify-content-between">
            <a class="logoBox" href="<?php echo $header_logo_anchortag; ?>"><img
                        src="<?php echo $header_logo['url']; ?>" alt="<?php echo $header_logo['alt']; ?>"/></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"><i class="fa fa-bars" aria-hidden="true"></i></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <?php wp_nav_menu(array('menu' => 'Header_menu', 'container' => '', 'items_wrap' => '%3$s', 'add_li_class' => 'nav-item', 'add_a_class' => 'nav-link',)); ?>
                </ul>
            </div>
            <div id="myOverlay" class="overlay">
                <span class="closebtn" onclick="closeSearch()" title="Close Overlay">×</span>
                <div class="overlay-content">
                    <form action="/" method="get">
                        <input type="text" placeholder="Search.." name="search">
                        <input type="text" name="s" id="search" value="<?php the_search_query(); ?>"/>
                        <button type="submit"><i class="fa fa-search srhButton"></i></button>
                    </form>
                    <!-- <form action="/" method="get">
						    <label for="search">Search in <?php echo home_url('/'); ?></label>
						    <input type="text" name="s" id="search" value="<?php the_search_query(); ?>" />
						    <input type="image" alt="Search" src="<?php bloginfo('template_url'); ?>/images/search.png" />
						</form> -->
                </div>
            </div>
        </nav>
    </div>
</header><!-- End Header -->