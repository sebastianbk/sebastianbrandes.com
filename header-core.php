<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' |'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>
		<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script>

	</head>
	<body <?php body_class(); ?>>
	
		<!-- header -->
		<header class="navbar navbar-default navbar-fixed-top" role="banner">

			<div class="container">
				
		        <div class="navbar-header">
		          <a href="<?php echo home_url(); ?>" class="navbar-brand">Sebastian Brandes</a>
		          <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-main">
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
		          </button>
		        </div>
				
				<div class="navbar-collapse collapse" id="navbar-main">
					<?php
						wp_nav_menu(
						array(
							'theme_location'  => 'header-menu',
							'menu'            => 'div',
							'menu_class'      => 'navbar-collapse collapse',
							'menu_id'         => 'navbar-main',
							'echo'            => true,
							'fallback_cb'     => 'wp_page_menu',
							'before'          => '',
							'after'           => '',
							'link_before'     => '',
							'link_after'      => '',
							'items_wrap'      => '<ul class="nav navbar-nav">%3$s</ul>',
							'depth'           => 0,
							'walker'          => ''
							)
						);
				 	?>
					
					<?php get_template_part('searchform'); ?>
		        </div>
			</div>
		</header>
		<!-- /header -->