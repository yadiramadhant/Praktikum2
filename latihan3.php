<h1>Ubah Data Mahasiswa</h1>
<?php
	include 'koneksi.php';
	$db = new dbconnect();
	$conn = $db->connect();
	$id = base64_decode($_GET['id']);

	$query = mysqli_query($conn,"SELECT*FROM mahasiswa WHERE ID='$id'");
			if ($query) {
				$data = mysqli_fetch_array($query);
			}
?>
<form action="latihan3_proses.php" method="POST">
	<table>
		<tr>
			<td>ID</td>
			<td><input type="text" name="ID" value="<?php echo $data['ID']; ?>" readonly></td>
		</tr>
		<tr>
			<td>NPM</td>
			<td><input type="text" name="NPM" value="<?php echo $data['NPM']; ?>"></td>
		</tr>
		<tr>
			<td>Nama Mahasiswa</td>
			<td><input type="text" name="NAMA" value="<?php echo $data['NAMA MAHASISWA']; ?>"></td>
		</tr>
		<tr>
			<td>Kelas</td>
			<td><input type="text" name="KELAS" value="<?php echo $data['KELAS']; ?>"></td>
		</tr>
		<tr>
			<td><input type="submit" name="update" value="Ubah"></td>
		</tr>
	</table>
</form>