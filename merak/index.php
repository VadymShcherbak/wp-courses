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
							<?php echo get_the_post_thumbnail(); ?>
							<?php foreach ( get_the_category() as $category ) : ?>
								<a href="<?php echo esc_url( get_category_link( $category ) ); ?>" class="banner-category">
									<?php echo esc_html( $category->name ); ?>
								</a>
							<?php endforeach; ?>
						</div>
						<div class="articles-category-text">
							<h4><a href="<?php the_permalink(); ?>" class="link-hover"><?php the_title(); ?></a></h4>
							<div class="articles-category-about">
								<span class="spacing-right"><?php the_date(); ?></span>
								<div class="articles-category-author spacing-right"><img
										src="img/merak-testimonials-3.jpg" alt=""></div>
								<span class="spacing-right"> By <span class="author-name"><?php the_author(); ?></span></span>
							</div>
							<a href="<?php the_permalink(); ?>" class="link-hover">Continue reading <i class="fas fa-arrow-right"></i></a>
						</div>
					</div>
				</div>	
				<?php endwhile; ?>
			</div>
		<?php endif; ?>
	</div>
</section>
<?php
get_footer();
