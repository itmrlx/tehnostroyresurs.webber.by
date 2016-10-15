	<!-- footer -->
	<div class="wrapper footer-b">
		<div class="container">
			<div class="row">
				<div class="col-xs-3 socials">
					<a href="/" class="logo">техстройресурс плюс</a>
					<div class="clearfix"></div>
					<?php if(get_field('vk','option')): ?><a href="<?php the_field('vk','option'); ?>" class="soc vk"></a><?php endif; ?>
					<?php if(get_field('fb','option')): ?><a href="<?php the_field('fb','option'); ?>" class="soc fb"></a><?php endif; ?>
					<?php if(get_field('in','option')): ?><a href="<?php the_field('in','option'); ?>" class="soc in"></a><?php endif; ?>
					<?php if(get_field('yt','option')): ?><a href="<?php the_field('yt','option'); ?>" class="soc yt"></a><?php endif; ?>
				</div>
				<div class="col-xs-4 desc">
					<?php the_field('f_text','option'); ?>
				</div>
				<div class="col-xs-3 contacts">
					<a href="tel:<?php echo str_replace(array(" ","(",")","-"),"",get_field('f_tel','option')); ?>"><?php the_field('f_tel','option'); ?></a>
					<a href="tel:<?php echo str_replace(array(" ","(",")","-"),"",get_field('f_tel2','option')); ?>"><?php the_field('f_tel2','option'); ?></a>
					<a href="mailto:<?php the_field('f_mail','option'); ?>"><?php the_field('f_mail','option'); ?></a>
					<p><?php the_field('f_adres','option'); ?></p>
				</div>
				<div class="col-xs-2 chester">
					<a href="http://chesterstudio.com" target="_blank" class="chester-logo">Разработка  ChesterStudio</a>
				</div>
			</div>
		</div>
	</div>

	<script src="<?php bloginfo('template_url'); ?>/js/min/jquery-3.0.0-dist.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/js/min/jquery.fancybox-dist.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/js/min/slick-dist.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/js/min/script-dist.js"></script>
	<?php wp_footer(); ?>
</body>
</html>