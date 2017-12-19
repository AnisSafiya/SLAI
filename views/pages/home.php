<link href="assets/css/bootstrap.min.css" rel="stylesheet">

    
<link href="assets/css/style.css" rel="stylesheet" type="text/css">

<style>
  .panel1 {
    margin-top: 20px;
  margin-bottom: 20px;
  background-color: #ffffff;
  border: 1px solid transparent;
 
  -webkit-box-shadow: 0 1px 1px rgba(0, 0, 0, 0.05);
  box-shadow: 0 1px 1px rgba(0, 0, 0, 0.05);
}
.panel-body {
  padding: 15px;
}
.panel-heading1 {
  padding: 3px 30px;
  border-bottom: 1px solid transparent;
 
}
.panel-heading1 > .dropdown .dropdown-toggle {
  color: inherit;
}
.panel-title {
  margin-top: 0;
  margin-bottom: 0;
  font-size: 16px;
  color: inherit;
}
.panel-title > a,
.panel-title > small,
.panel-title > .small,
.panel-title > small > a,
.panel-title > .small > a {
  color: inherit;
}
.panel-warning1 {
  border-color: #C5C6CE;
}
.panel-warning1 > .panel-heading1 {
  color: #fFF;
  background-color: #37394A;
  border-color: #37394A;
}
.panel-warning1 > .panel-heading1 + .panel-collapse > .panel-body {
  border-top-color: #faebcc;
}
.panel-warning1 > .panel-heading1 .badge {
  color: #f47c3c;
  background-color: #f47c3c;
}

.box .numberlist1 {
  padding: 16px;
  border-radius: 0 0 2px 2px;
  background-clip: padding-box;
  box-sizing: border-box;
}

.numberlist1 ol{
  list-style:none;
  font:15px 'lucida sans';
  padding:0;
}

.numberlist1 p{
  position:relative;
  display:block;
  background:#FFF;
  color:#444;
  -moz-border-radius:.3em;
  -webkit-border-radius:.3em;
  border-radius:.3em;
  margin:.5em 0;
  padding:.4em .4em .4em 2em;
}
.numberlist1 p:hover{
  background:#FF895D;
}

.numberlist1 p:hover:before{
  background:#fff;
  color:#000;
  border-color:#3B5998;
}


</style>
	

  <!--<div class="css-carousel">
		<div id="myCarousel" class="carousel slide" data-ride="carousel">
			<img src="img/pic3.jpg" class="css-img">
			<img src="img/pic5.png" class="css-img">
			<img src="img/pic6.jpg" class="css-img">	
	</div>-->

	<div class="container">
		<div id="myCarousel" class="carousel slide" data-ride="carousel">
    	<!-- Indicators -->
    		<ol class="carousel-indicators">
      			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      			<li data-target="#myCarousel" data-slide-to="1"></li>
      			<li data-target="#myCarousel" data-slide-to="2"></li>
    		</ol>

    <!-- Wrapper for slides -->
    	<div class="carousel-inner">
      	
      		<div class="item active">
        		<img src="img/pic5.png" alt="intern1">
      		</div>
    
      		<div class="item">
        		<img src="img/pic6.jpg" alt="intern2">
      		</div>
    	</div>
  		</div>
	</div>

	<!--
	<div class="home-left">
		<h2>Buletin</h2>
		
	</div>

	<div class="home-right">
		<h2>Iklan</h2>
		
	</div>


	<div class="row">
    <div class="col-md-6">
        <h2>Buletin</h2>
    </div>
    <div class="col-md-6">
        <h2>Iklan</h2>
    </div>
</div>
-->

<div class="container">
	<div class="row">
    <div class="col-md-7 ">
      <div class="panel1 panel-warning1">
        
        <div class="panel-heading1">
          <h3>BULETIN</h3>
        </div>
        <div class="panel-body">
        <div class="numberlist">
          <ol>
        		<p>Carta alir proses permohonan Latihan Industri
            <a href="pdfile/flowchart.pdf" download><span style="float:right; padding-right: 16px;">
            <i class="fa fa-download" style="color: #7D809C;" aria-hidden="true" align="left"></i></a></p>
        						
        		<p>Tarikh-tarikh penting
            <a href="pdfile/flowchart.pdf" download><span style="float:right; padding-right: 16px;">
            <i class="fa fa-download" style="color: #7D809C;" aria-hidden="true" align="left"></i></a></p>
        						
        		<p>Pengumuman 3
            <a href="pdfile/flowchart.pdf" download><span style="float:right; padding-right: 16px;">
            <i class="fa fa-download" style="color: #7D809C;" aria-hidden="true" align="left"></i></a></p>
        						
        		<p>Pengumuman 4
            <a href="pdfile/flowchart.pdf" download><span style="float:right; padding-right: 16px;">
            <i class="fa fa-download" style="color: #7D809C;" aria-hidden="true" align="left"></i></a></p>
        						
        		<p>Pengumuman 5
            <a href="pdfile/flowchart.pdf" download><span style="float:right; padding-right: 16px;">
            <i class="fa fa-download" style="color: #7D809C;" aria-hidden="true" align="left"></i></a></p>
            
            <p>Pengumuman 6
            <a href="pdfile/flowchart.pdf" download><span style="float:right; padding-right: 16px;">
            <i class="fa fa-download" style="color: #7D809C;" aria-hidden="true" align="left"></i></a></p>
        						
    			</ol>                          
        </div>
      </div>  
    </div>
  </div>


    <div class="col-md-5">
      <h3 class="tag-title" style="padding-top: 20px; padding-left: 20px;" >PENGIKLANAN</h3>
        
        
          <div class="list-group">   
          <?php foreach ($iklan as $post): ?>     
            <a href="<?php echo site_url('/iklan/' .$post['slug']); ?>" class="list-group-item">
              <h4 class="list-group-item-heading"><?php echo $post['com_name']; ?></h4>
                <p class="list-group-item-text"><?php echo word_limiter ($post['com_desc'], 12); ?></p>
            </a>
            <?php endforeach; ?> 
          </div>
        
    </div>
    