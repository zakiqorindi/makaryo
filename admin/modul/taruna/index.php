<?php 

include 'sesi.php';
$nama_app = " | Absensi Taruna";
$modul = (isset($_GET['s']))?$_GET['s']:"awal";
switch ($modul) {
	case 'page': default: $judul=" Data Taruna $nama_app"; include 'page.php'; break;
	case 'delete': include 'delete.php'; break;
	
}


 ?>