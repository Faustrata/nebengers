<!DOCTYPE html>
<html>
<head>
	<title>Tambah News</title>
</head>
<body>
<h1>Inputkan Berita terbaru</h1>

        <fieldset>
           
            <?php echo form_open('news/add');?>
            <?php echo form_error('nama', '<div style="color:red">','</div>');?>
            Nama : <?php echo form_input('nama');?> <br /><br/>
            <?php echo form_error('samaran', '<div style="color:red">','</div>');?>
            Samaran : <?php echo form_input('samaran');?> <br /><br/>
            <?php echo form_error('email', '<div style="color:red">','</div>');?>
            Email : <?php echo form_input('email');?> <br /><br/>
            <?php echo form_error('password', '<div style="color:red">','</div>');?>
            Password : <?php echo form_password('password');?> <br /><br/>
            <?php echo form_error('ulangpassword', '<div style="color:red">','</div>');?>
            Ulang Password : <?php echo form_password('ulangpassword');?> <br /><br/>
            <?php echo form_error('umur', '<div style="color:red">','</div>');?>
            Umur : <?php echo form_input('umur');?> <br /><br/>
            Twitter : <?php echo form_input('twitter');?> <br /><br/>
            Website : <?php echo form_input('website');?> <br /><br/>
            <?php echo form_submit('daftar', 'Daftarkan Saya !');?>
            <?php echo form_close(); ?>
        </fieldset>
    </body>

</html>