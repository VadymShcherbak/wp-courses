<?php
/**
 * Register Meta Boxes
 *
 * @package Merak
 */

namespace MERAK_THEME\inc;

use MERAK_THEME\Inc\Traits\Singleton;

/**
 * Merak theme
 */
class Meta_Boxes {
	use Singleton;

	/**
	 * Construct
	 */
	protected function __construct() {
		// load class.
		$this->setup_hooks();
	}

	/**
	 * Setup hooks
	 */
	protected function setup_hooks() {
		// actions.
		add_action( 'add_meta_boxes', array( $this, 'add_custom_meta_box' ) );
		add_action( 'save_post', array( $this, 'save_post_meta_data' ) );
	}

	public function add_custom_meta_box() {
		$screens = array( 'post' );

		foreach ( $screens as $screen ) {
			add_meta_box(
				'hide-page-title',                 // Unique ID
				__( 'Hide page title', 'merak' ),      // Box title
				array( $this, 'custom_meta_box_html' ),  // Content callback, must be of type callable
				$screen,                            // Post type
				'side'
			);
		}
	}

	public function custom_meta_box_html( $post ) {

		$value = get_post_meta( $post->ID, '_hide_page_title', true );

		/**
		 * Use nonce for verification
		 */
		wp_nonce_field( plugin_basename( __FILE__ ), 'hide_title_meta_box_nonce_name' );

		?>
		<label for="merak-field">
			<?php esc_html_e( 'Hide the page title', 'merak' ); ?>
		</label>
		<select name="merak_hide_title_field" id="merak-field" class="postbox">
			<option value=""><?php esc_html_e( 'Select', 'merak' ); ?></option>
			<option value="yes"<?php selected( $value, 'yes' ); ?>>
				<?php esc_html_e( 'Yes', 'merak' ); ?>
			</option>
			<option value="no"<?php selected( $value, 'no' ); ?>>
				<?php esc_html_e( 'No', 'merak' ); ?>
			</option>
		</select>
		<?php
	}

	public function save_post_meta_data( $post_id ) {

		/**
		 * When the post id saved or updated we get $_POST available
		 * CHeck if the current user is authorized
		 */

		if ( ! current_user_can( 'edit_post', $post_id ) ) {
			return;
		}

		/**
		 * Check if the nonce value we received is the same we created.
		 */
		if ( ! isset( $_POST['hide_title_meta_box_nonce_name'] ) ||
			! wp_verify_nonce( $_POST['hide_title_meta_box_nonce_name'], plugin_basename( __FILE__ ) ) ) {
				return;
		}

		if ( array_key_exists( 'merak_hide_title_field', $_POST ) ) {
			update_post_meta(
				$post_id,
				'_hide_page_title',
				$_POST['merak_hide_title_field']
			);
		}
	}
}
