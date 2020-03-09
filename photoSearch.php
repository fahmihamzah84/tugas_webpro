<?php
	include 'koneksi.php'
	$search = $_GET['search'];
	$q = mysqli_query($conn, "SELECT * FROM 'photo' WHERE 'caption' LIKE '%$search%" )
	if ($q) {
		$data = array();
		while ($row = mysqli_fetch_assoc($q)){
			array_push($data, $row);
		}
		$x = json_encode($data)
		echo $x;
	}else{
		echo "string";
	}