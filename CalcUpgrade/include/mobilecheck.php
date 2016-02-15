<?php
	$css = "style";

	function isMobile()
	{
		 return preg_match("/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i", $_SERVER["HTTP_USER_AGENT"]);
	}

	if (isMobile())
	{
		$css = "stylemobile";
		$scalable = "no";
	}
	else
	{
		$css = "style";
		$scalable = "yes";
	}