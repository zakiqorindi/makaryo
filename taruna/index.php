<?php 

session_start();
include 'sesi.php';
$nama_app = " | Absensi Taruna";
$modul = (isset($_GET['m']))?$_GET['m']:"awal";
switch ($modul) {
	case 'awal': default: $judul = "Absen $nama_app"; include 'awal.php'; break;
	case 'akun': $judul="Profil Admin $nama_app"; include 'modul/taruna/akun.php'; break;
	
	
	
}




 ?>