<?php 

include_once "app/Controller.php";
include_once "app/Album.php";

$id = $_GET['id'];

$album = new Album();
$row = $album->edit($id);
$lst = $album->ListArtist();

?>

<h2>EDIT ALBUM</h2>
<form method="POST" action="album_proses.php">
	<input type="hidden" name="album_id" value="<?php echo $id; ?>">
	<tr>
			<td>NAMA</td>
			<td><input type="text" name="album_name" value="<?php echo $row['album_name']; ?>" required=""></td>
		</tr>
		<tr>
			<td>ARTIS</td>
			<td>
				<select name="album_id_artist">
					<?php foreach ($lst as $ls) { ?>
					<option value="<?php echo $ls['artist_id']; ?>"<?php echo $row['album_id_artist']==$ls['artist_id'] ? " selected" : ""; ?>><?php echo $ls['artist_name']; ?></option>
					<?php } ?>
				</select>
			</td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="btn-update" value="UPDATE"></td>
		</tr>
	</table>
</form>