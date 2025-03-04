<?php 

include 'sesi.php';
$modul = (isset($_GET['s']))?$_GET['s']:"awal";
$nama_app = " | Absensi Taruna";
switch ($modul) {
	case 'awal': default: $judul="Data Absen $nama_app"; include 'page.php';  break;
	case 'keterangan1': $judul="Keterangan Taruna $nama_app"; include 'keterangan.php'; break;
	case 'rekap': $judul="Rekap Absen $nama_app"; include 'rekap.php'; break;
	case 'print_rekap': $judul="Print Rekap Absen $nama_app"; include 'print_rekap.php'; break;
	case 'excel': $judul="Export Excel $nama_app"; include 'excel.php'; break;
	case 'word': $judul="Export word $nama_app"; include 'word.php'; break;
	
	
		
}

 ?>