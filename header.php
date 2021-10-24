<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Indusrty
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php 


        if(is_page() && get_post_meta( $post->ID, 'industry_rrfonline_page_meta', true)) {
            $page_meta = get_post_meta( $post->ID, 'industry_rrfonline_page_meta', true);
        } else {
            $page_meta = array();
        }   


        if(array_key_exists('header_style', $page_meta)) {
            $header_style = $page_meta['header_style'];
        } else {
            $header_style = '1';
        }   

        wp_head(); 
    ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">

    <?php get_template_part('template-parts/headers/header-'.$header_style.''); ?>


    <div id="content" class="site-content">
 