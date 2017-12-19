<h2><?= $title; ?></h2>


<?php echo validation_errors(); ?>

<?php echo form_open_multipart('iklan/create'); ?>

	<div class="form-group">
    <label>Nama Syarikat</label>
     	<input type="text" class="form-control" name="com_name" placeholder="Nama Syarikat">	
  </div>

  <div class="form-group">
    <label>Email Syarikat</label>     
      <input type="text" class="form-control" name="com_email" placeholder="Email">
  </div>

  <div class="form-group">
    <label>No Telefon Syarikat</label>     
      <input type="number" class="form-control" name="com_phone" placeholder="0XXXXXXXXX"> 
  </div>

  <div class="form-group">
    <label>Muat naik gambar (Logo Syarikat)</label>
      <input type="file" name="userfile" size="20">
  </div>


  <div class="form-group">
    <label>Kategori</label>     
      <select class="form-control" name="category_id" multiple>
        <?php foreach ($kategori as $kategori): ?>
          <option value="<?php echo $kategori['category_id']; ?>"><?php echo $kategori['category_name']; ?></option>  
        <?php endforeach; ?>     
      </select> 
  </div>


  <div class="form-group">
    <label>Keterangan</label>
      <textarea class="form-control" placeholder="Masukkan keterangan di sini" rows="6" name="com_desc" id="editor1" ></textarea>	
  </div>

    <!--<div class="form-group">
    	
      		<label>Selects</label>
      		
        	<select class="form-control" id="select">
          		<option>1</option>
          		<option>2</option>
          		<option>3</option>
          		<option>4</option>
          		<option>5</option>
        	</select>
      	
    </div>
    -->
    <div class="form-group">
 
        <button type="reset" class="btn btn-default">Batal</button>
        <button type="submit" class="btn btn-primary">Hantar</button>
     
    </div>
</form>