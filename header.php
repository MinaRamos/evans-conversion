<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<!-- <link href="//www.google-analytics.com" rel="dns-prefetch"> -->
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>

	</head>
	<body <?php body_class(); ?>>

		<!-- header -->
		<header>
			<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar" role="navigation">
				<div class="container">
					<a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php echo get_bloginfo( 'name' ); ?></a>
					<?php 
					if ( function_exists( 'the_custom_logo' ) ) {
						the_custom_logo();
					} else {
						echo '<h1>'. get_bloginfo( 'name' ) .'</h1>';
					}
					?>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
						<span class="oi oi-menu"></span> Menu
					</button>
					<div class="collapse navbar-collapse" id="ftco-nav">
						<?php html5blank_nav(); ?>
					</div>
				</div>
			</nav>
			<!-- /nav -->	
		</header>
		<!-- /header -->
<body>
