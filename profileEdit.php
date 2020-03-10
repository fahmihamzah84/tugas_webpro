<?php
	include ("koneksi.php");
	session_start();
	$name = $_POST['nama'];
	$username = $_POST['uname'];
	$website = $_POST['website'];
	$bio = $_POST['bio'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$gender = $_POST['gender'];
	$id = $_SESSION['username'];
	$get_id = mysqli_query($conn,"SELECT * FROM `profile` WHERE `username`='$id'");
	$got = mysqli_fetch_assoc($get_id);
	$a = $got["id"];
	$new_id = (int)$a;
	echo($bio);
	$q = mysqli_query($conn, "update profile set name='$name',username='$username',website='$website',bio='$bio',email='$email',phone='$phone',gender='$gender' WHERE id='1'");
	echo("Profile : ".$q);
if ($q >0) {
		echo "done";
}else{
		echo "error";
}
