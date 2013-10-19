$(document).ready(function()
{
	$(window).load(function()
	{
		$('body').css('opacity',
				      1);
	});
	
	$(window).unload(function()
	{
		$('div#loading').css('top',
				             0).css('opacity',
				            		.25);
	});
});