<?php 
session_start();
include "koneksi.php";
$submit = $_POST['submit'];

if(isset($submit)){
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    $q = mysqli_query($conn,"SELECT * FROM `user` WHERE `username`='$username' AND `password`='$password'");
    $row = mysqli_fetch_assoc($q);
    if($row>0){
        $_SESSION['username'] = $username;
        header('location:feed.php');
    }else{
        echo "username/password salah";
    }
}