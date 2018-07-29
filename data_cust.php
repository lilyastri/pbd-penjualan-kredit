<center><h2>DATA CUSTOMER</h2>
<table border="1">
 <tr><th>NO</th><th>Id Customer</th><th>Nama Customer</th>
 <th>Alamat Customer</th><th>NoKtp Customer</th><th>Delete</th></tr>
 <?php
 include "koneksi.php";
 $data=mysqli_query($connect_db, "SELECT * from customer order by id_cust");
 if ($data === FALSE) {
 die(mysqli_error());
 }
 $no=1;
 while($hasil=mysqli_fetch_array($data)){ 
 
 echo "<tr>
 <td>$no</td>
 <td>$hasil[id_cust]</td>
 <td>$hasil[nama_cust]</td>
 <td>$hasil[alamat_cust]</td>
 <td>$hasil[noktp_cust]</td> 
 <td> <a href='hapus_cust.php?id_cust=$hasil[id_cust]'>Hapus</a> </td>
 </tr>";
 $no++;
 }
 ?>
</table>
</center>