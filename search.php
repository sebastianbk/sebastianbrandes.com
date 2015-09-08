<?php get_template_part('header-core'); ?>

		<div class="container-fluid" id="post-header-bg"
			style="background-image: url(<?php echo get_template_directory_uri() . '/img/searching_header.jpg'; ?>);">
			<div class="container">
			<div class="page-header" id="post-header">
				<div class="row">
					<div class="col-sm-12 col-md-12 col-lg-12">
						<h1 class="shadow">Search Results</h1>
						<p class="lead shadow"><?php echo sprintf( __( '%s result(s) for ', 'sebastianbrandes' ), $wp_query->found_posts ); echo '&ldquo;' . get_search_query() . '&rdquo;'; ?></p>
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

			<?php get_template_part('loop'); ?>

			<?php get_template_part('pagination'); ?>

		</section>
		<!-- /section -->
	</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
