<?php 
include_once "app/Controller.php";
include_once "app/Track.php";

$photo = new Photos();

if ($_POST['btn-simpan']) {
	$track->input();
	header("location:index.php?page=track_tampil");
}

if ($_POST['btn-edit']) {
	$track->update();
	header("location:index.php?page=track_tampil");
}

if ($_GET['delete-id']) {
	$track->delete($_GET['delete-id']);
	header("location:index.php?page=track_tampil");
}

 ?>