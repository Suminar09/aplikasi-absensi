<!DOCTYPE html>
<html>
<head>
	<title>datasiswa</title>
	<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
  background-color:grey;
  color: aliceblue;
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
	color: blue;
}
.link:active{
	color: green;
}

</style>
</head>
<body>
	
	<a class="link" href="halamanadmin.php?page=tambahsiswa">+ TAMBAH SISWA</a>
	<br/>
	<br/>
	<table>
		<tr>
			<th>No</th>
			<th>NIS</th>
			<th>NAMA</th>
			<th>KELAS</th>
			<th>OPSI</th>
		</tr>
		<?php 
		
		include 'koneksi.php';
		$no = 1;
		$data = mysqli_query($koneksi,"select * from siswa");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['NIS']; ?></td>
				<td><?php echo $d['NAMA']; ?></td>
				<td><?php echo $d['KELAS']; ?></td>
				<td>
					<a class="link" href="halamanadmin.php?page=editsiswa&id=<?php echo $d['IDSISWA']; ?>">EDIT |</a>
					<a class="link" href="hapussiswa.php?id=<?php echo $d['IDSISWA']; ?>">HAPUS</a>
				</td>
			</tr>
			<?php 
		}
		?>
	</table>
	
 
</body>
</html>