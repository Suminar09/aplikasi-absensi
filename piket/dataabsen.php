<!DOCTYPE html>
<html>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
  background-color:grey;
  color: azure;
}

th {
  border: 1px solid black;
  text-align: center;
  padding: 8px;
  background-color: darkolivegreen;
}
td {
  border: 1px solid black;
  text-align: left;
  padding: 8px;
}
.link{
        font-size: 15pt;
}
.link:hover{
	color: red;
}
.link:link{
	color: white;
}
.link:active{
	color: green;
}

</style>
</head>
<body>
	
	<br/>
	<br/>
	<table>
		<tr>
			<th>No</th>
			<th>NAMA PIKET</th>
			<th>NAMA SISWA</th>
			<th>KELAS</th>
			<th>HARI</th>
			<th>TANGGAL</th>
			<th>KETERANGAN</th>
			<th>OPSI</th>
		</tr>
		<?php 
		include 'koneksi.php';
		$no = 1;
		$data = mysqli_query($koneksi,"SELECT absen.IDABSEN, 
		user.NAMAUSER AS NAMAUSER, siswa.NAMA AS NAMA, absen.KELAS,
		 absen.HARI, absen.TANGGAL, absen.KETERANGAN
        FROM absen 
        JOIN user ON absen.ID = user.ID 
        JOIN siswa ON absen.IDSISWA = siswa.IDSISWA");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['NAMAUSER']; ?></td>
				<td><?php echo $d['NAMA']; ?></td>
				<td><?php echo $d['KELAS']; ?></td>
				<td><?php echo $d['HARI']; ?></td>
				<td><?php echo $d['TANGGAL']; ?></td>
				<td><?php echo $d['KETERANGAN']; ?></td>
				<td>
					<a class="link" href="halamanpiket.php?page=editabsen&id=<?php echo $d['IDABSEN']; ?>">EDIT</a>
					<a class="link" href="hapusabsen.php?id=<?php echo $d['IDABSEN']; ?>">HAPUS</a>
				</td>
			</tr>
			<?php 
		}
		?>
	</table>
	
 
</body>
</html>