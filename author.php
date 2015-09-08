<?php get_header(); ?>

	<main>
		<!-- section -->
		<section>

		<?php if (have_posts()): the_post(); ?>

			<h1><?php _e( 'Author Archives for ', 'sebastianbrandes' ); echo get_the_author(); ?></h1>

		<?php if ( get_the_author_meta('description')) : ?>

		<?php echo get_avatar(get_the_author_meta('user_email')); ?>

			<h2><?php _e( 'About ', 'sebastianbrandes' ); echo get_the_author() ; ?></h2>

			<?php echo wpautop( get_the_author_meta('description') ); ?>

		<?php endif; ?>

		<?php rewind_posts(); while (have_posts()) : the_post(); ?>

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
						<?php if (comments_open( get_the_ID() ) ) { comments_popup_link( __( 'Leave your thoughts', 'sebastianbrandes' ), __( '1 Comment', 'sebastianbrandes' ), __( '% Comments', 'sebastianbrandes' )); } else { echo 'No Comments'; } ?>
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

			<?php get_template_part('pagination'); ?>

		</section>
		<!-- /section -->
	</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
