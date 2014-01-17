jQuery(document).ready(function()
{	
	jQuery(window).load(function()
	{
		jQuery('body').css('opacity',
				           1);
	});
	
	jQuery(window).unload(function()
	{
		jQuery('div#loading').css('top',
				                  0).css('opacity',
				            		     .25);
	});
});