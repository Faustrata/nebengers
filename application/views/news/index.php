<h2><?php echo $judul ?></h2>

<?php foreach ($news as $news_item) : ?>

	<h3><?php echo $news_item['title']; ?></h3>
	<div class="main">
		<?php echo $news_item['text']; ?>
	</div>
	<p>
	<a href="<?php echo site_url('news/tampil/'.$news_item['slug']); ?>">View Article</a> |
	<a href="<?php echo site_url('news/lihattabel')?>"> Go to tabel</a></p>
	<hr>
<?php endforeach;?>