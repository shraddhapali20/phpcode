<!DOCTYPE html>
<html>
<head>
	<title> About Us</title>
	<style type="text/css">
		.avatar {
    vertical-align: middle;
    width: 130px;
    height: 150px;
    border-radius: 50%;
}
	</style>
</head>
<body>
<?php 	include("header.php");	?>
<br>
<div class="jumbotron">
  <h1 class="display-3">Hello, world!</h1>
  <p class="lead">This is CodeMonkey Team. <br> We are a team of patient, hard working, dedicated industry professionals. </p>  
</div>
<ul class="nav nav-pills">
  <li class="nav-item">
    <a class="nav-link active" href="#">Our Team</a>
  </li>
  </ul>
<div class="row" style="width: 90%; padding-left: 140px;">
	
<div class="col">
	<div class="row">
		<div class="col">
			<img src="<?php echo base_url(); ?>images/img_sas.jpg" alt="Avatar" class="avatar">
	
		</div>
		<div class="col">
			
			<h6>CEO, Co-Founder</h6>
			<p >This is CodeMonkey Team. <br> We are a team of patient, hard working, dedicated industry professionals. </p> 
		</div>
		
	</div>
	
</div>
<div class="col">
	<div class="row">
		<div class="col">
			<img src="<?php echo base_url(); ?>images/img_ak.jpg" alt="Avatar" class="avatar">
	
		</div>
		<div class="col">
			
			<h6>MD, Co-Founder</h6>
			<p >Also, Chairman @The Royal Group, CEO Voltt, CEO Qweue, CEO FindmePlz </p> 
		</div>
		
	</div>
	
</div>
<div class="col">
	<div class="row">
		<div class="col">
			<img src="<?php echo base_url(); ?>images/img_abhi.jpg" alt="Avatar" class="avatar">
	
		</div>
		<div class="col">

			<h6>CFO, Co-Founder</h6>
			<p >Also, MD @Nawabi Maggi, CEO @GudGud Bakery</p> 
		</div>
		
	</div>
	
</div>



</div>
</body>
</html>
