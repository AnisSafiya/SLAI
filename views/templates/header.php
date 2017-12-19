<html>
  <head>
    <title>Sistem Latihan Amali/Industri</title>

    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://bootswatch.com/sandstone/bootstrap.min.css" rel="stylesheet">

    <!--<link href="css/bootstrap.css" rel="stylesheet" type="text/css"> -->
    
    <link href="../assets/css/style.css" rel="stylesheet" type="text/css">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"> 

  </head>
  <body>

  <nav class="navbar navbar-default ">
    <div class="container-fluid">
      <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>

        <a class="navbar-brand" href="<?php echo base_url(); ?>">Sistem Latihan Amali/Industri</a> 

      </div>

      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <li>
            <a href="<?php echo base_url(); ?>">Laman Utama<span class="sr-only"></span>
            </a>
          </li>

          <?php if($this->session->userdata('logged_in')) : ?>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">PELAJAR <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="<?php echo base_url(); ?>users/profile">Maklumat Diri Pelajar</a></li>
                <li class="divider"></li>
                <li><a href="<?php echo base_url(); ?>users/syarikat">PERMOHONAN</a></li>
                <li><a href="#">SEMAKAN STATUS PERMOHONAN </a></li>
                <li class="divider"></li>
                <!--li class="nav-header">PENYELIAAN DAN PENILAIAN</li>-->
                <li><a target="_blank" href="<?php echo base_url(); ?>users/boranglapordiri">Borang Lapor Diri</a></li>
                <li><a href="#">PERANCANGAN LATIHAN</a></li>
                <li><a href="#">MAKLUMAT PENYELIAAN</a></li>
              </ul>
          </li>
          <?php endif; ?>

          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Syarikat <span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu">
              <li><a href= "<?php echo base_url(); ?>iklan">Pengiklanan Syarikat</a></li>
              <li class="divider"></li>
              <!--li class="nav-header">PENYELIAAN DAN PENILAIAN</li>-->
              <li><a href="#">Syarikat Blacklist</a></li>
            </ul>
          </li>

          <li><a href="#">BANTUAN</a></li>

          <li><a href= "<?php echo base_url(); ?>about">Mengenai SLAI</a></li>
          </ul>

          <ul class="nav navbar-nav navbar-right">
          <?php if(!$this->session->userdata('logged_in')) : ?>
            <li><a href="<?php echo base_url(); ?>users/login">Log Masuk</a></li>
          <?php endif; ?>

            <?php if($this->session->userdata('logged_in')) : ?>
              
              <li><a href="<?php echo base_url(); ?>users/logout">Log Keluar</a></li>

            <?php endif; ?>
          </ul>   

      

<!--      <div id="navbar">
        <ul class="nav navbar-nav">
          <li><a href="<?php echo base_url(); ?>">Laman Utama</a></li>
          <li><a href= "<?php echo base_url(); ?>iklan">Pengiklanan Syarikat</a></li>
          <li><a href= "<?php echo base_url(); ?>about">Mengenai SLAI</a></li>
        </ul> 
        <ul class="nav navbar-nav navbar-right">
          <li><a href="<?php echo base_url(); ?>users/login">Log Masuk</a></li>
          <li><a href="<?php echo base_url(); ?>users/logout">Log Keluar</a></li>
      </ul>

-->     
      </div> 




    </div>
  </nav>

<!--
<nav class="navbar navbar-default">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?php echo base_url(); ?>">Sistem Latihan Amali/Industri</a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="<?php echo base_url(); ?>">Laman Utama <span class="sr-only">(current)</span></a></li>
        <li><a href= "<?php echo base_url(); ?>about">Mengenai SLAI</a></li>
        
      </ul>
    
      <ul class="nav navbar-nav navbar-right">
        <li><a href="<?php echo base_url(); ?>loginview">Log Masuk</a></li>
      </ul>
    </div>
  </div>
</nav>
-->
<div class="container">

<?php if($this->session->flashdata('user_registered')): ?>
  <?php echo '<p class="alert alert-success">'.$this->session->flashdata('user_registered').'</p>' ;?>

<?php endif; ?>

<?php if($this->session->flashdata('iklan_created')): ?>
  <?php echo '<p class="alert alert-success">'.$this->session->flashdata('iklan_created').'</p>' ;?>

<?php endif; ?>

<?php if($this->session->flashdata('user_loggedin')): ?>
  <?php echo '<p class="alert alert-success">'.$this->session->flashdata('user_loggedin').'</p>' ;?>

<?php endif; ?>

<?php if($this->session->flashdata('login_failed')): ?>
  <?php echo '<p class="alert alert-danger">'.$this->session->flashdata('login_failed').'</p>' ;?>

<?php endif; ?>

<?php if($this->session->flashdata('user_loggedout')): ?>
  <?php echo '<p class="alert alert-success">'.$this->session->flashdata('user_loggedout').'</p>' ;?>

<?php endif; ?>


	
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
    
    <script src="js/style.js"></script>

    <script src="http://cdn.ckeditor.com/4.7.2/basic/ckeditor.js"></script>