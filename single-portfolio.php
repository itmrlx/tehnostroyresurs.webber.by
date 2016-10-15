<?php get_header(); ?>

	<!-- portfolio header -->
	<?php $portimg = get_field('portimg'); ?>
	<div class="wrapper news-header" style="background-image: url(<?php echo $portimg['url']; ?>);">
		<div class="text">
			<h1 class="title"><?php the_title(); ?></h1>
		</div>
	</div>

	<!-- news -->
	<div class="container content-news content">
		<?php the_content(); ?>
	</div>

<?php get_footer(); ?>