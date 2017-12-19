<html>
  <head>
    <title>Sistem Latihan Amali/Industri</title>

    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://bootswatch.com/sandstone/bootstrap.min.css" rel="stylesheet">

    <!--<link href="css/bootstrap.css" rel="stylesheet" type="text/css"> -->
    
    <link href="../assets/css/style.css" rel="stylesheet" type="text/css">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"> 

    <style>
    .wrap-login{
        padding: 20px;
        padding-bottom: 50px;
        margin-top: 50px;
        background-color: #fff;
        border: solid 1px #d0d0d0;
       -webkit-box-shadow: 0px 0px 23px -3px rgba(92,84,92,0.48);
       -moz-box-shadow: 0px 0px 23px -3px rgba(92,84,92,0.48);
        box-shadow: 0px 0px 23px -3px rgba(92,84,92,0.48);
      }
  </style> 

  </head>

  <?php if($this->session->flashdata('login_failed')): ?>
    
    <?php echo '<p class="alert alert-danger">'.$this->session->flashdata('login_failed').'</p>' ;?>

  <?php endif; ?>
  
  <body>

  <nav class="navbar navbar-default ">
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
                <li><a href="#"></a></li>
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

              <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><?php echo $userData['MATRIK'] ?> <span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="<?php echo base_url(); ?>users/logout">Log Keluar</a></li>
                </ul>
            </li>
            

            <?php endif; ?>
          </ul>   
          </div> 




    </div>
  </nav>




<?php echo form_open('users/login'); ?>

<body>

  <?php echo form_open('users/login'); ?>
  <div class="col-md-6 col-md-offset-3">


  <div class="wrap-login">

  <h2 style="margin-bottom: 30px;"><?= $title; ?></h2>
  
  <form action="login" method="post">
    <div class="form-group">
      <label for="MATRIK">No Pendaftaran</label>
      <input type="text" id="MATRIK" name="MATRIK" class="form-control" placeholder="No Pendaftaran" required>
    </div>
    
    <div class="form-group">
      <label for="PASSWORD">Kata Laluan</label>
      <input type="password" id="PASSWORD" name="PASSWORD" class="form-control" placeholder="Kata Laluan" required>
    </div>
    <br><br>
   
      <!--<input type="hidden" name="form-submitted" value="login" /> -->
      <button type="submit" class="btn btn-primary btn-block">LOG MASUK</button>

  </div>
  </div>
  </form>

  <?php echo form_close(); ?>



  <script type="text/javascript" src="../assets/js/jquery.min.js"></script>
  <script type="text/javascript" src="../assets/js/bootstrap.min.js"></script>

  <script type="text/javascript" src="../assets/js/login.js"></script>


