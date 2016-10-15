<?php /*
template name: Контакты
*/ ?>
<?php include 'header.php'; ?>

	<div class="wrapper purple-block">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 description">
					<h1 class="title"><?php the_title(); ?></h1>
					<?php the_field('desc'); ?>
				</div>
				<div class="col-xs-12 contacts-page-header">
					<div class="row">
						<div class="col-xs-3">
							<p class="adres"><?php the_field('adres'); ?></p>
							<p class="phones">
								<a href="tel:<?php echo str_replace(array(" ","(",")","-"),"",get_field('tel1')); ?>"><?php the_field('tel1'); ?></a>
								<a href="tel:<?php echo str_replace(array(" ","(",")","-"),"",get_field('tel2')); ?>"><?php the_field('tel2'); ?></a>
							</p>
						</div>
						<div class="col-xs-3">
							<a href="tel:<?php echo str_replace(array(" ","(",")","-"),"",get_field('tel3')); ?>" class="mobile"><?php the_field('tel3'); ?>
							<br><span><?php the_field('name1'); ?></span></a>
							<a href="tel:<?php echo str_replace(array(" ","(",")","-"),"",get_field('tel4')); ?>" class="mobile"><?php the_field('tel4'); ?>
							<br><span><?php the_field('name2'); ?></span></a>
						</div>
						<div class="col-xs-3">
							<a href="mailto:<?php the_field('email'); ?>" class="mail"><?php the_field('email'); ?></a>
							<div class="clearfix"></div>
							<?php if(get_field('vk','option')): ?><a href="<?php the_field('vk','option'); ?>" class="soc vk"></a><?php endif; ?>
							<?php if(get_field('fb','option')): ?><a href="<?php the_field('fb','option'); ?>" class="soc fb"></a><?php endif; ?>
							<?php if(get_field('in','option')): ?><a href="<?php the_field('in','option'); ?>" class="soc in"></a><?php endif; ?>
							<?php if(get_field('yt','option')): ?><a href="<?php the_field('yt','option'); ?>" class="soc yt"></a><?php endif; ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- map -->
	<div class="wrapper map">
	</div>

	<!-- form -->
	<div class="container contacts-page-form">
		<form id="form-contacts" class="form-class">
			<div class="title">Напишите нам</div>
			<div class="row">
				<div class="col-xs-3">
					<div class="form-group">
						<input class="form-control" id="tel" name="tel" type="tel" required />
						<label for="tel">Телефон<span>*</span></label>
					</div>
					<div class="form-group">
						<input class="form-control" name="mail" id="mail" type="email" />
						<label for="mail">Email</label>
					</div>
				</div>
				<div class="col-xs-3">
					<div class="form-group">
						<input class="form-control" name="name" id="name" type="text" required />
						<label for="name">Имя<span>*</span></label>
					</div>
					<div class="form-group">
						<input class="form-control" name="org" id="org" type="text" />
						<label for="org">Организация</label>
					</div>
				</div>
				<div class="col-xs-6">
					<div class="form-group for-robots" style="display: none;">
						<input class="form-control" type="text" name="email" />
						<input class="form-control modal-form-value" type="text" name="title" />
					</div>
					<div class="form-group">
						<textarea class="form-control" name="comment" id="mes" cols="30" rows="4" required></textarea>
						<label for="mes">Сообщение</label>
					</div>
					<div class="ps alignleft"><span>*</span>Поля обязательные для заполнения</div>
					<button type="submit" class="btn btn-primary alignright">ОТПРАВИТЬ СООБЩЕНИЕ</button>
				</div>
			</div>
		</form>
	</div>


<?php include 'footer.php'; ?>