<?php
/**
 * Template Name: Home
 * Description: A Page Template with a darker design.
 *
 * @package  WordPress
 * @subpackage  Timber
 * @since    Timber 0.1
 */

$context = Timber::context();
$context['post'] = new Timber\Post();
Timber::render( 'home.twig', $context );