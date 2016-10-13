<?php /*
template name: Отзывы
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

	<!-- reviews page -->
	<div class="container reviews-page">
		<!-- review items -->
		<?php
		/* 
		 * Paginate Advanced Custom Field repeater
		 */

		if( get_query_var('page') ) {
			$page = get_query_var( 'page' );
		} else {
			$page = 1;
		}

		// Variables
		$row              = 0;
		$images_per_page  = 3; // How many images to display on each page
		$images           = get_field( 'review' );
		$total            = count( $images );
		$pages            = ceil( $total / $images_per_page );
		$min              = ( ( $page * $images_per_page ) - $images_per_page ) + 1;
		$max              = ( $min + $images_per_page ) - 1;

		// ACF Loop
		if( have_rows( 'review' ) ) : ?>

			<?php while( have_rows( 'review' ) ): the_row();

				$row++;

				// Ignore this image if $row is lower than $min
				if($row < $min) { continue; }

				// Stop loop completely if $row is higher than $max
				if($row > $max) { break; } ?>                     
				
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

			<?php endwhile; ?>
			<div class="clearfix"></div>
			<div class="centered">
				<div class="pagination2">
				<?php  
				echo paginate_links( array(
					'base' => get_permalink() . '%#%' . '/',
					'format' => '?page=%#%',
					'current' => $page,
					'total' => $pages,
					'prev_text'    => __('«'),
					'next_text'    => __('»'),
				) );
				 ?>
				</div>
			</div>

		<?php else: ?>
			Отзывы не найдены
		<?php endif; ?>
		<!-- / review items -->
	</div>

<?php get_footer(); ?>