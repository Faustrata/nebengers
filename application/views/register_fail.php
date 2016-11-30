 <div class="alert alert-danger">
 	<div class="text-center">
 	<?php if ($this->session->flashdata('message'))echo $this->session->flashdata('message');?>
       <h1>Warning .. !!</h1>
		Upload Type / Format Image must be jpeg/jpg/png/bmp <br>
		Upload Size Image Less Then 1500 kb <br>
		Upload height Image Less Then 1400 kb <br>
		Upload width Image Less Then 1300 kb <br>
	</div>
</div>