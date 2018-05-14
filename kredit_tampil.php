<?php
	include "koneksi.php";
$queri="Select * From daftar_kredit" ; 
$hasil=MySQL_query ($queri);

while ($data = mysql_fetch_array ($hasil)){
$id = $data['id_brg'];
 echo "  
  Kode Barang : ".$data['id_brg']." </br>
  Nama Barang : ".$data['nm_brg']." </br>
  Harga Barang : ".$data['hrg_brg']." </br> 
  Stok Barang : ".$data['stok']." </br>
  Foto Barang : ".$data['foto']." </br>
  <a href='kredit.php?p=profil'>KREDIT BARANG</a><br/><hr/>
  ---------------------------------------- </br>
  ";
}
echo " Berhasil Mengambil data dari database";
?>  