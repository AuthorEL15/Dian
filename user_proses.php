<?php 
include_once "app/Controller.php";
include_once "app/User.php";

$user = new User();

if ($_POST['btn-simpan']) {
	$user->input();
	header("location:index.php?page=user_tampil");
}

if ($_POST['btn-edit']) {
	$user->update();
	header("location:index.php?page=user_tampil");
}

if ($_GET['delete-id']) {
	$user->delete($_GET['delete-id']);
	header("location:index.php?page=user_tampil");
}

 ?>