<?php
/**
 * Template for entry footer
 *
 * To be used inside of WordPress The Loop
 *
 * @package Merak
 */

$the_post_id   = get_the_ID();
$article_terms = wp_get_post_terms( $the_post_id, array( 'category', 'post_tag' ) );

if ( empty( $article_terms ) || ! is_array( $article_terms ) ) {
	return;
}

?>

<div class="entry-footer">
	<?php
	foreach ( $article_terms as $key => $article_term ) {
		?>
			<button class="btn-category">
				<a href="<?php echo esc_url( get_the_excerpt( $article_term ) ); ?>" class="entry-footer-link">
				<?php echo esc_html( $article_term->name ); ?>
				</a>
			</button>
			<?php
	}
	?>
</div>
