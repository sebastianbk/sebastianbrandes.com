<?php get_template_part('header-core'); ?>

		<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'post-thumbnail' )['0']; ?>

		<div class="container-fluid" id="post-header-bg"
			style="background-image: url(<?php if (has_post_thumbnail()) { echo $image; } else { echo get_template_directory_uri() . '/img/default_header.jpg'; } ?>);">
			<div class="container">
			<div class="page-header" id="post-header">
				<div class="row">
					<div class="col-sm-12 col-md-12 col-lg-12">
						<h1 class="shadow"><?php the_title(); ?></h1>
						<?php if (!is_page()) { ?>
						<p class="lead shadow"><?php the_time('F j, Y'); ?> <?php the_time('g:i a'); ?></p>
						<?php } ?>
					</div>
				</div>
			</div>
			</div>
		</div>

		<div class="container">
			<div class="row white">
				<div class="col-md-9 col-sm-8">