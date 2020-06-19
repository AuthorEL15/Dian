<center><h2>Daftar Artist</h2></center>
<div class="tambah">
<a href="index.php?page=artist_input">Tambah</a>
</div>

<?php 

include "app/Artist.php";

$artist = new Artist();
$rows = $artist->tampil();

?>
	<table>
	<tr>
		<th>NO</th>
		<th>NAMA</th>
		<th>EDIT</th>
	</tr>
	<?php foreach ($rows as $row) { ?>
		<tr>
			<td><?php echo $row['artist_id']; ?></td>
			<td><?php echo $row['artist_name']; ?></td>
			<td><a href="dashboard.php?page=artist_edit&id=<?php echo $row['artist_id']; ?>" class="btn">Edit</a></td>
		</tr>
	<?php } ?>
</table>