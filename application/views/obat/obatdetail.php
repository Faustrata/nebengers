<!DOCTYPE html>
<html>
<head>
	<title>Edit Obat</title>
</head>
<body>
<h2>Edit data obat</h2>
<form action="<?php echo base_url() ?>obat/update" method="post">
	<table>
		<tr>
			<td width="160">Kode Obat</td>
			<td>:</td>
			<td width="200"><input type="text" name="kode" readonly="1" value="<?= $detail['kodeobat'] ?>"></td>
		</tr>
		<tr>
			<td width="160">Nama Obat</td>
			<td>:</td>
			<td width="200"><input type="text" name="nama"  value="<?= $detail['namaobat'] ?>"></td>
		</tr>
		<tr>
			<td width="160">Jenis Obat</td>
			<td>:</td>
			<td width="200"><input type="text" name="jenis"  value="<?= $detail['jenisobat'] ?>"></td>
		</tr>
		<tr>
			<td width="160">Deskripsi</td>
			<td>:</td>
			<td width="200"><textarea name="deskripsi"><?= $detail['deskripsi'] ?></textarea> </td>
		</tr>
	</table>
	<button onclick="history.go(-1)">Back</button>
	<button type="submit" >Update</button>
</form>
</body>
</html>
