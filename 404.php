<?php get_template_part('header-core'); ?>

		<div class="container-fluid" id="post-header-bg"
			style="background-image: url(<?php echo get_template_directory_uri() . '/img/searching_header.jpg'; ?>);">
			<div class="container">
			<div class="page-header" id="post-header">
				<div class="row">
					<div class="col-sm-12 col-md-12 col-lg-12">
						<h1 class="shadow">Page Not Found</h1>
						<p class="lead shadow">Did you follow a bad link?</p>
					</div>
				</div>
			</div>
			</div>
		</div>
		
		<div class="container">
			<div class="row white">
				<div class="col-md-9 col-sm-8">

	<main>
		<!-- section -->
		<section>

			<!-- article -->
			<article id="post-404">
				
				<p>The page you are looking for does not exist.</p>
				
				<p>Why don't you check out one of my latest posts instead?</p>
				
				<h3>Latest Posts</h3>
				<ul>
				<?php
				global $post;
				$posts = get_posts('numberposts=5');
				foreach($posts as $post) :
				?>
				<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
				<?php endforeach; ?>
				</ul>
				
				<p>... or you could <a href="<?php echo home_url(); ?>">go back home</a>.</p>

			</article>
			<!-- /article -->

		</section>
		<!-- /section -->
	</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
