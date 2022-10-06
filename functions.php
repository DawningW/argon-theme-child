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

function performance() {
    echo sprintf('在 %.3f 秒内完成 %d 次查询, 使用内存 %.2fMB',
        timer_stop(0, 3),
        get_num_queries(),
        memory_get_peak_usage() / 1024 / 1024
    );
    echo "</br>";
    echo sprintf('本博客已经运行了 %d 天!',
        floor((time() - strtotime("2021-3-28")) / 86400)
    );
}
add_action('argon_footer_html', 'performance');

?>
