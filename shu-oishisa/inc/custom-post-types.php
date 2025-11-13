<?php
// ==========================================================================
// カスタム投稿：商品（タクソノミーあり）
// ==========================================================================
function create_post_type_products() {
	register_post_type(
		'products',
		array(
			'labels' => array(
				'name' => '商品',
				'singular_name' => '商品',
			),
			'public' => true,
			'has_archive' => true,
			'rewrite' => array('slug' => 'products'),
			'supports' => array('title', 'editor', 'thumbnail'),
			'show_in_rest' => true,
			'menu_icon' => 'dashicons-edit',
			'menu_position' => 5,
			'taxonomies' => array('products_category'),
		)
	);

	register_taxonomy(
		'products_category',
		'products',
		array(
			'label' => '商品カテゴリー',
			'hierarchical' => true,
			'show_ui' => true,
			'show_admin_column' => true,
			'rewrite' => array('slug' => 'products-category'),
			'show_in_rest' => true,
		)
	);
}
add_action('init', 'create_post_type_products');