<?php
/**
 * WP lesson
 *
 * @package Merak
 */

get_header();
?>
<section class="articles">
	<div class="container">
		<div class="block-title-center with-animated">
			<h6 class="sub-title">Clothes that you like</h6>
			<h2 class="title">Our articles</h2>
			<p>The clothes that you like. New collections of clothes for every taste for you and your family.</p>
		</div>
		<?php
		if ( have_posts() ) :
			?>
			<div class="row spacing-bottom-65 with-animated">
				<?php
				while ( have_posts() ) :
					the_post();
					?>
					<div class="col-md-12 col-lg-4">
						<div class="articles-category">
							<div class="articles-category-foto">
								<?php
								get_template_part( 'template-parts/content' );
								?>
							</div>
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
