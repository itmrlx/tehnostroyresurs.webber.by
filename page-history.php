<?php /*
template name: История
*/ ?>
<?php get_header(); ?>
	
	<div class="wrapper purple-block">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 purple-menu-container">
					<?php include 'menu-about.php'; ?>
				</div>
				<div class="col-xs-12 description">
					<h1 class="title"><?php the_title(); ?></h1>
					<?php the_field('text'); ?>
				</div>
			</div>
		</div>
	</div>

	<!-- history page -->
	<div class="container history-page">
		<div class="row">
			<?php if( have_rows('y_block') ):while ( have_rows('y_block') ) : the_row(); ?>
				<div class="col-xs-4 year-item">
					<div class="year"><?php the_sub_field('y_year'); ?></div>
					<?php the_sub_field('y_text'); ?>
				</div>
			<?php endwhile;endif; ?>
			<div class="col-xs-12 content">
				<?php the_field('cont'); ?>
			</div>
		</div>
	</div>

<?php get_footer(); ?>