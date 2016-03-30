<div style="padding:5px;">
	
	<div style="padding: 0px 25px">
		<h2 style="text-align: center">Контакты</h2>
		<div class="contact_info">
			<div class="connection">Генеральный директор</div>
			<img src="/img/random/to_atel.png"/>

			<div class="telf">
				+7 7132 773584
			</div>
			<img src="/img/random/to_mail.png"/>

			<div class="telf">
				director@mgeltd.kz
			</div>
		</div>

		<div class="contact_info">
			<div class="connection">Юридический отдел</div>
			<img src="/img/random/to_atel.png"/>

			<div class="telf">
				+7 7132 773584
			</div>
			<img src="/img/random/to_mail.png"/>

			<div class="telf">
				zan@mgeltd.kz
			</div>
		</div>

		<div class="contact_info">
			<div class="connection">Проектный отдел</div>
			<img src="/img/random/to_atel.png"/>

			<div class="telf">
				+7 7132 773583
			</div>
			<img src="/img/random/to_mail.png"/>

			<div class="telf">
				project@mgeltd.kz
			</div>
		</div>

		<div class="contact_info">
			<div class="connection">Отдел тех. надзора и контроля качества</div>
			<img src="/img/random/to_atel.png"/>

			<div class="telf">
				+7 7132 248340
			</div>
			<img src="/img/random/to_mail.png"/>

			<div class="telf">
				technadzor@mgeltd.kz
			</div>
		</div>

		<div class="contact_info">
			<div class="connection">Электротехническая лаборатория</div>
			<img src="/img/random/to_atel.png"/>

			<div class="telf">
				+7 7132 246615
			</div>
			<img src="/img/random/to_mail.png"/>

			<div class="telf">
				energy@mgeltd.kz
			</div>
		</div>

		<div class="contact_info">
			<div class="connection">Бухгалтерия</div>
			<img src="/img/random/to_atel.png"/>

			<div class="telf">
				+7 7132 516511
			</div>
			<img src="/img/random/to_atel.png"/>

			<div class="telf">
				+7 7132 515078
			</div>
			<img src="/img/random/to_mail.png"/>

			<div class="telf">
				audit@mgeltd.kz
			</div>
		</div>
	</div>


	<style>
		@font-face {
			font-family: "bebase_bold";
			src: url(/fonts/bebasneue_bold-webfont.ttf) format("truetype");
		}

		.connection {
			font-family: bebase_bold;
			font-size: 17px;
			color: #3592AF;
		}

		.contact_info {
			margin-top: 10px;
		}

		.telf {
			border: 1px solid #D2D2D2;
			border-radius: 4px;
			font-size: 14px;
			color: #333;
			padding: 0.2em 0.5em;
			margin: 0px 0.7em 0px 0.3em;
			display: inline-block;
		}

		#map {
			width: 98%;
			height: 775px;
			padding: 0;
			margin: 0;
			border: 1px solid black;
			display: inline-block;
		}

		#mapwraper {
			text-align: center;
		}

		.find_me {
			text-align: center;
			color: #444;
		}

		.find_me > img {
			margin-top: -15px;
		}
	</style>

	<div id="mapwraper">
		<h3><strong>Схема проезда</strong></h3>

		<div class="find_me"><img src="/img/random/location.png"/>(НУЖЕН АДРЕС!) г.Уфа, ул.Пархоменко 156/3, офис 503</div>
		<div id="map"></div>
	</div>

	<script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>
	<script type="text/javascript">
		ymaps.ready(init);
		var myMap, myPlacemark;
		function init() {
			myMap = new ymaps.Map("map", {
				center: [
					50.31777518, 57.09869061
				],
				zoom: 14
			});
			myPlacemark = new ymaps.Placemark([
				50.31777518, 57.09869061
			], {
				hintContent: 'Мунайгаз инжиниринг',
				balloonContent: 'ТОО Научно-производственная фирма Мунайгаз инжиниринг Лтд',
			}, {
				iconLayout: 'default#image',
				iconImageHref: '/img/random/marker.png',
				iconImageSize: [30, 42],
				iconImageOffset: [-3, -42]
			});
			myMap.geoObjects.add(myPlacemark);
		}
	</script>
</div>