<div class="container">
	<header class="content-header">
		<div class="meta mb-3">
			<span class="date"><?php the_date(); ?></span>

			<?php
				the_tags( '<span class="tag"><i class="fa fa-tag"></i>', '</span><span class="tag"><i class="fa fa-tag"></i>', '</span>' );
			?>

			<span class="comment"><a href="#comments"><i class='fa fa-comment'></i> 3 comments</a></span>
		</div>
	</header>
	<div class="post mb-5">
		<div class="media">
			<img class="mr-3 img-fluid post-thumb d-none d-md-flex" src="<?php the_post_thumbnail_url( 'thumbnail' ) ?>" alt="image">
			<div class="media-body">
				<h3 class="title mb-1"><?php the_title(); ?></h3>
				<div class="meta mb-1">
					<span class="date"><?php the_date(); ?></span>
					<span class="comment"><a href="#"><?php comments_number(); ?></a></span>
				</div>

				<a class="more-link" href="<?php the_permalink(); ?>">Read more &rarr;</a>
			</div>
			<!--//media-body-->
		</div>
		<!--//media-->
	</div>
	<?php
	/**
	 * WP lesson
	 *
	 * @package Blog
	 */

	the_content();
	?>

	<?php
	comments_template();
	?>

</div>

