<?php

require_once('model/gallery.php');

$gallery = Array();

foreach (glob("data/gallery.d/*.php") as $filename)
{
	require_once($filename);
	$gallery[] = $elem;
}
