<center>
<?php
include "koneksi.php";


$nama_cust = $_POST['nama_cust'];
$alamat_cust = $_POST['alamat_cust'];
$noktp_cust = $_POST['noktp_cust'];

$sql_simpan = mysqli_query($connect_db, "INSERT into customer 
(nama_cust, alamat_cust, noktp_cust) VALUES ('$nama_cust', '$alamat_cust', '$noktp_cust')");
if($sql_simpan) {
 echo "Data berhasil disimpan";
} else {
 echo "Data gagal disimpan";
}
?>
<br>
<a href="transaksi_form.php" > LANJUT LAKUKAN TRANSAKSI </a>
</center> 