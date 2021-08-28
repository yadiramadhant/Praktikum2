<h1>Ubah Data Dosen</h1>
<?php
	include 'koneksi.php';
	$db = new dbconnect();
	$conn = $db->connect();
	$id = base64_decode($_GET['id']);

	$query = mysqli_query($conn,"SELECT*FROM dosen WHERE ID='$id'");
			if ($query) {
				$data = mysqli_fetch_array($query);
			}
?>
<form action="latihan7_proses.php" method="POST">
	<table>
		<tr>
			<td>ID</td>
			<td><input type="text" name="ID" value="<?php echo $data['ID']; ?>" readonly></td>
		</tr>
		<tr>
			<td>NPD</td>
			<td><input type="text" name="npd" value="<?php echo $data['npd']; ?>"></td>
		</tr>
		<tr>
			<td>Nama Dosen</td>
			<td><input type="text" name="nama" value="<?php echo $data['nama dosen']; ?>"></td>
		</tr>
		<tr>
			<td>Matkul</td>
			<td><input type="text" name="matkul" value="<?php echo $data['matkul']; ?>"></td>
		</tr>
		<tr>
			<td><input type="submit" name="update" value="Ubah"></td>
		</tr>
	</table>
</form>