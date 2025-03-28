<?php
 
/*----------------------------------*/
/* Custom Posts Options				*/
/*----------------------------------*/

add_action('admin_menu', 'lectura_lite_options_box');

function lectura_lite_options_box() {
	
	add_meta_box('lectura_lite_post_template', __('Post Options','lectura-lite'), 'lectura_lite_post_options', 'post', 'side', 'high');

}

add_action('save_post', 'lectura_lite_custom_add_save');

function lectura_lite_custom_add_save($postID){
	
	global $post;

	// Do nothing
	if( ! is_object( $post ) ) return;

	// Verify some credentials
	if ( ! isset( $_POST[ 'lectura_lite_meta_box_nonce' ] ) || ! wp_verify_nonce( $_POST[ 'lectura_lite_meta_box_nonce' ], 'lectura_lite_meta_box' ) )
		return;

	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE )
		return;

	if ( ! current_user_can( 'edit_post', $post->ID ) )
		return;

	if ( isset($_POST['academia_post_featured']) ) {
		$featured_value = 'on';
	} else {
		$featured_value = '';
	}
	
	lectura_lite_update_custom_meta($postID, $featured_value, 'academia_post_featured');

}

function lectura_lite_update_custom_meta($postID, $newvalue, $field_name) {
	$postID = absint($postID);
	// To create new meta
	if(!get_post_meta($postID, $field_name)){
		add_post_meta($postID, $field_name, $newvalue);
	}else{
		// or to update existing meta
		update_post_meta($postID, $field_name, $newvalue);
	}
	
}

// Regular Posts Options
function lectura_lite_post_options() {
	global $post;
	wp_nonce_field( 'lectura_lite_meta_box', 'lectura_lite_meta_box_nonce' );
	?>
	<fieldset>
		<div>
			<p>
				<input class="checkbox" type="checkbox" id="academia_post_featured" name="academia_post_featured" value="on" <?php checked( get_post_meta($post->ID, 'academia_post_featured', true), 'on' ); ?> />
 				<label for="academia_post_featured"><?php esc_html_e('Feature this Post in the Homepage Slideshow','lectura-lite'); ?></label><br />
			</p>
  		</div>
	</fieldset>
	<?php
}