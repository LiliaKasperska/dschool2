<?php 
    require("connect_db.php");
?>
<!DOCTYPE html>
<html>
<head>
<title>Гає-Розтоцький навчально - виховний комплекс</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Inspire Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/popup-box.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
<link rel="stylesheet" 	href="css/chocolat.css" type="text/css" media="all">
<link href='//fonts.googleapis.com/css?family=Josefin+Sans:400,100,100italic,300,300italic,400italic,600,600italic,700,700italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/modernizr.custom.97074.js"></script>
<script src="js/jquery.chocolat.js"></script>
<script type="text/javascript">
	$(function() {
		$('.gallery-grids a').Chocolat();
	});
</script>
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
		event.preventDefault();
		$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
    });
</script>
<script type="text/javascript">
	$(document).ready(function() {								
		$().UItoTop({ easingType: 'easeOutQuart' });							
	});
</script>
<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
<script type="text/javascript" src="js/modernizr.custom.53451.js"></script> 
<script>
	$(document).ready(function() {
		$('.popup-with-zoom-anim').magnificPopup({
			type: 'inline',
			fixedContentPos: false,
			fixedBgPos: true,
			overflowY: 'auto',
			closeBtnInside: true,
			preloader: false,
			midClick: true,
			removalDelay: 300,
			mainClass: 'my-mfp-zoom-in'
		});																				
	});
</script>	
</head>
<body>
	<div class="header">
		<div class="container">
			<div class="w3l_header_left"> 
				<ul>
					<li><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>+8(03540)34547</li>
					<li><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span><a href="mailto:Hayi_Roztotsky@ukr.net">Hayi_Roztotsky@ukr.net</a></li>
					<li><span class="glyphicon glyphicon-home" aria-hidden="true"></span>47232 Україна, Тернопільська обл, Тернопільський р-н, с.Гаї-Розтоцькі, Шевченка, 17</li>
				</ul>
			</div>			
			<div class="clearfix"> </div>
		</div>
	</div>
	<div class="logo-navigation-w3layouts">
		<div class="container">
		<div class=" agileits w3layouts" style="width:79%; float:right;">
			<nav class="navbar agileits w3layouts navbar-default">
				<div class="navbar-header agileits w3layouts">
					<button type="button" class="navbar-toggle agileits w3layouts collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false">
						<span class="sr-only agileits w3layouts">Toggle navigation</span>
						<span class="icon-bar agileits w3layouts"></span>
						<span class="icon-bar agileits w3layouts"></span>
						<span class="icon-bar agileits w3layouts"></span>
					</button>
				</div>
				<div class="navbar-collapse agileits w3layouts collapse hover-effect" id="navbar">
					<ul class="agileits w3layouts">
						<li class="agileits w3layouts"><a href="index.php">Головна</a></li>
						<li class="agileits w3layouts"><a href="about.php">Про нас</a></li>
						<li class="agileits w3layouts"><a class="active" href="dialnist.php">Діяльність закладу</a></li>
						<li class="agileits w3layouts"><a href="preschool.php">Дошкільний підрозділ</a></li>
						<li class="agileits w3layouts"><a href="homelearning.php">Дистанційне навчання</a></li>
					</ul>
				</div>
			</nav>
		</div>
	</div>
	<div class="container">
		<div class=" agileits w3layouts" style="width:67%; float:center;">
			<nav class="navbar agileits w3layouts navbar-default">
				<div class="navbar-header agileits w3layouts">
					<button type="button" class="navbar-toggle agileits w3layouts collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false">
						<span class="sr-only agileits w3layouts">Toggle navigation</span>
						<span class="icon-bar agileits w3layouts"></span>
						<span class="icon-bar agileits w3layouts"></span>
						<span class="icon-bar agileits w3layouts"></span>
					</button>
				</div>
				<div class="navbar-collapse agileits w3layouts collapse hover-effect" id="navbar">
					<ul class="agileits w3layouts">
						<li class="agileits w3layouts"><a class="scroll" href="#doc">Документи</a></li>
						<li class="agileits w3layouts"><a class="scroll" href="#info">Інформація</a></li>
						<li class="agileits w3layouts"><a class="scroll" href="#money">Публічні кошти</a></li>
					</ul> 
				</div>
			</nav>
		</div>
		<div class="clearfix"></div>
		</div>
	</div>

	<div style="background: url('images/banner4.png') no-repeat 0px 0px; background-size:cover; min-height: 50px;">
		<p><img  style="width:6%; margin-top:10px; margin-bottom:10px; margin-left: 45%; margin-right: 45%;" src="images/logo.png" alt=" " /></p>
	</div>
	<br><br><br>
	<div class="services" id="doc">
		<div class="container">
			<h3>Документи</h3>
			<?php 
		$sql='SELECT * FROM documents WHERE type_id=1';
		$res=mysqli_query($connect, $sql);
		$i=0;
		while($t=mysqli_fetch_array($res)){
			if($i==4){
				$i=0;
			} 
			echo '<div class="col-md-3 services-grids services-grids1"><a href="'.$t[2].'"><span class="glyphicon glyphicon-book" aria-hidden="true"></span><h4>'.$t[1].'</h4></a></div>';
			$i+=1;
			if($i==4){
				echo '<div class="clearfix"></div>';
			}
		} ?>
		</div>
	</div>

	<br><br><br>

	<div class="services" id="info">
	<div class="container">
			<h3>Інформація</h3>
			<?php 
		$sql='SELECT * FROM documents WHERE type_id=2';
		$res=mysqli_query($connect, $sql);
		$i=0;
		while($t=mysqli_fetch_array($res)){
			if($i==3){
				$i=0;
			}
			echo '<div class="col-md-3 services-grids services-grids1"><a href="'.$t[2].'"><span class="glyphicon glyphicon-book" aria-hidden="true"></span><h4>'.$t[1].'</h4></a></div>';
			$i+=1;
			if($i==0){
				echo '<div class="clearfix"></div>';
			}
		} ?>
		</div>
	</div>

	<br><br><br>

	<div class="services" id="money">
		<div class="container">
			<h3>Публічні кошти</h3>
			<?php 
		$sql='SELECT * FROM documents WHERE type_id=3';
		$res=mysqli_query($connect, $sql);
		$i=0;
		while($t=mysqli_fetch_array($res)){
			if($i==3){
				$i=0;
			}
			echo '<div class="col-md-3 services-grids services-grids1"><a href="'.$t[2].'"><span class="glyphicon glyphicon-book" aria-hidden="true"></span><h4>'.$t[1].'</h4></a></div>';
			$i+=1;
			if($i==0){
				echo '<div class="clearfix"></div>';
			}
		} ?>
		</div>
	</div>
	
</body>
</html>