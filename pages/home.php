<div style="margin-top: 25px">

<script src="/js/jssor.slider.mini.js"></script>
<!-- use jssor.slider.debug.js instead for debug -->
<script>
	jQuery(document).ready(function ($) {
		var jssor_1_SlideshowTransitions = [
			{$Duration: 1200, $Opacity: 2}
		];
		var jssor_1_options = {
			$AutoPlay: true,
			$SlideshowOptions: {
				$Class: $JssorSlideshowRunner$,
				$Transitions: jssor_1_SlideshowTransitions,
				$TransitionsOrder: 1
			},
			$ArrowNavigatorOptions: {
				$Class: $JssorArrowNavigator$
			},
			$BulletNavigatorOptions: {
				$Class: $JssorBulletNavigator$
			}
		};
		var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);
		//responsive code begin
		//you can remove responsive code if you don't want the slider scales while window resizing
		function ScaleSlider() {
			var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
			if (refSize) {
				refSize = Math.min(refSize, 750);
				jssor_1_slider.$ScaleWidth(refSize);
			}
			else {
				window.setTimeout(ScaleSlider, 30);
			}
		}

		ScaleSlider();
		$(window).bind("load", ScaleSlider);
		$(window).bind("resize", ScaleSlider);
		$(window).bind("orientationchange", ScaleSlider);
		//responsive code end
		//responsive code begin
		//you can remove responsive code if you don't want the slider scales while window resizing
		function ScaleSlider() {
			var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
			if (refSize) {
				refSize = Math.min(refSize, 750);
				jssor_1_slider.$ScaleWidth(refSize);
			}
			else {
				window.setTimeout(ScaleSlider, 30);
			}
		}

		ScaleSlider();
		$(window).bind("load", ScaleSlider);
		$(window).bind("resize", ScaleSlider);
		$(window).bind("orientationchange", ScaleSlider);
		//responsive code end
	});
</script>
<style>
	/* jssor slider bullet navigator skin 05 css */
	/*
	.jssorb05 div           (normal)
	.jssorb05 div:hover     (normal mouseover)
	.jssorb05 .av           (active)
	.jssorb05 .av:hover     (active mouseover)
	.jssorb05 .dn           (mousedown)
	*/
	.jssorb05 {
		position: absolute;
	}

	.jssorb05 div, .jssorb05 div:hover, .jssorb05 .av {
		position: absolute;
		/* size of bullet elment */
		width: 16px;
		height: 16px;
		background: url('img/b05.png') no-repeat;
		overflow: hidden;
		cursor: pointer;
	}

	.jssorb05 div {
		background-position: -7px -7px;
	}

	.jssorb05 div:hover, .jssorb05 .av:hover {
		background-position: -37px -7px;
	}

	.jssorb05 .av {
		background-position: -67px -7px;
	}

	.jssorb05 .dn, .jssorb05 .dn:hover {
		background-position: -97px -7px;
	}

	/* jssor slider arrow navigator skin 12 css */
	/*
	.jssora12l                  (normal)
	.jssora12r                  (normal)
	.jssora12l:hover            (normal mouseover)
	.jssora12r:hover            (normal mouseover)
	.jssora12l.jssora12ldn      (mousedown)
	.jssora12r.jssora12rdn      (mousedown)
	*/
	.jssora12l, .jssora12r {
		display: block;
		position: absolute;
		/* size of arrow element */
		width: 30px;
		height: 46px;
		cursor: pointer;
		background: url('img/a12.png') no-repeat;
		overflow: hidden;
	}

	.jssora12l {
		background-position: -16px -37px;
	}

	.jssora12r {
		background-position: -75px -37px;
	}

	.jssora12l:hover {
		background-position: -136px -37px;
	}

	.jssora12r:hover {
		background-position: -195px -37px;
	}

	.jssora12l.jssora12ldn {
		background-position: -256px -37px;
	}

	.jssora12r.jssora12rdn {
		background-position: -315px -37px;
	}
</style>

