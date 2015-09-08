<?php get_template_part('header-core'); ?>

		<div class="container-fluid" id="post-header-bg"
			style="background-image: url(<?php echo get_template_directory_uri() . '/img/archive_header.jpg'; ?>);">
			<div class="container">
			<div class="page-header" id="post-header">
				<div class="row">
					<div class="col-sm-12 col-md-12 col-lg-12">
						<h1 class="shadow">Categories</h1>
						<p class="lead shadow"><?php single_cat_title(); ?></p>
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
