<?php  
	include 'koneksi.php';
	$db = new dbconnect();
	$conn = $db->connect();
	$id = base64_decode($_GET['id']);
	
	$query = mysqli_query($conn, "DELETE FROM nilai WHERE ID='$id'");
	header("location:latihan9.php");

?>