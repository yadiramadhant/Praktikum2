<?php 
	include 'koneksi.php';
	$db = new dbconnect();
	$conn = $db->connect();
	$id = $_POST['ID'];
	$npd = $_POST['npd'];
	$nama = $_POST['nama'];
	$matkul = $_POST['matkul'];

	if (isset($_POST['update'])) {
				$ubah = mysqli_query($conn,"UPDATE `dosen` SET `npd` = '$npd', `nama dosen` = '$nama', `matkul` = '$matkul' WHERE `dosen`.`ID` = $id;");
				header("location:latihan5.php");
			}

?>