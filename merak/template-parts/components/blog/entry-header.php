<?php
/**
 * Template for post entry header
 *
 * @package Merak
 */

$the_post_id    = get_the_ID();
$hide_title     = get_post_meta( $the_post_id, '_hide_page_title', true );
$headeing_class = ! empty( $hide_title ) && 'yes' === $hide_title ? 'hide' : '';

$has_post_thumbnail = get_the_post_thumbnail( $the_post_id );
?>
<header class="entry-header">
	<?php
		// Featured image.
	if ( $has_post_thumbnail ) {
		?>
		<div class="articles-category-foto">
			<a href="<?php echo esc_url( get_permalink() ); ?>">
				<?php
				the_post_custom__thumbnail(
					$the_post_id,
					'featured-thumbnail',
					array(
						'sizes' => '(max-width: 350px) 350px, 206px',
						'class' => 'attachment-featured-large size-featured-image',
					)
				);
				?>
			</a>
		</div>
		<?php
	}

		// Title.
	if ( is_single() || is_page() ) {
		printf(
			'<h1 class="page-title text-dark %1$s">%2$s</h1>',
			esc_attr( $heading_class ),
			wp_kses_post( get_the_title() )
		);
	} else {
		printf(
			'<h4 class="articles-category-text"><a class="link-hover" href="%1$s">%2$s</a></h4>',
			esc_url( get_the_permalink() ),
			wp_kses_post( get_the_title() )
		);
	}

	?>
</header>
