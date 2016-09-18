<!DOCTYPE html>
<html>
<head>
	<title>Master Obat</title>
</head>
<body>
<?php echo "<h1>".$this->session->flashdata('update')."</h1>"; ?>
<table border="5">
	<thead>
		<tr style="background:grey">
			<th width="80">Kode Obat</th>
			<th width="350">Nama Obat</th>
			<th width="140">Jenis Obat</th>
			<th width="140">Aksi</th>
		</tr>
	</thead>
	<tbody>
	<?php
	 foreach($obat as $row): ?>

		<tr>
			<td align="center"><?php echo $row['kodeobat']?></td>
			<td><?php echo $row['namaobat']?></td>
			<td><?php echo $row['jenisobat']?></td>
			<td><a href="<?php echo base_url('obat/lihat/'.$row['kodeobat']) ?>">Edit</a> | <a onclick="return confirm('Yakin?')" href="<?php echo base_url('obat/hapus/'.$row['kodeobat']) ?>">Hapus</a></td>
		</tr>
	<?php endforeach; ?>
	</tbody>
</table>
</body>
</html>