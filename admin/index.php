<?php 
session_start();
include_once 'sesi.php';
$nama_app = " | Absensi Taruna";
$modul =  (isset($_GET['m']))?$_GET['m']:"awal";
switch ($modul) {
	case 'awal': default: $judul = "Dashboard $nama_app"; include 'awal.php'; break;
	case 'admin': include 'modul/admin/index.php'; break;
	case 'akun': $judul="Profil Admin $nama_app"; include 'modul/admin/akun.php'; break;
	case 'taruna': $judul = "Data Taruna $nama_app"; include 'modul/taruna/index.php'; break;
	case 'absen': $judul = "Data Absen $nama_app"; include 'modul/absen/index.php'; break;
	case 'setting': $judul = "Pengaturan $nama_app"; include 'modul/pengaturan/page.php'; break;
	case 'keterangan': $judul = "Data keterangan $nama_app"; include 'modul/keterangan/page.php'; break;
	
}

 ?>