<?php

function load_js() {
	//管理画面を除外
	if ( !is_admin() ){

		wp_enqueue_script( 'script-name', get_template_directory_uri() . '/javascript/nav.js', array(), '1.0.0', true );

	}
}
add_action( 'init', 'load_js' );
// ブログのアイキャッチ画像を使用可能にする
add_theme_support('post-thumbnails');

?>