<?php 
include_once "app/Controller.php";
include_once "app/Artist.php";

$artist = new Artist();

if ($_POST['btn-simpan']) {
	$artist->input();
	header("location:index.php?page=artist_tampil");
}

if ($_POST['btn-edit']) {
	$artist->update();
	header("location:index.php?page=artist_tampil");
}

if ($_GET['delete-id']) {
	$artist->delete($_GET['delete-id']);
	header("location:index.php?page=artist_tampil");
}

 ?>