<?php

require_once('model/gallery.php');

$gallery = Array();

$files = glob("data/gallery.d/*.php");
sort($files, SORT_NATURAL);
foreach ($files as $filename)
{
	require_once($filename);
	$gallery[] = $elem;
}
