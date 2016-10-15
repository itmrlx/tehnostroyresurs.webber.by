<?php get_header(); ?>
	
	<div class="wrapper purple-block services-purple">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 description">
					<h1 class="title"><?php single_cat_title(); ?></h1>
					<?php echo category_description(); ?>
				</div>
			</div>
		</div>
	</div>

	<div class="wrapper services">
		<?php if(have_posts()) : ?>
		<?php while(have_posts()) : the_post(); ?>

		<?php $servimg = get_field('servimg'); ?>
		<div class="col-xs-4 service-item" style="background-image: url(<?php echo $servimg['sizes']['medium']; ?>);">
			<div class="text">
				<a href="<?php the_permalink(); ?>" class="btn btn-transparent"><?php the_title(); ?></a>
				<p><?php echo wp_trim_words(get_field('desc'),15,'...'); ?></p>
			</div>
		</div>

		<?php endwhile; ?>
		<div class="clearfix"></div>
		<div class="nav">
			<?php if(function_exists('proPagination')) { proPagination(); } ?>
		</div>
		<?php endif; ?>
		<div class="clearfix"></div>
	</div>

<?php get_footer(); ?>