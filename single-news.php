<?php include 'header.php'; ?>

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

	<!-- news header -->
	<?php $addimg = get_field('add_img'); ?>
	<div class="wrapper news-header" style="background-image: url(<?php echo $addimg['url']; ?>);">
		<div class="text">
			<h1 class="title"><?php the_title(); ?></h1>
			<div class="date"><?=get_the_date(); ?></div>
		</div>
	</div>

	<!-- news -->
	<div class="container content-news content">
		<?php the_content(); ?>
	</div>

<?php include 'footer.php'; ?>