<?php
/*
Template Name: Home Page
*/

$smarty = wp_smarty();
$id = get_the_ID();

$content = array(
	'page' => fetch_page('Home'),
);

$smarty->assign('content', $content);

get_header();
$smarty->display('home/content.tpl');
get_footer();