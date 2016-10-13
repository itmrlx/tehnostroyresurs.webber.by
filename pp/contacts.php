<?php include 'header.php'; ?>

	<div class="wrapper purple-block">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 description">
					<h1 class="title">Контакты</h1>
					<p>В основу своей работы «Техстройресурс Плюс» закладывает комплексный подход, в результате которого клиент получает «под ключ» любой объект — будь то офис, административное здание, жилье, производственное помещение и т.д.</p>
				</div>
				<div class="col-xs-12 contacts-page-header">
					<div class="row">
						<div class="col-xs-3">
							<p class="adres">220019, г.Минск,ул. Лобанка, д.79, (2-й этаж, п.28)</p>
							<p class="phones">
								<a href="tel:+375173910580">+37517 391-05-80</a>
								<a href="tel:+375173910587">+37517 391-05-87 (факс)</a>
							</p>
						</div>
						<div class="col-xs-3">
							<a href="tel:+375296224853" class="mobile">+37529 622-48-53
							<br><span>Мигас Андрей Иванович</span></a>
							<a href="tel:+375296426223" class="mobile">+37529 642-62-23
							<br><span>Воюнков Вадим Александрович</span></a>
						</div>
						<div class="col-xs-3">
							<a href="mailto:tsrplus@tut.by" class="mail">tsrplus@tut.by</a>
							<div class="clearfix"></div>
							<a href="#" class="soc vk"></a>
							<a href="#" class="soc fb"></a>
							<a href="#" class="soc in"></a>
							<a href="#" class="soc yt"></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- map -->
	<div class="wrapper map">
		<script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?sid=t_BtpblJIoBb4UCKalG-fIdZQn0uY4C7&amp;width=100%&amp;height=500&amp;lang=ru_RU&amp;sourceType=constructor&amp;scroll=true"></script>
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