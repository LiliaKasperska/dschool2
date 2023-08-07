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
<?php
require("connect_db.php");

$sql='SELECT * FROM main';
$res=mysqli_query($connect, $sql);
$result=mysqli_fetch_array($res);
?>
<body>
	<div class="header">
		<div class="container">
			<div class="w3l_header_left"> 
				<ul>
					<li><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span><?php echo $result['phone']; ?></li>
					<li><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span><a href="mailto:<?php echo $result['email']; ?>"><?php echo $result['email']; ?></a></li>
					<li><span class="glyphicon glyphicon-home" aria-hidden="true"></span><?php echo $result['adress']; ?></li>
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
						<li class="agileits w3layouts"><a href="index.php" class="active">Головна</a></li>
						<li class="agileits w3layouts"><a href="about.php">Про нас</a></li>
						<li class="agileits w3layouts"><a href="dialnist.php">Діяльність закладу</a></li>
						<li class="agileits w3layouts"><a href="preschool.php">Дошкільний підрозділ</a></li>
						<li class="agileits w3layouts"><a href="homelearning.php">Дистанційне навчання</a></li>
					</ul>
				</div>
			</nav>
		</div>
		<div class="clearfix"></div>
		</div>
	</div>
	<div style="background: url('images/banner3.png') no-repeat 0px 0px; background-size:cover; min-height:650px;">
		<br><br><br><br><br>  
		<p><img  style="width:8%; margin-top:10px; margin-left: 45%; margin-right: 45%;" src="images/logo.png" alt=" " /></p><br>
		<p style="color: #fff; font-size: 30px; letter-spacing: 1px; text-transform: uppercase; text-align: center; font-weight: 600;">Гає-Розтоцький навчально - виховний комплекс</p>
		<h2 style="color:#fff;
		font-size:50px;
		letter-spacing:1px;
		font-weight:700;
		text-transform:uppercase;
		margin:30px 0px;">"Загальноосвітня школа І-ІІІ ступенів - дошкільний навчальний заклад"</h2>
		<p style="color: #fff; font-size: 30px; letter-spacing: 1px; text-transform: uppercase; text-align: center; font-weight: 600;">ім. Казимира Патриляка Тернопільського району Тернопільської області</p>
	</div>
	<div style="height: 25px;"></div>
	<div class="featured-work">	
	<div class="container">
	<h3>Новини</h3>
	<?php 
          $sql='SELECT * FROM news ORDER BY id DESC';
          $res=mysqli_query($connect, $sql);
          while($news=mysqli_fetch_array($res)){ ?>
			<div class="col-md-5 featured-left">
				<div class="wmuSlider example1 animated wow slideInUp" data-wow-delay=".2s">
					<div class="wmuSliderWrapper">
					<?php 
						$f=array();
						$a=0;
        				$m="";
						for($i=0;$i<strlen($news['fotos']);$i++){
							if($news['fotos'][$i]=="*"){
								$a++;
            				$f[]=$m;
            				$m="";
							} else {
								$m=$m.$news['fotos'][$i];
							}
						}
						for($i=0;$i<count($f);$i++){ ?>						
						<article style="position: absolute; width: 10px; opacity: 0;"> 
							<div class="banner-wrap">
								<img src="<?php echo $f[$i]; ?>" alt=" " class="img-responsive" />
							</div>
						</article>
						<?php }  ?>
					</div>
				</div>
			</div>
			<script src="js/jquery.wmuSlider.js"></script> 
								<script>
									$('.example1').wmuSlider();         
								</script> 

			<div class="col-md-6 featured-right">
				<h4><?php echo $news['name']; ?></h4>
				<p><?php echo $news['s_text']; ?></p>
				<a href="#" data-toggle="modal" data-target="#myModal<?php echo $news['id']; ?>">Читати повністю</a>
			</div>
			<div id="myModal<?php echo $news['id']; ?>" class="modal fade" role="dialog">
					<div class="modal-dialog">
						<div class="modal-content">
						  <div class="modal-header">
							<button type="button" class="close" data-dismiss="modal">&times;</button>
							<h4 class="modal-title"><?php echo $news['name']; ?></h4>
						  </div>
						  <div class="modal-body">
							<p><?php echo $news['text']; ?></p>
						  </div>
						  <div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal">Закрити</button>
						  </div>
						</div>
					</div>
				</div>
			<div class="clearfix">
			</div>
			<div style="height: 25px;"></div>
	<?php } ?></div>
	</div>
</body>
</html>