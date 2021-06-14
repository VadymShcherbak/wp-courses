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
	<div class="row">
		<div class="col-lg-8 col-md-8 col-sm-12">
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
		<div class="col-lg-4 col-md-4 col-sm-12">
			<?php get_sidebar(); ?>
		</div>
	</div>

			<?php
			merak_pagination();
			?>

	</div>
</section>
<?php
get_footer();
