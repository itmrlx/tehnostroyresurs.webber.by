<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="<?php bloginfo('template_url'); ?>/img/favicon-160.png" />
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php bloginfo('template_url'); ?>/img/favicon-114.png">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php bloginfo('template_url'); ?>/img/favicon-72.png">
	<link rel="apple-touch-icon-precomposed" href="<?php bloginfo('template_url'); ?>/img/favicon-57.png">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/global.css">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/style.css">
	<?php wp_head(); ?>
</head>
<body>

	<!-- header -->
	<div class="fix fix-menu">
		<div class="container header-top">
			<div class="row">
				<div class="col-xs-3 logo-container">
					<a href="/">
						<img src="<?php bloginfo('template_url'); ?>/img/logo.png" alt="Техностройресурс Плюс" class="big">
						<img src="<?php bloginfo('template_url'); ?>/img/logo-small.png" alt="Техностройресурс Плюс" class="small">
					</a>
				</div>
				<div class="col-xs-7 menu-container">
					<div class="burger-menu">
						<span></span>
						<span></span>
						<span></span>
					</div>
					<?php 
						$args = array(
							'theme_location'  => 'main-menu',
							'container'       => '', 
							'menu_class'      => 'pro-menu', 
						);
						wp_nav_menu( $args );
					?>
					<div class="clearfix"></div>
				</div>
				<div class="col-xs-2 phone-container">
					<a href="tel:<?php echo str_replace(array(" ","(",")","-"),"",get_field(h_kod,option)); ?><?php echo str_replace(array(" ","(",")","-"),"",get_field(h_phone,option)); ?>"><?php the_field('h_kod','option'); ?> <span><?php the_field('h_phone','option'); ?></span></a>
				</div>
			</div>
		</div>
	</div>