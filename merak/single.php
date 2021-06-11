<?php
/**
 * Single post template file
 *
 * @package Merak
 */

get_header();
?>
<section class="articles">
	<div class="container">
		<?php
		if ( have_posts() ) :
			?>
			<div class="row spacing-bottom-65 with-animated">
				<?php
				while ( have_posts() ) :
					the_post();
					?>
					<div class="articles-category">
						<div class="articles-category-foto">
							<?php
							get_template_part( 'template-parts/content' );
							?>
						</div>
					</div>

				<?php endwhile; ?>
			</div>
			<?php

			else :

				get_template_part( 'template-parts/content-none' );

			endif;
			?>
	</div>
</section>
<?php
get_footer();
