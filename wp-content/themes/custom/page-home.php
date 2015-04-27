<?php
/*
Template Name: Home Page
*/

$smarty = wp_smarty();
$id = get_the_ID();
$samples = new WP_Query(array( 'post_type' => 'sample', 'posts_per_page' => '-1'));
$blog_posts = new WP_Query(array( 'post_type' => 'post', 'posts_per_page' => '-1'));
$content = array(
	'page' => fetch_page('Home'),
);

$posts = array(
    'samples' => array(),
    'blog_posts' => array(),
);
foreach ($samples->posts as $p) {
    $post = fetch($p);
    $posts['samples'][] = $post;
}
foreach ($blog_posts->posts as $p) {
    $post = fetch($p);
    $posts['blog_posts'][] = $post;
}
// pre($posts);
$smarty->assign('posts', $posts);
$smarty->assign('content', $content);

get_header();
$smarty->display('home/content.tpl');
$smarty->display('home/samples.tpl');
$smarty->display('home/blog-posts.tpl');
get_footer();