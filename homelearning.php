<?php
require("connect_db.php");

$sql='SELECT * FROM main';
$res=mysqli_query($connect, $sql);
$result=mysqli_fetch_array($res);
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
						<li class="agileits w3layouts"><a href="index.php">Головна</a></li>
						<li class="agileits w3layouts"><a href="about.php">Про нас</a></li>
						<li class="agileits w3layouts"><a href="dialnist.php">Діяльність закладу</a></li>
						<li class="agileits w3layouts"><a href="preschool.php">Дошкільний підрозділ</a></li>
						<li class="agileits w3layouts"><a class="active" href="homelearning.php">Дистанційне навчання</a></li>
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
	<br><br>
	<div class="featured-work">
		<div class="container">
			<h3>Дистанційне навчання</h3>
			<div class="col-md-6 featured-left">
				<br><br>
				<div class="wmuSlider example1 animated wow slideInUp" data-wow-delay=".5s">
					<div class="wmuSliderWrapper">
						<article style="position: absolute; width: 100%; opacity: 0;"> 
							<div class="banner-wrap">
								<img src="images/f2.jpg" alt=" " class="img-responsive" />
							</div>
						</article>
						<article style="position: absolute; width: 100%; opacity: 0;"> 
							<div class="banner-wrap">
								<img src="images/gallery-2.jpg" alt=" " class="img-responsive" />
							</div>
						</article>
						<article style="position: absolute; width: 100%; opacity: 0;"> 
							<div class="banner-wrap">
								<img src="images/gallery-9.jpg" alt=" " class="img-responsive" />
							</div>
						</article>
					</div>
				</div>
			</div>
			<script src="js/jquery.wmuSlider.js"></script> 
								<script>
									$('.example1').wmuSlider();         
								</script> 

			<div class="col-md-6 featured-right">
				<h4>Дистанці́йне навча́ння (англ. Distant learning) </h4>
				<p>  За останні роки розвиток інформаційних технологій зробив актуальною проблему модернізації системи освіти. Суть такої модернізації найбільше відбилася в концепції дистанційної освіти (ДО), яка, завдяки такому глобальному явищу як Інтернет, охоплює широкі шари суспільства та стає найважливішим фактором його розвитку. Особливого значення така модернізація системи освіти набуває в Україні.  Згідно з деякими дослідженнями, в Україні близько 30% навчальних закладів заявили про те, що вже мають або планують організувати навчання в режимі ДО. Однак найчастіше за цим стоїть звичайна заочна форма навчання. Чим же відрізняється дистанційна освіта від інших видів отримання знань і професії? </p>
			</div>
			<div class="col-md-12 featured-right">
				<p>Насамперед, ДО - це відкрита система навчання, що передбачає активне спілкування між викладачем і студентом за допомогою сучасних технологій та мультимедіа. Така форма навчання дає свободу вибору місця, часу та темпу навчання.  Система ДО має ряд переваг і значно розширює коло потенційних студентів. Одержати освіту дистанційно має можливість молодь, яка не може поєднувати навчання з роботою або проживає у віддаленій від обласних центрів місцевості; військовослужбовці; домогосподарки; керівники; бізнесмени або студенти, що бажають паралельно одержати освіту. Дистанційна форма навчання підходить майже всім, тому що дає можливість гармонійно поєднувати навчання та повсякденне життя.  Варто відзначити, що ДО - доступна можливість одержати освіту за кордоном з мінімальними фінансовими витратами при великому виборі спеціальностей, оскільки більшість ВНЗ Європи та США ввели таку зручну для студентів форму освіти набагато раніше, ніж Україна.  Сучасна освіта вимагає безупинно розширювати своє сприйняття комплексності світу та формування інформаційного суспільства. Для того, щоб знання отримали конкретний зв'язок з діями, необхідно постійно "навчати себе", поповнюючи й розширюючи свою освіту. Саме цю мету й ставить перед собою дистанційна освіта.</p>
				<p>Центр дистанційної освіти "Ейдос"</p>
				<p>Колекція відеоуроків з основних предметів шкільної програми</p>
				<p><a href="http://disted.edu.vn.ua/">Disted - дистанційне навчання</a></p>
				<p>Дистанційне навчання – дієвий спосібx	 отримання знань</p>
			</div>
			<div class="clearfix">
			</div>
		</div>
	</div>
	<div class="contact-w3-agileits" id="contact">
		<div class="container">
			<div class="col-md-5 contact-left-w3ls">
				<h3>Контакти</h3>
				<div class="visit">
					<div class="col-md-2 contact-icon-wthree">
						<span class="glyphicon glyphicon-home" aria-hidden="true"></span>
					</div>
					<div class="col-md-10 contact-text-agileinf0">
						<h4>Адреса</h4>
						<h5><?php echo $result['adress']; ?></h5>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="mail">
					<div class="col-md-2 contact-icon-wthree">
						<span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
					</div>
					<div class="col-md-10 contact-text-agileinf0">
						<h4>E-mail</h4>
						<h5><a href="mailto:<?php echo $result['email']; ?>"><?php echo $result['email']; ?></a></h5>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="call">
					<div class="col-md-2 contact-icon-wthree">
						<span class="glyphicon glyphicon-phone" aria-hidden="true"></span>
					</div>
					<div class="col-md-10 contact-text-agileinf0">
						<h4>Телефон</h4>
						<h5><?php echo $result['phone']; ?></h5>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="visit">
					<div class="col-md-2 contact-icon-wthree">
						<span class="glyphicon glyphicon-time" aria-hidden="true"></span>
					</div>
					<div class="col-md-10 contact-text-agileinf0">
						<h4>Робочі години</h4>
						<h5>Пн-Пт 08:00 - 18:00</h5>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
			<div class="col-md-7 contact-right-w3l">
				<h3>Залишити повідомлення</h3>
				<form action="homelearning.php" method="post">
					<input type="text"  class="name" name="pib" placeholder="Ім'я, Прізвище" required="">
					<input type="text"  class="name" name="mail" placeholder="Email / телефон" required="">
					<textarea placeholder="Повідомлення..." required="" name="text"></textarea>
					<input type="submit" name="send" value="Надіслати">
				</form>
			</div>
			<?php
			if(isset($_POST['send'])){
				$sql="INSERT INTO `question`(`name`, `type_id`, `phone`, `message`, `date`) VALUES ('".$_POST['pib']."','2','".$_POST['mail']."','".$_POST['text']."',NOW())";
				$res=mysqli_query($connect, $sql);
			}
			?>
			<div class="clearfix"></div>
		</div>
	</div>
</body>
</html>