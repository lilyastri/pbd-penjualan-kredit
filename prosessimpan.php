<?php

//Ini untuk koneksi 
$user_name = "root";
$password  = "";
$database  = "proyek"; 
$host_name = "localhost";
 
$connect_db=mysql_connect($host_name, $user_name, $password);
$find_db=mysql_select_db($database);



$id_brg = $_POST['id_brg'];
$nm_brg = $_POST['nm_brg'];
$hrg_brg = $_POST['hrg_brg'];
$stok = $_POST['stok'];

$foto = $_FILES['foto']['name'];
$tmpName = $_FILES['foto']['tmp_name'];
$size  = $_FILES['foto']['size'];
$type = $_FILES['foto']['type'];


$sql_simpan = mysql_query ("INSERT into daftar_kredit (id_brg, nm_brg, hrg_brg, stok, foto) VALUES ('$id_brg', '$nm_brg', '$hrg_brg', '$stok', '$foto')");
if($sql_simpan) {
 echo "Data berhasil disimpan";
} else {
 echo "Data gagal disimpan";
}
?>