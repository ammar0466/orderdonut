<?php

	// mysql_connect('localhost','root','') or die("cannot");
	// mysql_select_db('mudah');

	$conn = mysqli_connect('localhost','root','','mudah');

	if (!$conn) {
		# code...
		die('Cannot connect to database'.mysqli_connect_error());
	}

?>