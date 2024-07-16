<?php 
// mengaktifkan session pada php
session_start();
 
// menghubungkan php dengan koneksi database
include 'koneksi.php';
 
// menangkap data yang dikirim dari form login
$username = $_POST['USERNAME'];
$password = $_POST['PASSWORD'];
 
 
// menyeleksi data user dengan username dan password yang sesuai
$login = mysqli_query($koneksi,"select * from user where USERNAME='$username' and PASSWORD='$password'");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);
 
// cek apakah username dan password di temukan pada database
if($cek > 0){
 
	$data = mysqli_fetch_assoc($login);
 
	// cek jika user login sebagai admin
	if($data['PASSWORD']=="090582"){
 
		// buat session login dan username
		$_SESSION['USERNAME'] = $username;
		$_SESSION['PASSWORD'] = "090582";
		// alihkan ke halaman dashboard admin
		header("location:halamanadmin.php");
 
	// cek jika user login sebagai siswa
	}else if($data['PASSWORD']=="piket"){
		// buat session login dan username
		$_SESSION['USERNAME'] = $username;
		$_SESSION['PASSWORD'] = "piket";
		// alihkan ke halaman dashboard pegawai
		header("location:piket/halamanpiket.php");
 
 
	}else{
 
		// alihkan ke halaman login kembali
		header("location:index.php?pesan=gagal");
	}	
}else{
	header("location:index.php?pesan=gagal");
}
 
?>