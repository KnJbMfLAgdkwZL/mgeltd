<?php
function make_thumb($src, $desired_width)
{
	$t = '';
	$type = exif_imagetype($src);
	if ($type == IMAGETYPE_GIF)
	{
		$source_image = imagecreatefromgif($src);
		$t = 'gif';
	}
	elseif ($type == IMAGETYPE_JPEG)
	{
		$source_image = imagecreatefromjpeg($src);
		$t = 'jpg';
	}
	elseif ($type == IMAGETYPE_PNG)
	{
		$source_image = imagecreatefrompng($src);
		$t = 'png';
	}
	header("Content-type: image/{$t}");
	/* read the source image */
	$width = imagesx($source_image);
	$height = imagesy($source_image);
	/* find the "desired height" of this thumbnail, relative to the desired width  */
	$desired_height = floor($height * ($desired_width / $width));
	/* create a new, "virtual" image */
	$virtual_image = imagecreatetruecolor($desired_width, $desired_height);
	/* copy source image at a resized size */
	imagecopyresampled($virtual_image, $source_image, 0, 0, 0, 0, $desired_width, $desired_height, $width, $height);
	/* create the physical thumbnail image to its destination */
	if ($type == IMAGETYPE_GIF)
	{
		imagegif($virtual_image);
	}
	elseif ($type == IMAGETYPE_JPEG)
	{
		imagejpeg($virtual_image);
	}
	elseif ($type == IMAGETYPE_PNG)
	{
		imagepng($virtual_image);
	}
}

include_once("/functions.php");
if (check($_GET['src']))
{
	$size = 200;
	if (check($_GET['size']))
	{
		$size = $_GET['size'];
	}
	$src = format_str($_GET['src']);
	make_thumb("../{$src}", $size);
}