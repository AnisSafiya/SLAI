
<h2><?php echo $iklan['com_name']; ?></h2>
	
	<small><?php echo $iklan['created_at']; ?></small><br> <br>
	<img class="post-thumb" src="<?php echo site_url(); ?>assets/images/iklan/<?php echo $iklan['com_iklan_image']; ?>"> <br><br>

	<p>
		<div class="post-body">
			<?php echo $iklan['com_desc']; ?>	
		</div>
	</p>

<?php if($this->session->userdata('logged_in')) : ?>

	<a class="btn btn-primary" style="float: right;" href ="<?php echo site_url('/iklan/mohoniklan/' .$iklan['slug']); ?>">MOHON</a>

	<?php endif; ?>
<?php if(!$this->session->userdata('logged_in')) : ?>

	<a class="btn btn-primary" style="float: right;" href ="<?php echo site_url('/users/login'); ?>">MOHON</a>

<?php endif; ?>

