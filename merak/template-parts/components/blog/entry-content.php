<?php
/**
 * Template for entry content.
 *
 * To be used inside WordPress.
 *
 * @package Merak
 */

?>

<div class="entry-content">
	<?php
	if ( is_single() ) {
		the_content(
			sprintf(
				wp_kses(
					__( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'merak' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				the_title( '<span class="screen-reader-text">"', '"</span>', false )
			)
		);

		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'merak' ),
				'after'  => '</div>',
			)
		);

	} else {
		merak_the_excerpt( 200 );
		printf( '<br>' );
		echo merak_excerpt_more();
	}
	?>
</div>
