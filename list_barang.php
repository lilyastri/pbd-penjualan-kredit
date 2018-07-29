<center><h2>~~~ LIST PRODUK TERSEDIA ~~~</h2>
<table border="1">
 <tr><th>NO</th><th>Id Produk</th><th>Nama Produk</th><th>Harga Produk</th>
 <th>Stok Produk</th><th>Hapus</th></tr>
 <?php
 include "koneksi.php";
 $data=mysqli_query($connect_db, "SELECT * from tersedia order by id_produk");
 if ($data === FALSE) {
 die(mysqli_error());
 }
 $no=1;
 while($hasil=mysqli_fetch_array($data)){ 
 
 echo "<tr>
 <td>$no</td>
 <td>$hasil[id_produk]</td>
 <td>$hasil[nama_produk]</td>
 <td>$hasil[harga_produk]</td>
 <td>$hasil[stok_produk]</td> 
 <td> <a href='hapus_produk.php?id_cust=$hasil[id_produk]'>Hapus</a> </td>
 </tr>";
 $no++;
 }
 ?>
</table>
 <br>
 <b> <a href="transaksi_form.php" > LANJUT LAKUKAN TRANSAKSI </a> </b> 
</center>