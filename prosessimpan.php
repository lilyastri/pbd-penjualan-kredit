<?php
$id = $_POST['id'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$telepon = $_POST['telepon'];
$email = $_POST['email'];


$sql_simpan = mysql_query ("INSERT into pelanggan (id, nama, alamat, telepon, email) VALUES ('$id', '$nama', '$alamat', '$telepon', '$email')");
if($sql_simpan) {
 echo "Data berhasil disimpan";
} else {
 echo "Data gagal disimpan";
}
include "koneksi.php";
?>