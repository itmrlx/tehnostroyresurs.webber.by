<?php get_header(); ?>

	<div class="wrapper purple-block news-purple">
		<div class="container">
			<div class="row">
				<div class="col-xs-3">
					<h1 class="title">Новости</h1>
				</div>
				<div class="col-xs-9 purple-menu-container">
					<?php include 'menu-news.php'; ?>
				</div>
			</div>
		</div>
	</div>

	<!-- news -->
		<div class="container news-page">
			<!-- news -->
			<div class="row news">

				<?php if(have_posts()) : ?>
				<?php while(have_posts()) : the_post(); ?>
					<div class="col-xs-4">
						<?php $add_img = get_field('add_img'); ?>
						<div class="news-item" style="background-image: url(<?php echo $add_img['sizes']['medium']; ?>);">
							<div class="date"><?=get_the_date(); ?></div>
							<h2 class="title"><?php the_title(); ?></h2>
							<div class="desc"><?php echo wp_trim_words(get_the_content(),30,'...'); ?></div>
							<a href="<?php the_permalink(); ?>" class="btn btn-transparent">ПОДРОБНЕЕ</a>
						</div>
					</div>
				<?php endwhile; ?>
				<div class="clearfix"></div>
				<div class="centered">
					<?php if(function_exists('proPagination')) { proPagination(); } ?>
				</div>
				<?php endif;?>
			</div>
			<!-- / news -->
		</div>

<?php get_footer(); ?>