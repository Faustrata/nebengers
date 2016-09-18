<!DOCTYPE html>
<html>
<head>
	<title>DAftar BErita</title>
</head>
<body>
<a href="<?php echo base_url() ?>news/tambah">Tambah Data</a>
	<table border="1" style="border-collapse:collapse; width:50%">
		<tr style="background:grey">
			<th>No</th>
			<th>Judul</th>
			<th>Slug</th>
			<th>ISI</th>
		</tr>
		<?php $no=0;
		foreach($news as $row) { $no++; ?>
		<tr>
			<td><?php echo $no; ?></td>
			<td><?php echo $row['title'] ?></td>
			<td><?php echo $row['slug'] ?></td>
			<td><?php echo $row['text'] ?></td>
		</tr>
		<?php } ?>
	</table>
</body>
</html>