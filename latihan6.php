<h1>Input Data Dosen</h1>
<?php
	include 'koneksi.php';
	$db = new dbconnect();
	$conn = $db->connect();

	if(isset($_POST['save']))
	{
		$query = mysqli_query($conn,"INSERT INTO `dosen` (`ID`, `npd`, `nama dosen`, `matkul`) VALUES (NULL, '".$_POST['npd']."', '".$_POST['nama']."', '".$_POST['matkul']."');
		");
		header("location:latihan5.php");
	}
?>
<form action="" method="POST">
	<table>
		<tr>
			<td>NPD</td>
			<td><input type="text" name="npd"></td>
		</tr>
		<tr>
			<td>Nama Dosen</td>
			<td><input type="text" name="nama"></td>
		</tr>
		<tr>
			<td>Matkul</td>
			<td><input type="text" name="matkul"></td>
		</tr>
		<tr>
			<td><input type="submit" name="save" value="Simpan"></td>
		</tr>
	</table>
</form>