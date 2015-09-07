<?php if (have_posts()): while (have_posts()) : the_post(); ?>

	<!-- article -->
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

		<!-- post title -->
		<h2>
			<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
		</h2>
		<!-- /post title -->

		<!-- post details -->
		<p>
			<small>
				<?php _e( 'Published by', 'sebastianbrandes' ); ?> <?php the_author_posts_link(); ?> on <?php the_time('F j, Y'); ?> <?php the_time('g:i a'); ?> &mdash;
				<?php if (comments_open( get_the_ID() ) ) comments_popup_link( __( 'Leave your thoughts', 'sebastianbrandes' ), __( '1 Comment', 'sebastianbrandes' ), __( '% Comments', 'sebastianbrandes' )); ?>
			</small>
		</p>
		<!-- /post details -->

		<?php the_excerpt(); ?>

		<?php edit_post_link(); ?>
		
		<?php
			if (($wp_query->current_post + 1) != ($wp_query->post_count)) {
			    echo '<hr />';
			}
		?>

	</article>
	<!-- /article -->

<?php endwhile; ?>

<?php else: ?>

	<!-- article -->
	<article>
		<h2><?php _e( 'Sorry, nothing to display.', 'sebastianbrandes' ); ?></h2>
	</article>
	<!-- /article -->

<?php endif; ?>
