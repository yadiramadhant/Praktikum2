<?php 
	include 'koneksi.php';
	$db = new dbconnect();
	$conn = $db->connect();
	$id = $_POST['ID'];
	$npm = $_POST['npm'];
	$nama_mahasiswa = $_POST['nama_mahasiswa'];
	$matkul = $_POST['matkul'];
	$nama_dosen = $_POST['nama_dosen'];
	$nilai = $_POST['nilai'];

	if (isset($_POST['update'])) {
				$ubah = mysqli_query($conn,"UPDATE `nilai` SET `npm` = '$npm', `nama mahasiswa` = '$nama_mahasiswa', `matkul` = '$matkul', `nama dosen` = '$nama_dosen', `nilai` = '$nilai' WHERE `nilai`.`ID` = $id;");
				header("location:latihan9.php");
			}

?>