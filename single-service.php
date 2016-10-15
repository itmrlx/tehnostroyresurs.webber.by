<?php get_header(); ?>
	<?php $servimg = get_field('servimg'); ?>
	<div class="wrapper services-header" style="background-image: url(<?php echo $servimg['url'] ?>);">
		<div class="container">
			<h1 class="title"><?php the_title(); ?></h1>
			<?php the_field('desc'); ?>
		</div>
	</div>

	<div class="container services-content content">
		<?php the_field('cont'); ?>
	</div>

<?php $post_objects = get_field('related');
if( $post_objects ): ?>
	<div class="wrapper services">
		<div class="title-project">РЕАЛИЗОВАННЫЕ ПРОЕКТЫ</div>
		<?php foreach( $post_objects as $post): // variable must be called $post (IMPORTANT) ?>
			<?php setup_postdata($post); ?>
			<?php $portimg = get_field('portimg'); ?>
			<a href="<?php the_permalink(); ?>" class="col-xs-4 service-item" style="background-image: url(<?php echo $portimg['sizes']['medium']; ?>);">
				<div class="text"><div class="title"><?php the_title(); ?></div></div>
			</a>
		<?php endforeach; ?>
		<div class="clearfix"></div>
	</div>
	<?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
	<?php endif; ?>

<?php get_footer(); ?>