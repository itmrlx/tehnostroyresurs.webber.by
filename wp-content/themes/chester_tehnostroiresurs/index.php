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
				<div class="col-xs-4">
					<div class="news-item" style="background-image: url(img/news-1.png);">
						<div class="date">22.03.16</div>
						<h2 class="title">Торгово- развлекательный центр "ЛенiнГрад"</h2>
						<div class="desc">В центре Минска на пересечении улиц Ленина и Смоленской приобрел свои реальные очертания многофункциональный торговый комплекс, получивший громкое название «ЛенiнГрад».</div>
						<a href="#" class="btn btn-transparent">ПОДРОБНЕЕ</a>
					</div>
				</div>
				<div class="col-xs-4">
					<div class="news-item" style="background-image: url(img/news-2.png);">
						<div class="date">07.09.16</div>
						<h2 class="title">Окончание строительства офисного здания по улице Веры Хоружей</h2>
						<div class="desc">Реальные очертания многофункциональный торговый комплекс, получивший громкое название «ЛенiнГрад».</div>
						<a href="#" class="btn btn-transparent">ПОДРОБНЕЕ</a>
					</div>
				</div>
				<div class="col-xs-4">
					<div class="news-item" style="background-image: url(img/news-3.png);">
						<div class="date">27.12.16</div>
						<h2 class="title">Каждому — по коттеджу</h2>
						<div class="desc">Реальные очертания многофункциональный торговый комплекс, получивший громкое название «ЛенiнГрад». В центре Минска на пересечении улиц Ленина и Смоленской приобрел свои реальные очертания торговый комплекс, получивший громкое название.</div>
						<a href="#" class="btn btn-transparent">ПОДРОБНЕЕ</a>
					</div>
				</div>
			</div>
			<div class="centered">
				<a href="#" class="btn btn-primary">Читать все</a>
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