<?php 
	include 'koneksi.php';
	$db = new dbconnect();
	$conn = $db->connect();
	$id = $_POST['ID'];
	$npm = $_POST['NPM'];
	$nama = $_POST['NAMA'];
	$kelas = $_POST['KELAS'];

	if (isset($_POST['update'])) {
				$ubah = mysqli_query($conn,"UPDATE `mahasiswa` SET `NPM` = '$npm', `NAMA MAHASISWA` = '$nama', `KELAS` = '$kelas' WHERE `mahasiswa`.`ID` = $id;");
				header("location:latihan1.php");
			}

?>