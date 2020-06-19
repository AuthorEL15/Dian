<center><h2>Daftar Album</h2></center>
<div class="tambah">
<a href="index.php?page=album_input">Tambah</a>
</div>
<?php 

include "app/Album.php";

$album = new Album();
$rows = $album->tampil();

?>

<table>
	<tr>
		<th>NO</th>
		<th>NAMA</th>
		<th>ARTIS</th>
		<th>EDIT</th>
	</tr>
	<?php $no=0; foreach ($rows as $row) { $no++;?>
		<tr>
			<td><?php echo $no; ?></td>
			<td><?php echo $row['album_name']; ?></td>
			<td><?php echo $row['ARTIST']; ?></td>
			<td><a href="dashboard.php?page=album_edit&id=<?php echo $row['album_id']; ?>" class="btn">Edit</a></td>
		</tr>
	<?php } ?>
</table>