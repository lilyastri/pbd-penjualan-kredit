<table width="100%" border="0" cellspacing="0" cellpadding="0" class="viewer">
  <tr>
    <th align="left" scope="col">Kode Barang</th>
    <th align="left" scope="col">Nama Barang</th>
    <th align="right" scope="col">Harga</th>
    <th align="right" scope="col">Qty</th>
    <th align="right" scope="col">Jumlah Harga</th>
    <th align="right" scope="col">Aksi</th>
  </tr>
  <?php
  $total = 0;
  if (isset($_SESSION['items'])) {
        foreach ($_SESSION['items'] as $key => $val){
            $query = mysql_query ("select barang1.id, barang1.nama, barang1.harga from barang1 where barang1.id = '$key'");
            $rs = mysql_fetch_array ($query);
             
            $jumlah_harga = $rs['harga'] * $val;
            $total += $jumlah_harga;
  ?>
  <tr>
    <td><?php echo $rs['id']; ?></td>
    <td><?php echo $rs['nama']; ?></td>
    <td align="right"><?php echo number_format($rs['harga']); ?></td>
    <td align="right"><?php echo number_format($val); ?></td>
    <td align="right"><?php echo number_format($jumlah_harga); ?></td>
    <td align="right"><a href="cart.php?act=plus&amp;barang_id=<?php echo $key; ?>&amp;ref=index.php">+</a> | <a href="cart.php?act=min&amp;barang_id=<?php echo $key; ?>&amp;ref=index.php">-</a> | <a href="cart.php?act=del&amp;barang_id=<?php echo $key; ?>&amp;ref=index.php">Hapus</a></td>
  </tr>
  <?php
            mysql_free_result($query);
        }
  }
  ?>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td align="right">&nbsp;</td>
    <td align="right">&nbsp;</td>
    <td align="right"><?php echo number_format($total); ?></td>
    <td align="right"><a href="cart.php?act=clear&amp;ref=index.php">Clear</a></td>
  </tr>
</table>