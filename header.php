<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
                <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
                <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>
		<?php include (TEMPLATEPATH . '/galeria/gallery_header_include.php'); ?>
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
		<!-- wrapper -->
		<div class="container">

			<!-- header -->
			<header class="header clear" role="banner">
					<!-- logo -->
					<div class="logo text-center">
						<a href="<?php echo home_url(); ?>">
							<!-- svg logo - toddmotto.com/mastering-svg-use-for-a-retina-web-fallbacks-with-png-script -->
							<img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="Logo" class="logo-img">
						</a>
					</div>
					<!-- /logo -->

			</header>
			<!-- /header -->
                        
                        
                        <div class="buscadorNav row">
                            <!-- nav -->
                            <nav class="nav col-md-12" role="navigation">
                                 <?php $args = array(
                                     'theme_location' => 'header-menu',
                                     'menu' => 'Header Menu',
                                     'items_wrap'      => '<ul id="%1$s" class="%2$s nav nav-justified">%3$s</ul>',
                                 ); ?>

                                <?php wp_nav_menu($args); ?>
                            </nav>
                            <!-- /nav -->
                            

                            
                         </div>
                        
                        <div class="row">