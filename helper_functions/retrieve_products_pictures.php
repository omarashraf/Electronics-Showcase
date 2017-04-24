<?php
	require_once "db_connection.php";

	$sql = "SELECT * FROM products";
	$result = mysqli_query($conn, $sql);

	$products_arr[] = array();

	// Sample retrieving data from result query
	if (mysqli_num_rows($result) > 0) {
		while($row = mysqli_fetch_assoc($result)) {
			$products_arr[] = $row;
		}
	}
?>