<div id="jssor_1"
     style="position: relative; margin: 0 auto; top: 0px; left: 0px; width: 750px; height: 400px; overflow: hidden; visibility: hidden;">
	<!-- Loading Screen -->
	<div data-u="loading" style="position: absolute; top: 0px; left: 0px;">
		<div
			style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
		<div
			style="position:absolute;display:block;background:url('img/loading.gif') no-repeat center center;top:0px;left:0px;width:100%;height:100%;"></div>
	</div>

	<div data-u="slides"
	     style="cursor: default; position: relative; top: 0px; left: 0px; width: 750px; height: 400px; overflow: hidden;">
		<!--
		<div data-p="112.50" style="display: none;">
			<img data-u="image" src="img/02.jpg"/>
		</div>

		<div data-p="112.50" style="display: none;">
			<img data-u="image" src="img/04.jpg"/>
		</div>

		<div data-p="112.50" style="display: none;">
			<img data-u="image" src="img/05.jpg"/>
		</div>

		<div data-p="112.50" style="display: none;">
			<img data-u="image" src="img/09.jpg"/>
		</div>
		-->

		<div data-p="112.50" style="display: none;"><img data-u="image" src="/img/workers/22.jpg"/></div>
		<div data-p="112.50" style="display: none;"><img data-u="image" src="/img/workers/7878.jpg"/></div>
		<div data-p="112.50" style="display: none;"><img data-u="image" src="/img/workers/444.jpg"/></div>
		<div data-p="112.50" style="display: none;"><img data-u="image" src="/img/office/7898.JPG"/></div>
		<div data-p="112.50" style="display: none;"><img data-u="image" src="/img/workers/Denis0001.jpg"/></div>
		<div data-p="112.50" style="display: none;"><img data-u="image" src="/img/workers/IMG_0031.jpg"/></div>
		<div data-p="112.50" style="display: none;"><img data-u="image" src="/img/objects/1.jpg"/></div>
		<div data-p="112.50" style="display: none;"><img data-u="image" src="/img/objects/2.jpg"/></div>
		<div data-p="112.50" style="display: none;"><img data-u="image" src="/img/objects/4.jpg"/></div>
		<div data-p="112.50" style="display: none;"><img data-u="image" src="/img/objects/6.jpg"/></div>
		<div data-p="112.50" style="display: none;"><img data-u="image" src="/img/objects/9.jpg"/></div>
		<div data-p="112.50" style="display: none;"><img data-u="image" src="/img/objects/10.jpg"/></div>


	</div>

	<!-- Bullet Navigator -->
	<div data-u="navigator" class="jssorb05" style="bottom:16px;right:16px;" data-autocenter="1">
		<!-- bullet navigator item prototype -->
		<div data-u="prototype" style="width:16px;height:16px;"></div>
	</div>
	<!-- Arrow Navigator -->
		<span data-u="arrowleft" class="jssora12l" style="top:0px;left:0px;width:30px;height:46px;"
		      data-autocenter="2"></span>
		<span data-u="arrowright" class="jssora12r" style="top:0px;right:0px;width:30px;height:46px;"
		      data-autocenter="2"></span>
	<a href="http://www.jssor.com" style="display:none">Slideshow Maker</a>
</div>

<div style="padding:5px;">
	<h3><em><strong>НПФ "Мунайгаз инжиниринг Лтд"</strong></em></h3>
	ТОО Научно-производственная фирма «Мунайгаз инжиниринг Лтд» - независимая
	инженерная компания по оказанию широкого спектра услуг для предприятий нефтегазового комплекса Республики
	Казахстан.
	<p>НПФ Мунайгаз инжиниринг стабильно работающая компания, в число заказчиков которой входят такие фирмы, как АО
		«КазТрансОйл», АО «Интергаз Центральная Азия», ТОО «Атырауский нефтеперерабатывающий завод», ТОО
		«Тенгизшевройл», ТОО «Казахтуркмунай», ТОО «Казах Ойл Актобе», СП «Казгермунай», СНПС «Актобемунайгаз».</p>
	Независимый статус фирмы обеспечивается тем, что она не входит в состав государственных или хозяйствующих
	субъектов, не является представителем или филиалом зарубежных компаний.<br>
	Основным направлением деятельности фирмы является решение вопросов подготовки товарной нефти на
	нефтегазодобывающих месторождениях. При этом сервисные услуги осуществляются по гибкой схеме начиная от
	выполнения полного комплекса работ методом «под ключ» и до оказания конкретных услуг, таких как:<p></p>

	<p>- проектирование; <br>
		- комплектация оборудованием и материалами;<br>
		- строительно-монтажные работы; <br>
		- неразрушающий контроль качества сварных соединений;<br>
		- технический надзор за качеством строительно-монтажных работ;<br>
		- пусконаладочные работы. </p>

	<p>По проектам НПФ «Мунайгаз инжиниринг Лтд» построены и введены в эксплуатацию установка по подготовке нефти на
		месторождении «Сайгак» производительностью 1500 тыс. т/год, установка по подготовке нефти на месторождении
		«Кокжиде» производительностью - 160 000 т/год, установка очистки нефти от сероводорода и меркаптанов
		производительностью до 600 тыс. т/год, при этом два последних объекта построены методом «под ключ», в т.ч. с
		применением собственной разработки - технологии очистки нефти от сероводорода и меркаптанов. Большое
		применение в нефтегазовой отрасли нашли разработанные фирмой технологические комплексы по подготовке нефти
		до товарного качества при испытаниях и исследованиях разведочных скважин, что позволяет исключить сжигание
		продукции скважин в земляных амбарах. При этом применение промышленного серийного оборудования позволяет в
		дальнейшем использовать его путем включения в состав установок подготовки нефти на этапах опытно -
		промышленной и промышленной эксплуатации месторождения. Такие комплексы построены на месторождениях
		«Алибекмола» «Каратюбе Южное», «Восточный Мортук», «Новобогатинское Западное», «Акжар». Новейшей разработкой
		в этом направлении является комплектно-блочная установка позволяющая выполнить монтаж в полевых условиях в
		сжатые сроки (5-10 дней) с последующим демонтажем и передислокацией на новые объекты.</p>
</div>

</div>