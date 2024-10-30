<?php 

function bnp_options_admin_menu(){
	add_menu_page(
		'Break news plugin options',
		'Break news plugin options',
		'edit_theme_options',
		'bnp_options',
		'bnp_options_page_display'
	);
}

function bnp_options_page_display(){
	$bnp_opts 			= get_option( 'bnp_opts' );
	$bnp_slider_speed 	= $bnp_opts['slider_speed'];
	$bnp_number_post	= $bnp_opts['number_post'];
	$bnp_post_type		= $bnp_opts['post_type'];
	?>
	<div class="card">
		<div class="card-body">
			<h3 class="card-title"><?php _e('Break News Post Settings', 'breaknp'); ?></h3>
				<?php if( isset($_GET['status']) && $_GET['status'] == 1 ){
					echo '<p class="alert alert-success"> Updated sucessfully! </p>';
				} ?>
				<form method="POST" action="admin-post.php" id="bnp_option_form">
					<input type="hidden" name="action" value="bnp_option_page_update">
					<?php wp_nonce_field( 'bnp_option_nonce' ); ?>
					<div class="form-group">
						<label><?php _e('Slider speed', 'breaknp'); ?></label>
						<input type="number" name="bnp_slider_speed" value="<?php echo esc_attr( $bnp_slider_speed );  ?>">
					</div>
					<div class="form-group">
						<label><?php _e('How many posts displays', 'breaknp'); ?></label>
						<input type="number" name="bnp_number_post" value="<?php echo esc_attr($bnp_number_post); ?>">
					</div>
					<div class="form-group">
						<label><?php _e('Post Type to be fetch', 'breaknp'); ?></label>
						<?php
						$args = array(
							'public'	=>	true
						);
						 $posts = get_post_types($args); 
						?>
						<select name="bnp_post_type[]" multiple form="bnp_option_form">
						<?php
						foreach ($posts as $post) {
							$selected = '';
							if(is_array($bnp_post_type)){
							if(in_array($post, $bnp_post_type)){
								$selected = 'selected';
							}
							}
							echo '<option value="'. esc_attr($post) . '" '. esc_attr($selected) .' >'. esc_attr($post) .'</option>';
						}
						?>
						</select>
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-primary"><?php _e('Update', 'breaknp'); ?></button>
					</div>
				</form>
			</h3>
		</div>
	</div>
<?php } 	