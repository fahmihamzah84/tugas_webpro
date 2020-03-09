<?php
	include koneksi.php
	$name = $_POST['name'];
	$username = $_POST['username'];
	$website = $_POST['name'];
	$bio = $_POST['name'];
	$email = $_POST['name'];
	$phone = $_POST['name'];
	$gender = $_POST['name'];
	
	$q = mysql_query($conn, "UPDATE 'user' SET `name`='$name',`username`='$username',`website`='$website',`bio`='$bio',`email`='$email',`phone_number`='$phone',`gender`='$gender' WHERE `id_profile`='$id'");
if ($q >0) {
		echo "done";
}else{
		echo "error";
}
