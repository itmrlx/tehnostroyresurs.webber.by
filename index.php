<?php get_header(); ?>

	<!-- main slider -->
	<div class="wrapper main-slider">
		<!-- slides -->
	<?php if( have_rows('slider','option') ):while ( have_rows('slider','option') ) : the_row(); ?>
		<?php $slide_img = get_sub_field('slider_img'); ?>
		<div class="slide" style="background-image: url(<?php echo $slide_img['url']; ?>);">
			<div class="container">
				<div class="row">
					<div class="col-xs-5">
						<div class="text">
							<div class="title"><?php the_sub_field('slider_title'); ?></div>
							<div class="desc"><?php the_sub_field('slider_text'); ?></div>
							<?php if(get_sub_field('slider_link') && get_sub_field('slider_title')): ?>
								<a href="<?php the_sub_field('slider_link'); ?>" class="btn btn-transparent"><?php the_sub_field('slider_btn'); ?></a>
							<?php endif; ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	<?php endwhile;endif; ?>
		<!-- / slides -->
	</div>

	<!-- about -->
	<div class="container about">
		<div class="row">
			<div class="col-xs-9">
				<h1 class="title"><?php the_field('a_title','option'); ?></h1>
			</div>
			<div class="col-xs-3">
				<a href="<?php the_field('a_link','option'); ?>" class="btn btn-primary"><?php the_field('a_btn','option'); ?></a>
			</div>
			<div class="col-xs-12 desc">
				<?php the_field('a_text','option'); ?>
			</div>
		</div>
		<div class="row icons">
			<?php if( have_rows('adv','option') ):while ( have_rows('adv','option') ) : the_row(); ?>
				<div class="col-xs-3 icon">
					<img src="<?php the_sub_field('adv_icon'); ?>" alt="Преимущества">
					<div class="text"><?php the_sub_field('adv_text'); ?></div>
				</div>
			<?php endwhile;endif; ?>
		</div>
	</div>

	<!-- last news -->
	<div class="wrapper last-news">
		<div class="container review-container">
			<!-- review -->
			<div class="review-block">
				<div class="row">
					<div class="col-xs-2 left">
						<div class="title">Отзывы клиентов</div>
						<a href="/about/reviews/" class="btn btn-transparent">Читать все</a>
					</div>
					<div class="col-xs-10 white">
						<div class="row">
							<?php if( have_rows('review',78) ):while ( have_rows('review',78) && ++$r <= 1) : the_row(); ?>
								<div class="col-xs-10 center">
									<h2 class="title"><?php the_sub_field('review_title'); ?></h2>
									<div class="desc"><?php the_sub_field('review_title2'); ?></div>
									<div class="text"><?php the_sub_field('review_text'); ?></div>
								</div>
								<div class="col-xs-2 right">
									<?php $review_img = get_sub_field('review_img'); ?>
									<a href="<?php echo $review_img['sizes']['large']; ?>" class="fancybox"><img src="<?php echo $review_img['sizes']['medium']; ?>" alt="<?php echo $review_img['alt']; ?>"></a>
								</div>
							<?php endwhile;endif; ?>
						</div>
					</div>
				</div>
			</div>
			<div class="clearfix"></div>
			<!-- / reveiw -->
			<!-- news -->
			<div class="news-title">Новости компании</div>
			<div class="row news">
				<?php $query_my = new WP_Query('post_type=news&showposts=3'); ?>
				<?php if($query_my->have_posts()) : ?>
					<?php while($query_my->have_posts()) : $query_my->the_post(); ?>
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
				<?php endif; ?>
			</div>
			<div class="centered">
				<a href="/news_category/news/" class="btn btn-primary">Читать все</a>
			</div>
			<!-- / news -->
		</div>
	</div>

	<!-- partners -->
	<?php  $parner_logos = get_field('p_logos','option'); if( $parner_logos ): ?>
	<div class="container partners">
		<div class="title">ПАРТНЕРЫ</div>
		<div class="partners-slider">
			<?php foreach( $parner_logos as $image ): ?>
				<div class="slide"><img src="<?php echo $image['sizes']['medium']; ?>" alt="<?php echo $image['alt']; ?>"></div>
			<?php endforeach; ?>
		</div>
	</div>
	<?php endif; ?>

<?php get_footer(); ?>