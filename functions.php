<?php

//function child_enqueue_parent_scripts() {
//    wp_enqueue_style('parent', get_template_directory_uri().'/style.css');
//}
// add_action('wp_enqueue_scripts', 'child_enqueue_parent_scripts');

// require_once(get_stylesheet_directory().'/my_included_file.php');

function child_pre_get_document_title() {
    return '记录生活的点点滴滴';
}
add_filter('pre_get_document_title', 'child_pre_get_document_title');

?>
