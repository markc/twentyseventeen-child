<?php
/*This file is part of markc-blog, twentyseventeen child theme.

All functions of this file will be loaded before of parent theme functions.
Learn more at https://codex.wordpress.org/Child_Themes.

Note: this function loads the parent stylesheet before, then child theme stylesheet
(leave it in place unless you know what you are doing.)
*/

function markc_blog_enqueue_child_styles() {
$parent_style = 'parent-style'; 
	wp_enqueue_style($parent_style, get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 
		'child-style', 
		get_stylesheet_directory_uri() . '/style.css',
		array( $parent_style ),
		wp_get_theme()->get('Version') );
	}
add_action( 'wp_enqueue_scripts', 'markc_blog_enqueue_child_styles' );

/*Write here your own functions */

// 20160913 (C) Mark Constable <markc@renta.net> (AGPL-3.0)
// Child Theme Functions For RentaNet Installations

remove_action('admin_color_scheme_picker', 'admin_color_scheme_picker');
add_action('admin_head', function() { echo '<style>.form-table th, .form-table td { padding: 0.25em; }</style>'; });
