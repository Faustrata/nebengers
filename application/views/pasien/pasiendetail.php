<!DOCTYPE html>
<html>
<head>
	<title>Edit Pasien</title>
</head>
<body>
<h2>Edit data pasien</h2>
<form action="<?php echo base_url() ?>pasien/update" method="post">
	<table>
		<tr>
			<td width="160">Kode Pasien</td>
			<td>:</td>
			<td width="200"><input type="text" name="kode" readonly="1" value="<?= $detail['kodepasien'] ?>"></td>
		</tr>
		<tr>
			<td width="160">Nama Pasien</td>
			<td>:</td>
			<td width="200"><input type="text" name="nama"  value="<?= $detail['namapasien'] ?>"></td>
		</tr>
		<tr>
			<td width="160">Jenis Pasien</td>
			<td>:</td>
			<td width="200"><input type="text" name="jenis"  value="<?= $detail['gender'] ?>"></td>
		</tr>
		<tr>
			<td width="160">Deskripsi</td>
			<td>:</td>
			<td width="200"><textarea name="deskripsi"><?= $detail['alamat'] ?></textarea> </td>
		</tr>
	</table>
	<button onclick="history.go(-1)">Back</button>
	<button type="submit" >Update</button>
</form>
</body>
</html>
