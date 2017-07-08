<?php
// fnctions.php 20160913 - 20170705
// Copyright (C) 195-2017 Mark Constable <markc@renta.net> (AGPL-3.0)
// TwentySeventeen-Child Theme Functions For RentaNet Installations

function markc_blog_enqueue_child_styles() {
    $parent_style = 'parent-style';
    wp_enqueue_style($parent_style, get_template_directory_uri() . '/style.css' );
}
add_action( 'wp_enqueue_scripts', 'markc_blog_enqueue_child_styles' );

remove_action('admin_color_scheme_picker', 'admin_color_scheme_picker');
add_action('admin_head', function() { echo '<style>.form-table th, .form-table td { padding: 0.25em; }</style>'; });
