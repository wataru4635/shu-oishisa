<?php
// ==========================================================================
// コメントの無効化・投稿非表示
// ==========================================================================
function comment_status_none( $open, $post_id ) {
	$post = get_post( $post_id );
	if( $post->post_type == 'post' ) {
			return false;
	}
	if( $post->post_type == 'page' ) {
			return false;
	}
	if( $post->post_type == 'attachment' ) {
			return false;
	}
	return false;
}

add_filter( 'comments_open', 'comment_status_none', 10 , 2 );
function remove_menus() {
	remove_menu_page( 'edit.php' );
	remove_menu_page( 'edit-comments.php' );
}
add_action( 'admin_menu', 'remove_menus', 999 );