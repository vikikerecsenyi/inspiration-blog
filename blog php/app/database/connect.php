<?php

	$conn = mysqli_connect("localhost", "root", "", "blog");

	if (!$conn) {
		die("Error connecting to database: " . mysqli_connect_error());
	}
?>