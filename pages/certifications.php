<div style="padding: 10px; text-align: center">
	<?php
	$path = "/img/documents/certifications/";
	$certifications = scandir('.' . $path);
	echo "<h3>Сертификаты</h3>";
	foreach ($certifications as $k => $v)
	{
		if ($v != '.' && $v != '..')
		{
			$srcB = $path . $v;
			$srcS = '/components/get_small_img.php?size=300&src=' . $srcB;
			?>
			<figure style="width: 225px; height: 225px; text-align: center; float: left">
				<a href="<?= $srcB ?>">
					<p><img src="<?= $srcS ?>" style="width: 200px; height: 200px"></p>
				</a>
			</figure>
		<?php
		}
	}
	?>
</div>