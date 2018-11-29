<h2>Tambah Data blog</h2>
<form method="POST" action="proses/blog/save.php" enctype="multipart/form-data">
	<table>
		<tr>
			<td>Judul</td>
			<td><input type="text" name="judul"></td>
		</tr>
		<tr>
			<td>Penulis</td>
			<td><input type="text" name="penulis"></td>
		</tr>
		<tr>
			<td>konten</td>
			<td><textarea class="textarea"name="konten"></textarea>
		</tr>
		<tr>
			<td></td>
			<td><button type="submit">Simpan</button></td>
		</tr>
	</table>
</form>