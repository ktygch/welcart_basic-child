<?php

remove_filter('the_content', 'wpautop');
remove_filter('the_excerpt', 'wpautop');

add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
	wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}

//アイキャッチ画像
add_theme_support('post-thumbnails');

//パンくずリスト
function my_filter_breadcrumbs($bcnObj) {
    $trail = array();
    if ( count($bcnObj->trail) > 0 ) {
        for ( $i = 0; $i < count($bcnObj->trail); $i++ ) {
            if ( '商品' != $bcnObj->trail[$i]->get_title() && '商品ジャンル' != $bcnObj->trail[$i]->get_title() ) {
                $trail[] = $bcnObj->trail[$i];
            }
        }
    }
    $bcnObj->trail = $trail;
    return $bcnObj;
}
add_action('bcn_after_fill', 'my_filter_breadcrumbs');

//スマートフォンを判別
function is_mobile(){
    $useragents = array(
        'iPhone', // iPhone
        'iPod', // iPod touch
        'Android.*Mobile', // 1.5+ Android *** Only mobile
        'Windows.*Phone', // *** Windows Phone
        'dream', // Pre 1.5 Android
        'CUPCAKE', // 1.5+ Android
        'blackberry9500', // Storm
        'blackberry9530', // Storm
        'blackberry9520', // Storm v2
        'blackberry9550', // Storm v2
        'blackberry9800', // Torch
        'webOS', // Palm Pre Experimental
        'incognito', // Other iPhone browser
        'webmate' // Other iPhone browser
 
    );
    $pattern = '/'.implode('|', $useragents).'/i';
    return preg_match($pattern, $_SERVER['HTTP_USER_AGENT']);
}

//請求書 キャンペーン値引き 非表示
/*キャンペーン中はコメントアウト
add_filter( 'usces_filter_disnount_label', 'my_usces_filter_disnount_label' );
function my_usces_filter_point_label() {
    return null;
}
add_filter( 'usces_filter_disnount_vlue', 'my_usces_filter_disnount_vlue' );
function my_usces_filter_point_vlue() {
    return null;
}*/