jQuery(document).ready(function()
{
	if (jQuery('html').is('.ie6, .ie7, .ie8'))
	{
		alert('Using OLD IE'); // code for old IE versions
	}
	else if (jQuery('html').is('.ie'))
	{
		alert('Using Internet Explorer'); // code for modern IE versions
	}
	else
	{
		// code for other "normal" browsers
	}
});