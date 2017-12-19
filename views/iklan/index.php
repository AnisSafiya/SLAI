<link href="assets/css/bootstrap.min.css" rel="stylesheet">

<link href="assets/css/style.css" rel="stylesheet" type="text/css">


<h2><center><?= $title ?></center></h2>

<?php if(!$this->session->userdata('logged_in')) : ?>

<h5 style="margin-top: 30px;"><center>Iklankan tawaran latihan industri <a href="iklan/create"> di sini</a></center></h5>

<?php endif; ?>
<br>

    <?php foreach ($iklan as $post): ?>
    <div class="col-sm-4 col-lg-4 col-md-4">
   
        <div class="thumbnail">
            <img class="img-responsive" src="<?php echo site_url(); ?>assets/images/iklan/<?php echo $post['com_iklan_image']; ?>">
            <div class="caption">
                 <h4><?php echo $post ['com_name']; ?></h4>
                <small><?php echo $post['created_at']; ?></small>
                <br><br>
                <small>#<?php echo $post['category_name']; ?></small><br><br>
                 <?php echo word_limiter ($post['com_desc'], 10); ?>             
            </div><br><br>
            <a class="btn btn-info btn-block" href="<?php echo site_url('/iklan/' .$post['slug']); ?>">Baca lagi</a>            
        </div>
    </div>
    <?php endforeach; ?> 

<div class="pagination-links">

    <?php echo $this->pagination->create_links(); ?>

</div>