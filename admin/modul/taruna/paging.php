<?php 
$koneksi = mysqli_connect('localhost', 'root', '', 'makaryo');

    $batas = 5;
$halaman = isset($_GET['halaman']) ? (int)$_GET['halaman'] : 1;
$halaman_awal = ($halaman>1) ? ($halaman * $batas) - $batas : 0;

$previous = $halaman - 1;
$next = $halaman + 1;

$data = mysqli_query($koneksi, "SELECT * FROM tb_taruna");
$jumlah_data = mysqli_num_rows($data);
$total_halaman = ceil($jumlah_data / $batas);


$nomor = $halaman_awal+1;


// cari
if (isset($_POST['go'])) {
  $cari = $_POST['cari'];
  $taruna = mysqli_query($koneksi, "SELECT * FROM tb_taruna WHERE nama LIKE '%".$cari."%'");
}else{
  $taruna = mysqli_query($koneksi, "SELECT * FROM tb_taruna LIMIT $halaman_awal, $batas");
}


foreach ($taruna as $pro):
  ?>
    



<tr>
                              <td><?= $i++;  ?></td>
                              <td><?=  $pro['nip'];?></td>
                              <td><?=  $pro['nama'];?></td>
                              <td><?= $pro['tempat_lahir'];?></td>
                              <td><?=  $pro['tanggal_lahir'];?></td>
                              <td><?= $pro['alamat'];?></td>
                               <td><?= $pro['kontak'];?></td>

                              <td><?php 

                              if ($pro['foto'] != '') {
                                echo '<img src="img/taruna/'.$pro['foto'].'" width="250">';
                              }else{
                                echo '<img src="img/user_logo.png" width="250">';
                              }

                              ?></td>
                             

                              
                              <td><button class="btn btn-danger" data-toggle="modal" data-target="#hapus_taruna<?=$pro['id'];?>">hapus</button>
                            <div class="modal fade" id="hapus_taruna<?=$pro['id'];?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                              <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Apakah anda yakin?</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                  </div>
                                  <div class="modal-body">
                                   <form action="" method="POST" enctype="multipart/form-data">
                                    <input type="hidden" name="id" value="<?=$pro['id'];?>" hidden>
                                     <label>NIP : </label>
                                     <b><?=$pro['nip'];?></b><br>
                                     <label>Nama : </label>
                                     <b><?=$pro['nama'];?></b><br>
                                     <label>Tempat Lahir : </label>
                                     <b><?=$pro['tempat_lahir'];?></b><br>
                                     <label>Tanggal Lahir : </label>
                                     <b><?=$pro['tanggal_lahir'];?></b><br>
                                     <label>Alamat : </label>
                                     <b><?=$pro['alamat'];?></b><br>
                                     <label>Kontak : </label>
                                     <b><?=$pro['kontak'];?></b><br>
                                     <label>Foto : </label>
                                    <?php 

                                    if ($pro['foto'] != "") {
                                      echo '<img src="img/taruna/'.$pro['foto'].'" width="250">';
                                    }else{
                                      echo '<img src="img/user_logo.png" width="250">';
                                    }

                                     ?>
                                       <div class="modal-footer">
                                    <button type="submit" name="hapus" class="btn btn-danger">Hapus</button>
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                  </div>
                                   </form>
                                  </div>
                                
                                </div>
                              </div>
                            </div></td>
                              </tr> 
                              <?php endforeach; ?>
