<?php get_header(); ?>
<!-- 
			<?php if(have_posts()) : ?>
			<?php while(have_posts()) : the_post(); ?>

			<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a> <span><?=get_the_date(); ?></span></h2>
			<div class="post">
				<?php the_excerpt(); ?>
			</div>

			<?php endwhile; ?>
			<div class="nav">
				<?php if(function_exists('proPagination')) { proPagination(); } ?>
			</div>
			<?php endif; ?>
 -->
<?php get_footer(); ?>