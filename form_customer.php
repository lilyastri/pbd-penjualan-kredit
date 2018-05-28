<h2> INPUT DATA CUSTOMER</h2>
<form action="prosessimpan.php" method="post" enctype="multipart/form-data" >
	<table border="1">
			<tr>
			<td> ID Pelanggan </td>
			<td><input type="text" name="id" /></td>
		</tr>
		<tr>
			<td> Nama Pelanggan </td>
			<td><input type="text" name="nama" /></td>
		</tr>
		<tr>
			<td> Alamat Pelanggan </td>
			<td><input type="text" name="alamat" /></td> 
		</tr>
		<tr>
			<td> No Telepon </td>
			<td><input type="text" name="telepon" /></td>
		</tr>
		<tr>
			<td> Email </td>
			<td><input type="email" name="email" /></td>
		</tr>
		<tr>
			<td colspan="2" align="center">
			<input type="submit" value="simpan" name="proses" />
			<input type="reset" value="reset" name="reset" />
			</td>
		</tr>
	</table>
</form>


