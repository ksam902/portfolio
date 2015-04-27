<?php
/*
Template Name: Home Page
*/

$smarty = wp_smarty();
$id = get_the_ID();

$content = array(
	'page' => fetch_page('Home'),
);
$samples = new WP_Query(array( 'post_type' => 'sample', 'posts_per_page' => '-1'));
$posts = array(
    'samples' => array(),
);
foreach ($samples->posts as $p) {
    $post = fetch($p);
    $posts['samples'][] = $post;
}
// pre($posts);
$smarty->assign('posts', $posts);
$smarty->assign('content', $content);

get_header();
$smarty->display('home/content.tpl');
$smarty->display('home/samples.tpl');
get_footer();