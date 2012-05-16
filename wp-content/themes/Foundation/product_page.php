<?php
/*
 * Template Name: Product Page
 * Template Author: Nathan Feaver
 *
 * This template built for the Boulder Web Design Meetup on May 16, 2012
 *
 * License: Creative Commons Attribution License: You are free to use and modify
 * this template as long as attribution is given to the original author.
 * License-URI: http://www.creative-commons.org/licenses/
 *
 */
?>

<?php get_header(); ?>

<?php get_template_part( 'product', 'feature' ); ?>

<?php get_template_part( 'product', 'details' ); ?>

<?php get_template_part( 'related', 'products' ); ?>

<?php get_template_part( 'related', 'navigation' ); ?>		
