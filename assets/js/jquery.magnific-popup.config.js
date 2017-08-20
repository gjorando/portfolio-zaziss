$(document).ready(function()
{
	$('.gallery_grid').magnificPopup({
		delegate: 'a',
		type: 'image',
		gallery:{enabled:true}
	});
});
