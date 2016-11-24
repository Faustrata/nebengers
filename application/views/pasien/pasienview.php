<!DOCTYPE html>
<html>
<head>
	<title>Master Pasien</title>
</head>
<body>
<?php echo "<h1>".$this->session->flashdata('update')."</h1>"; ?>
<table border="5">
	<thead>
		<tr style="background:grey">
			<th width="80">Kode Pasien</th>
			<th width="350">Nama Pasien</th>
			<th width="140">Jenis Pasien</th>
			<th width="140">Aksi</th>
		</tr>
	</thead>
	<tbody>
	<?php
	 foreach($pasien as $row): ?>

		<tr>
			<td align="center"><?php echo $row['kodepasien']?></td>
			<td><?php echo $row['namapasien']?></td>
			<td><?php echo $row['gender']?></td>
			<td><a href="<?php echo base_url('pasien/lihat/'.$row['kodepasien']) ?>">Edit</a> | <a onclick="return confirm('Yakin?')" href="<?php echo base_url('pasien/hapus/'.$row['kodepasien']) ?>">Hapus</a></td>
		</tr>
	<?php endforeach; ?>
	</tbody>
</table>
</body>
</html>