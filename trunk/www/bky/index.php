<?php
	//adding include file path , PATH_SEPARATOR is default php constant
	set_include_path( get_include_path(). PATH_SEPARATOR . 'D:/svn/trunk/' );

	//including framework main
	include 'libs/framework/main.class.php';
	main::createApp();

?>
