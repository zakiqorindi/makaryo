<?php 

$koneksi = mysqli_connect('localhost', 'root', '', 'makaryo');
$id = $_GET['id'];

$select = mysqli_query($koneksi, "SELECT * FROM tb_pegawai WHERE id='$id'");
$row = mysqli_fetch_array($select);
$hapus_foto = $row['foto'];

if ($row['foto'] == "") {
	 $query =  mysqli_query($koneksi, "DELETE FROM tb_pegawai WHERE id='$id'");
	 if ($query) {
	 	echo '<script>window.history.back()</script>';
	 	echo "<meta http-equiv='refresh' content='0'>";

	 }
	 
}else{
unlink("img/pegawai/$hapus_foto");
	 $query =  mysqli_query($koneksi, "DELETE FROM tb_pegawai WHERE id='$id'");
	
	 if ($query) {
	 	echo '<script>window.history.back()</script>';
	 	echo "<meta http-equiv='refresh' content='0'>";
	 }
}


 ?>