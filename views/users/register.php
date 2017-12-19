<style>
	.wrap-login{
  		padding: 20px;
  		padding-bottom: 50px;
  		margin-top: 100px;
  		background-color: #fff;
  		border: solid 1px #d0d0d0;
  -webkit-box-shadow: 0px 0px 23px -3px rgba(92,84,92,0.48);
   	 -moz-box-shadow: 0px 0px 23px -3px rgba(92,84,92,0.48);
    	box-shadow: 0px 0px 23px -3px rgba(92,84,92,0.48);
}
</style>


<?php echo form_open('users/register'); ?>
<div class="col-md-4 col-md-offset-4">

<div class="wrap-login">

<h2 style="margin-bottom: 10px;"><?= $title; ?></h2>


	<div class="form-group">
		<label>No Pendaftaran</label>
		<input type="text" name="std_matric" class="form-control" placeholder="No Pendaftaran" value="<?php if(isset($error)){echo $std_matric;}?>" required>
	</div>
	<div class="form-group">
		<label>Nama</label>
		<input type="text" name="std_name" class="form-control" placeholder="Nama" value="<?php if(isset($error)){echo $std_name;}?>" required>
	</div>
	<div class="form-group">
		<label>Tahap Pengajian</label>
		<input type="text" name="std_tahap_pengajian" class="form-control" placeholder="Tahap Pengajian" value="<?php if(isset($error)){echo $std_tahap_pengajian;}?>" required>
	</div>
	<div class="form-group">
		<label>Tahun Pengajian</label>
		<input type="text" name="std_tahun_pengajian" class="form-control" placeholder="Tahun Pengajian" value="<?php if(isset($error)){echo $std_tahun_pengajian;}?>" required>
	</div>
	<div class="form-group">
		<label>Fakulti</label>
		<input type="text" name="std_fakulti" class="form-control" placeholder="Fakulti" value="<?php if(isset($error)){echo $std_fakulti;}?>" required>
	</div>
	<div class="form-group">
		<label>Pusat Pengajian</label>
		<input type="text" name="std_pusat_pengajian" class="form-control" placeholder="Pusat Pengajian" value="<?php if(isset($error)){echo $std_pusat_pengajian;}?>" required>
	</div>
	<div class="form-group">
		<label>Program</label>
		<input type="text" name="std_program" class="form-control" placeholder="Program" value="<?php if(isset($error)){echo $std_program;}?>" required>
	</div>
	<div class="form-group">
		<label>Jabatan</label>
		<input type="text" name="std_jabatan" class="form-control" placeholder="Jabatan" value="<?php if(isset($error)){echo $std_jabatan;}?>" required>
	</div>
	
	<div class="form-group">
		<label>Kata Laluan</label>
		<input type="password" name="std_password" class="form-control" placeholder="Kata Laluan" value="<?php if(isset($error)){echo $std_password;}?>" required>
	</div>
	<div class="form-group">
		<label>Sahkan Kata Laluan</label>
		<input type="password" name="std_password2" class="form-control" placeholder="Sahkan Kata Laluan" required>	
	</div>

	<button type="submit" class="btn btn-primary btn-block">Hantar</button>

<?php echo form_close(); ?>
</div>


