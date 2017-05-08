<?php
	require_once("../libraries/scssphp-0.6.7/scss.inc.php");
	use Leafo\ScssPhp\Server;

	$directory = ".";
	Server::serveFrom($directory);
?>