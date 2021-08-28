<h1>Input Data Mahasiswa</h1>
<?php
	include 'koneksi.php';
	$db = new dbconnect();
	$conn = $db->connect();

	if(isset($_POST['save']))
	{
		$query = mysqli_query($conn,"INSERT INTO `mahasiswa` (`ID`, `NPM`, `NAMA MAHASISWA`, `KELAS`) VALUES (NULL, '".$_POST['NPM']."', '".$_POST['NAMA']."', '".$_POST['KELAS']."');
		");
		header("location:latihan1.php");
	}
?>
<form action="" method="POST">
	<table>
		<tr>
			<td>NPM</td>
			<td><input type="text" name="NPM"></td>
		</tr>
		<tr>
			<td>Nama Mahasiswa</td>
			<td><input type="text" name="NAMA"></td>
		</tr>
		<tr>
			<td>Kelas</td>
			<td><input type="text" name="KELAS"></td>
		</tr>
		<tr>
			<td><input type="submit" name="save" value="Simpan"></td>
		</tr>
	</table>
</form>