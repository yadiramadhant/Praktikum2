<h1>Daftar Dosen</h1>
	<p>
        <a href="latihan1.php">Mahasiswa</a>
        <a href="latihan9.php">Nilai</a>
    </p>
<body>
	<table border="1" cellpadding="5">
		<tr>
			<th>NPD</th>
			<th>Nama Dosen</th>
			<th>Matkul</th>
			<th>Ubah</th>
			<th>Hapus</th>
		</tr>
		
			<?php
				include 'koneksi.php';
				$db = new dbconnect();
				$conn = $db->connect();

				$tampildata = mysqli_query($conn, "select * from dosen");
					while ($data = mysqli_fetch_array($tampildata)) { ?>
						<tr>
							<td> <?php echo $data['npd'] ?> </td>
							<td> <?php echo $data['nama dosen'] ?> </td>
							<td> <?php echo $data['matkul'] ?> </td>
							<td> <a href="latihan7.php?id=<?php echo base64_encode($data['ID']) ?>">Ubah</a> </td>
							<td> <a href="latihan8.php?id=<?php echo base64_encode($data['ID']) ?>">Hapus</a> </td>
						</tr>
			<?php } ?>
	</table>
	<a href="latihan6.php">Input Data Dosen</a>
</body>