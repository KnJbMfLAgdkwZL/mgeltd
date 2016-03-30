<?php
//Key == folder name
//Value == title name for HTML
$folders = array(
	'office' => 'Офис',
	'workers' => 'Работники',
	'objects' => 'Объекты',
);
$path = "/img/";
?>

<div style="margin-top: 15px; padding: 10px; text-align: center">
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
				<figure style="width: 300px; height: 300px; text-align: center; float: left">
					<a href="<?= $srcB ?>">
						<p><img src="<?= $srcS ?>" style="width: 250px; height: 250px"></p>
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
			<figure style="width: 300px; height: 300px; text-align: center; float: left">
				<a href="?r=photo_gallery&folder=<?= $k ?>">
					<p><img src="<?= $src ?>" style="width: 250px; height: 250px"></p>
					<figcaption><?= $v ?></figcaption>
				</a>
			</figure>
		<?php
		}
	}
	?>
</div>