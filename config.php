<?php
	$connection = new mysqli('localhost','root','','codekamp');

	if($connection->connect_error) {
		echo $connection->error;
		die;
	}
?>
