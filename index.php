<?php 
    require_once("koneksi.php");
    if (!isset($_SESSION)) {
        session_start();
    }
?>
 
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Aplikasi Belanja</title>
<style>
    h1, h2, h3, p {
        margin-top:0px;
        margin-bottom:10px;
    }
</style>
</head>
 
<body>
 
<h1>Aplikasi Belanja</h1>
<h2>List Produk</h2>
<hr />
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr valign="top">
    <td width="55%"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <?php
    mysql_select_db($database_conn, $conn);
    $query = mysql_query ("select * from barang1");
    while ($rs = mysql_fetch_array ($query)) {
          
    ?>
      <tr>
        <td width="160" valign="top"><img src="<?php echo $rs['gambar']; ?>" alt="" style="width:140px; margin-right:20px; margin-bottom:20px;" /></td>
        <td valign="top"><h3><?php echo $rs['nama']; ?></h3>
          <p><?php echo $rs['deskripsi']; ?></p>
          <p>Harga : <?php echo number_format($rs['harga']); ?> - <a href="cart.php?act=add&amp;barang_id=<?php echo $rs['id']; ?>&amp;ref=index.php">Beli</a></p></td>
        </tr>
      <?php
    }
    ?>
    </table></td>
    <td>&nbsp;</td>
    <td width="40%"><p>Keranjang Anda</p>
      <hr />
      <?php require("cart_view.php"); ?></td>
  </tr>
</table>
<p>&nbsp;</p>
</body>
</html>