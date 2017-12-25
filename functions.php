<?php
// functions.php 20160913 - 20171225
// Copyright (C) 1995-2017 Mark Constable <markc@renta.net> (AGPL-3.0)
// Twenty Seventeen Child Theme Functions For RentaNet Installations

remove_action('admin_color_scheme_picker', 'admin_color_scheme_picker');

add_action('admin_head', function() {
    echo '<style>.form-table th, .form-table td { padding: 0.25em; }</style>';
});

add_action('wp_enqueue_scripts', function() {
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
});
