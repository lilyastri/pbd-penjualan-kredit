<html>
<center>
<head>
    <title> FORM TRANSAKSI </title>
    <script src="jquery-2.2.4.min.js"></script> <!-- Load library jquery -->
    <script src="proses.js"></script> <!-- Load file process.js -->
	
</head>
<body>

<h1>FORM TRANSAKSI JUAL</h1><hr>
	<form action="simpan_trans.php" method="post" enctype="multipart/form-data" >
<table>   
  <tr>
    <td>TANGGAL</td>
    <td>:</td>
    <td><input type="date" name="tanggal" id="tanggal"></td>
  </tr>
  <tr>
    <td>ID PRODUK</td>
    <td>:</td>
    <td><input type="text" name="id_produk" id="id_produk"> <button type="button" id="btn-search">Cari</button> <span id="loading">LOADING...</span></td>
  </tr>
  <tr>
    <td>NAMA PRODUK</td>
    <td>:</td>
    <td><input type="text" name="nama_produk" id="nama_produk"></td>
  </tr>
        <tr>
    <td>QTY</td>
    <td>:</td>
    <td><input type="text" name="qty" id="qty" ></td> 
  </tr>
    <tr>
    <td>HARGA PRODUK</td>
    <td>:</td>
    <td><input type="text" name="harga_produk" id="harga_produk" ></td>
  </tr>
      <tr>
    <td>ID CUSTOMER</td>
    <td>:</td>
    <td><input type="text" name="id_cust" id="id_cust"></td>
  </tr>
    <tr>
    <td><input type="submit" value="SIMPAN" name="proses" /></td></td>
  </tr>
</table>
 <b> <a href="index.php" > MENU AWAL </a> </b>
<?php
	include "data_cust.php";
?>
</form>
</body>
</center> 
</html>