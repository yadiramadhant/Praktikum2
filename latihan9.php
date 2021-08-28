<h1>Daftar Nilai</h1>
	<p>
        <a href="latihan1.php">Mahasiswa</a>
        <a href="latihan5.php">Dosen</a>
    </p>
<body>
	<table border="1" cellpadding="5">
		<tr>
			<th>NPM</th>
			<th>Nama Mahasiswa</th>
			<th>Matkul</th>
			<th>Nama Dosen</th>
			<th>Nilai</th>
			<th>Ubah</th>
			<th>Hapus</th>
		</tr>
		
			<?php
				include 'koneksi.php';
				$db = new dbconnect();
				$conn = $db->connect();

				$tampildata = mysqli_query($conn, "select * from nilai");
					while ($data = mysqli_fetch_array($tampildata)) { ?>
						<tr>
							<td> <?php echo $data['npm'] ?> </td>
							<td> <?php echo $data['nama mahasiswa'] ?> </td>
							<td> <?php echo $data['matkul'] ?> </td>
							<td> <?php echo $data['nama dosen'] ?> </td>
							<td> <?php echo $data['nilai'] ?> </td>
							<td> <a href="latihan11.php?id=<?php echo base64_encode($data['ID']) ?>">Ubah</a> </td>
							<td> <a href="latihan12.php?id=<?php echo base64_encode($data['ID']) ?>">Hapus</a> </td>
						</tr>
			<?php } ?>
	</table>
	<a href="latihan10.php">Input Data Dosen</a>
</body>