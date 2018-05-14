
<h2> MENGINPUTKAN DAFTAR INFORMASI BARANG YANG DIKREDITKAN</h2>
<a href="kredit_tampil.php" >DAFTAR BARANG TERSEDIA</a> <br/>
<a href="transaksi.php" >TRANSAKSI PEMBELIAN</a>
<form action="prosessimpan.php" method="post" enctype="multipart/form-data" >
	<table border="1">
		<tr>
			<td> ID BARANG </td>
			<td><input type="text" name="id_brg" /></td>
		</tr>
		<tr>
			<td> NAMA BARANG </td>
			<td><input type="text" name="nm_brg" /></td>
		</tr>
		<tr>
			<td> HARGA </td>
			<td><input type="text" name="hrg_brg" /></td> 
		</tr>
		<tr>
			<td> STOK BARANG </td>
			<td><input type="text" name="stok" /></td>
		</tr>
		<tr>
			<td> Gambar  </td>
			<td><input type="file" name="foto" /></td>
		</tr>
		<tr>
			<td colspan="2" align="center">
			<input type="submit" value="simpan" name="proses" />
			<input type="reset" value="reset" name="reset" />
			</td>
		</tr>
	</table>
</form>


