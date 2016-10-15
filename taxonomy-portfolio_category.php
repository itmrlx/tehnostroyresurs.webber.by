<?php get_header(); ?>

	<div class="wrapper purple-block news-purple">
		<div class="container">
			<div class="row">
				<div class="col-xs-3">
					<h1 class="title">Портфолио</h1>
				</div>
				<div class="col-xs-9 purple-menu-container">
					<?php include 'menu-portfolio.php'; ?>
				</div>
			</div>
		</div>
	</div>

	<div class="wrapper services">
		<?php if(have_posts()) : ?>
		<?php while(have_posts()) : the_post(); ?>
		
		<?php $portoimg = get_field('portimg'); ?>
		<a href="<?php the_permalink(); ?>" class="col-xs-4 service-item" style="background-image: url(<?php echo $portoimg['sizes']['medium']; ?>);">
			<div class="text"><div class="title"><?php the_title(); ?></div></div>
		</a>

		<?php endwhile; ?>
		<div class="clearfix"></div>
		<div class="nav">
			<?php if(function_exists('proPagination')) { proPagination(); } ?>
		</div>
		<?php endif; ?>
		<div class="clearfix"></div>
	</div>

<?php get_footer(); ?>