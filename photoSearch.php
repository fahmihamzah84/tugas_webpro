<?php
	include 'koneksi.php';
	$search = $_GET['search'];
	$q = mysqli_query($conn, "select * from photo where caption like '$search'" );
	if ($q) {
		$data = array();
		while ($row = mysqli_fetch_assoc($q)){
			array_push($data, $row);
			
		}
		echo $row;
		$x = json_encode($data);
		echo $x;
	}else{
		echo "string";
	}