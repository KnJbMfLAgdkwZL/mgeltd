<?php
function check(&$v)
{
	if (isset($v) && !empty($v))
	{
		return true;
	}
	return false;
}

function format_str($str)
{
	$str = preg_replace("/[^a-z0-9_ \/\.]/i", "", $str);
	$str = trim($str);
	$str = stripslashes($str);
	$str = htmlspecialchars($str);
	return $str;
}

function get_first_img_in_folder($folder)
{
	$types = array(
		IMAGETYPE_GIF,
		IMAGETYPE_JPEG,
		IMAGETYPE_PNG,
	);
	if (is_dir($folder))
	{
		$files = scandir($folder);
		foreach ($files as $v)
		{
			if ($v != '.' && $v != '..')
			{
				if (is_file($folder . $v))
				{
					if (in_array(exif_imagetype($folder . $v), $types))
					{
						return $v;
					}
				}
			}
		}
	}
	return false;
}