<?php /*
template name: О компании
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
				<?php 

				$attestats = get_field('attestats');

				if( $attestats ): ?>
				<div class="col-xs-12 attestat">
					<div class="title">АТТЕСТАТЫ СООТВЕТСТВИЯ</div>
						<?php foreach( $attestats as $image ): ?>
							<a href="<?php echo $image['sizes']['large']; ?>" class="fancybox" data-fancybox-group="attestat-group"><img src="<?php echo $image['sizes']['medium']; ?>" alt="<?php echo $image['alt']; ?>"></a>
						<?php endforeach; ?>
				</div>
				<?php endif; ?>
			</div>
		</div>
	</div>

	<!-- personal -->
	<div class="container personal-page">
		<div class="row">
			<!-- personal items -->
			<?php if( have_rows('personal',64) ):while ( have_rows('personal',64) && ++$i <= 4) : the_row(); ?>
				<div class="col-xs-6 personal-item">
					<div class="title-container">
						<?php $personal_img = get_sub_field('personal_img'); ?>
						<img src="<?php echo $personal_img['sizes']['thumbnail']; ?>" alt="<?php echo $personal_img['alt']; ?>">
						<div class="text">
							<div class="name"><?php the_sub_field('personal_name'); ?></div>
							<div class="st"><?php the_sub_field('personal_dol'); ?></div>
						</div>
					</div>
					<div class="desc"><?php the_sub_field('personal_text'); ?></div>
				</div>
			<?php endwhile;endif; ?>
			<!-- / personal items -->
			<div class="clearfix"></div>
			<a href="/about/personal/" class="btn btn-primary alignright">ПОКАЗАТЬ ВСЕХ СОТРУДНИКОВ</a>
			<div class="clearfix"></div>
		</div>
	</div>

	<!-- reviews page -->
	<div class="about-review">
		<div class="container reviews-page">
			<div class="title-r">ОТЗЫВЫ КЛИЕНТОВ</div>
			<!-- review items -->
			<?php if( have_rows('review',78) ):while ( have_rows('review',78) && ++$b <= 3) : the_row(); ?>
				<div class="review-block">
					<div class="row">
						<div class="col-xs-10 col-xs-offset-1 white">
							<div class="row">
								<div class="col-xs-10 center">
									<h2 class="title"><?php the_sub_field('review_title'); ?></h2>
									<div class="desc"><?php the_sub_field('review_title2'); ?></div>
									<div class="text"><?php the_sub_field('review_text'); ?></div>
								</div>
								<div class="col-xs-2 right">
									<?php $review_img = get_sub_field('review_img'); ?>
									<a href="<?php echo $review_img['sizes']['large']; ?>" class="fancybox"><img src="<?php echo $review_img['sizes']['medium']; ?>" alt="<?php echo $review_img['alt']; ?>"></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			<?php endwhile;endif; ?>
			<!-- / review items -->
			<div class="clearfix"></div>
			<div class="centered">
				<a href="/about/reviews/" class="btn btn-primary">ЧИТАТЬ ВСЕ</a>
			</div>
		</div>
	</div>

<?php get_footer(); ?>