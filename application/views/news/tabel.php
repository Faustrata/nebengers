
<a href="<?php echo base_url() ?>news/inputdata">Tambah Data</a>
	<table border="1" style="border-collapse:collapse; width:100%">
		<tr style="background:grey">
			<th>No</th>
			<th>Judul</th>
			<th>Slug</th>
			<th>Isi</th>
			<th>Aksi</th>
		</tr>
		<?php $no=0;
		foreach($news as $row) { $no++; ?>
		<tr>
			<td><?php echo $no; ?></td>
			<td><?php echo $row['title'] ?></td>
			<td><?php echo $row['slug'] ?></td>
			<td><?php echo $row['text'] ?></td>
			<td><a href="<?php echo site_url('news/mengedit/'.$row['id'])?>">
			Edit </a> | <a href="">Hapus </a></td>
		</tr>
		<?php } ?>
	</table>
</body>
</html>