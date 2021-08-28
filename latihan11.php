<h1>Ubah Data Nilai</h1>
<?php
	include 'koneksi.php';
	$db = new dbconnect();
	$conn = $db->connect();
	$id = base64_decode($_GET['id']);

	$query = mysqli_query($conn,"SELECT*FROM nilai WHERE ID='$id'");
			if ($query) {
				$data = mysqli_fetch_array($query);
			}
?>
<form action="latihan11_proses.php" method="POST">
	<table>
		<tr>
			<td>ID</td>
			<td><input type="text" name="ID" value="<?php echo $data['ID']; ?>" readonly></td>
		</tr>
		<tr>
			<td>NPM</td>
			<td><input type="text" name="npm" value="<?php echo $data['npm']; ?>"></td>
		</tr>
		<tr>
			<td>Nama Mahasiswa</td>
			<td><input type="text" name="nama_mahasiswa" value="<?php echo $data['nama mahasiswa']; ?>"></td>
		</tr>
		<tr>
			<td>Matkul</td>
			<td><input type="text" name="matkul" value="<?php echo $data['matkul']; ?>"></td>
		</tr>
		<tr>
			<td>Nama Dosen</td>
			<td><input type="text" name="nama_dosen" value="<?php echo $data['nama dosen']; ?>"></td>
		</tr>
		<tr>
			<td>Nilai</td>
			<td><input type="text" name="nilai" value="<?php echo $data['nilai']; ?>"></td>
		</tr>
		<tr>
			<td><input type="submit" name="update" value="Ubah"></td>
		</tr>
	</table>
</form>