<?php

function test_vendd_menu_bar( $menu ) {
	$tot_points = edd_points_get_user_points( get_current_user_id() );
	$menu_items = '<li class="geek-cred-nav-balance-wrap"><a href="/account/"><img class="geek-cred-coin-small" src="' . get_stylesheet_directory_uri() . '/images/coin.png" />&nbsp;' . $tot_points . ' Geek Creds</a></li>';
	return $menu_items . $menu;
}
add_filter('wp_nav_menu_items', 'test_vendd_menu_bar');
