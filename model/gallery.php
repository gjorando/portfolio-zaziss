<?php

class GalleryElement
{
	public $image;
	public $title;
	public $subtitle;
	public $desc;
	public $disclaimer;

	function __construct($i, $t, $st="", $de="", $di="")
	{
		$this->image = $i;
		$this->title = $t;
		$this->subtitle = $st;
		$this->desc = $de;
		$this->disclaimer = $di;
	}

	function build_list_element()
	{
		echo '<li>';
		echo '<a href="/data/gallery/full/' . $this->image . '">';
		echo '<img src="/data/gallery/preview/' . $this->image . '" />';
		echo '<div class="grid_overlay">';
		echo '<div class="grid_overlay_content">';
		echo '<h3>' . $this->title . '</h3>';
		echo '<h4>' . $this->subtitle . '</h4>';
		echo '<div class="grid_desc">' . $this->desc . '</div>';
		echo '<div class="grid_disclaimer">' . $this->disclaimer . '</div>';
		echo '</div>';
		echo '</div>';
		echo '</a>';
		echo '</li>';
	}
}
