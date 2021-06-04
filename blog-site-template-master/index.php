<?php
/**
 * WP lesson
 *
 * @package Blog
 */

get_header();
?>
	<article class="content px-3 py-5 p-md-5">
		<?php
		if ( have_posts() ) :

			while ( have_posts() ) :
				?>

				<?php the_post(); ?>
				<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
				<?php the_post_thumbnail() ?>
				<p><?php the_date(); ?></p>
				<?php comments_number(); ?>
				<?php the_content(); ?>

				<a href="<?php the_permalink(); ?>">View more</a>

				<?php
				endwhile;
			endif;
		?>

		<?php
		the_posts_pagination();
		?>
	</article>
<?php
get_footer();
?>
