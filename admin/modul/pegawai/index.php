<?php 

include 'sesi.php';
$nama_app = " | Absensi Pegawai";
$modul = (isset($_GET['s']))?$_GET['s']:"awal";
switch ($modul) {
	case 'page': default: $judul=" Data Pegawai $nama_app"; include 'page.php'; break;
	case 'delete': include 'delete.php'; break;
	
}


 ?>