<h2> INFORMASI PEMBELI </h2>
<form action='simpan_kredit.php' method="POST">
<table border="0">
<tr>
	<td>Nama</td>
	<td>: <input type="text" name="nama" /></td>
</tr>
<tr>
	<td>Notelp</td>
	<td>:  <input type="text" name="notelp" /></td>
</tr>
<tr>
	<td>Alamat</td>
	<td>:  <input type="text" name="alamat" /></td>
</tr>
<tr>
	<td colspan="2" align="right">
	<input type="submit" value="Simpan"/></td>
</tr>
</table>
</form>
<?php
	include_once("trans_kredit.php");
?>