<center>
<?php
include "koneksi.php";

$id_produk = $_POST['id_produk'];
$nama_produk = $_POST['nama_produk'];
$harga_produk = $_POST['harga_produk'];
$stok_produk = $_POST['stok_produk'];

$sql_simpan = mysqli_query($connect_db, "INSERT into tersedia 
(id_produk,nama_produk, harga_produk, stok_produk) 
VALUES ('$id_produk','$nama_produk', '$harga_produk', '$stok_produk')");
if($sql_simpan) {
 echo "Data berhasil disimpan";
} else {
 echo "Data gagal disimpan";
}
?>
<br>
<a href="list_barang.php" > LIHAT DATA PRODUK </a>
</center> 