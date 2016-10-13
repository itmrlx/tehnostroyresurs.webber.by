<?php /*
template name: Сотрудники
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

	<!-- personal page -->
	<div class="container personal-page">
		<div class="row">
			<!-- personal items -->
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
			$images_per_page  = 6; // How many images to display on each page
			$images           = get_field( 'personal' );
			$total            = count( $images );
			$pages            = ceil( $total / $images_per_page );
			$min              = ( ( $page * $images_per_page ) - $images_per_page ) + 1;
			$max              = ( $min + $images_per_page ) - 1;

			// ACF Loop
			if( have_rows( 'personal' ) ) : ?>

				<?php while( have_rows( 'personal' ) ): the_row();

					$row++;

					// Ignore this image if $row is lower than $min
					if($row < $min) { continue; }

					// Stop loop completely if $row is higher than $max
					if($row > $max) { break; } ?>                     
					
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
				Сотрудники не найдены
			<?php endif; ?>
			<!-- / personal items -->
		</div>
	</div>

<?php get_footer(); ?>