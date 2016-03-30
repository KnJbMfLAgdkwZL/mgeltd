<?php
//Key == folder name
//Value == title name for HTML
$folders = array(
	1 => 'Архитектурная, градостроительная и строительная деятельность на территории РК',
	2 => 'Аттестат промышленной безопасности',
	3 => 'Выполнение работ и оказание услуг в области охраны окружающей среды',
	4 => 'Выполнение работ и оказание услуг в области охраны окружающей среды Утепов Н.Б',
	5 => 'Деятельность по монтажу, наладке и техническому обслуживанию средств охранной сигнализации',
	6 => 'Деятельность по монтажу, наладке и техническому обслуживанию средств охранной сигнализации и противопожарной автоматики на территории РК',
	7 => 'Изготовление, монтаж, ремонт химического, бурового, нефтегазопромыслового, геологоразведовочного, взрывозащищенного электротехнического оборудования',
	8 => 'Обращение с источниками ионизирующего излучения',
	9 => 'Перевозка опасного груза автомобильным транспортом (Класс 7)',
	10 => 'Передача и распределение электриечской энергии, эксплуатация электрических сетей и подстанций',
	11 => 'Проектирование горных, нефтехимических, химических, нефтегазоперерабатывающих производств',
	12 => 'Разрешение на эмиссии в окружающую среду',
	13 => 'Эксплуатация магистральных газопроводов',
	14 => 'Эксплуатация систем газификации жилых и коммунально-бытовых объектов'
);
$path = "/img/documents/license/";
?>

<div style="margin-top: 25px">
	<?php
	if (check($_GET['folder']))
	{
		$folder = format_str($_GET['folder']);
		$licenses = scandir('.' . $path . $folder);
		$title = $folders[$folder];
		echo "<h3>{$title}</h3>";
		foreach ($licenses as $k => $v)
		{
			if ($v != '.' && $v != '..')
			{
				$srcB = $path . $folder . '/' . $v;
				$srcS = '/components/get_small_img.php?size=300&src=' . $srcB;
				?>
				<figure style="width: 245px; height: 245px; text-align: center; display: inline-block">
					<a href="<?= $srcB ?>">
						<p><img src="<?= $srcS ?>" style="width: 200px; height: 200px"></p>
					</a>
				</figure>
			<?php
			}
		}
	}
	else
	{
		foreach ($folders as $k => $v)
		{
			$folder_path = '.' . $path . $k . '/';
			$img = get_first_img_in_folder($folder_path);
			$img_path = $folder_path . $img;
			$src = '/components/get_small_img.php?size=300&src=' . $img_path;
			?>
			<figure style="width: 250px; height: 350px; text-align: center; display: inline-block; float: left">
				<a href="?r=license&folder=<?= $k ?>">
					<p><img src="<?= $src ?>" style="width: 200px; height: 200px"></p>
					<figcaption><?= $v ?></figcaption>
				</a>
			</figure>
		<?php
		}
	}
	?>
</div>