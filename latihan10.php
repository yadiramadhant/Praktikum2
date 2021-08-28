<h1>Input Data Nilai</h1>
<?php
	include 'koneksi.php';
	$db = new dbconnect();
	$conn = $db->connect();

	if(isset($_POST['save']))
	{
		$query = mysqli_query($conn,"INSERT INTO `nilai` (`ID`, `npm`, `nama mahasiswa`, `matkul`, `nama dosen`, `nilai`) VALUES (NULL, '".$_POST['npm']."', '".$_POST['nama_mahasiswa']."', '".$_POST['matkul']."', '".$_POST['nama_dosen']."', '".$_POST['nilai']."');
		");
		header("location:latihan9.php");
	}
?>
<form action="" method="POST">
	<table>
		<tr>
			<td>NPM</td>
			<td><input type="text" name="npm"></td>
		</tr>
		<tr>
			<td>Nama Mahasiswa</td>
			<td><input type="text" name="nama_mahasiswa"></td>
		</tr>
		<tr>
			<td>Matkul</td>
			<td><input type="text" name="matkul"></td>
		</tr>
		<tr>
			<td>Nama Dosen</td>
			<td><input type="text" name="nama_dosen"></td>
		</tr>
		<tr>
			<td>Nilai</td>
			<td><input type="text" name="nilai"></td>
		</tr>
		<tr>
			<td><input type="submit" name="save" value="Simpan"></td>
		</tr>
	</table>
</form>