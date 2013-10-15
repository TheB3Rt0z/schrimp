$(document).ready(function()
{
	$(window).unload(function()
	{
		$('div#loading').css('top',
				             0);
	});
});