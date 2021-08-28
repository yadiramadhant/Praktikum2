<h1>Daftar Mahasiswa</h1>
	<p>
        <a href="latihan5.php">Dosen</a>
        <a href="latihan9.php">Nilai</a>
    </p>
<body>
	<table border="1" cellpadding="5">
		<tr>
			<th>NPM</th>
			<th>Nama Mahasiswa</th>
			<th>Kelas</th>
			<th>Ubah</th>
			<th>Hapus</th>
		</tr>
		
			<?php
				include 'koneksi.php';
				$db = new dbconnect();
				$conn = $db->connect();

				$tampildata = mysqli_query($conn, "select * from mahasiswa");
					while ($data = mysqli_fetch_array($tampildata)) { ?>
						<tr>
							<td> <?php echo $data['NPM'] ?> </td>
							<td> <?php echo $data['NAMA MAHASISWA'] ?> </td>
							<td> <?php echo $data['KELAS'] ?> </td>
							<td> <a href="latihan3.php?id=<?php echo base64_encode($data['ID']) ?>">Ubah</a> </td>
							<td> <a href="latihan4.php?id=<?php echo base64_encode($data['ID']) ?>">Hapus</a> </td>
						</tr>
			<?php } ?>
	</table>
	<a href="latihan2.php">Input Data Mahasiswa</a>
</body>