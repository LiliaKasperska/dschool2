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
						<li class="agileits w3layouts"><a class="active" href="about.php">Про нас</a></li>
						<li class="agileits w3layouts"><a href="dialnist.php">Діяльність закладу</a></li>
						<li class="agileits w3layouts"><a href="preschool.php">Дошкільний підрозділ</a></li>
						<li class="agileits w3layouts"><a href="homelearning.php">Дистанційне навчання</a></li>
					</ul>
				</div>
			</nav>
		</div>
	</div>
	<div class="container">
		<div class=" agileits w3layouts" style="width:56%; float:center;">
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
						<li class="agileits w3layouts"><a class="scroll" href="#history">Історія закладу</a></li>
						<li class="agileits w3layouts"><a class="scroll" href="#team">Наша гордість</a></li>
						<li class="agileits w3layouts"><a class="scroll" href="#team1">Наш колектив</a></li>
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
	<div class="about-w3-agile" id="history">
		<div class="container">
			<div class="wthree_about_grids">
				<div class="col-md-6 wthree_about_grid_left">
					<h3>Наша історія</h3>
						<p>Школа - мов друга домівка.<br>Вчителі в ній - це другі батьки.<br>Школа - це наша мандрівка,<br>Тут всім цікаво завжди.</p><br>
						<p>Людська пам'ять зберегла дату заснування села - 1785р. Гаї Розтоцькі -одне з багатих сіл Залозеччини. Лежить воно за три кілометри від смт. Залізці, яке колись було містечком і називалося Розточчя. Розточчя було знищене тата¬рами, а уцілілі жителі заснували нове поселення за лозами та назвали Залізці. Понад двісті років тому тут були сади, які належали монастирю святого Августина, руїни якого і нині є в містечку. Звісно, ніякого житла там не було, бо на¬віть будувати на території садів було заборонено.</p>
						<p>Але в Залізцях спалахнула пожежа, люди почали будувати житло в монастир¬ських садах, які тоді уже були конфісковані у монастиря австрійським урядом і продані людям. Правда, будувати тут було все ще заборонено, але інший закон не дозволяв руйнувати закінчену споруду. </p>
				</div>
				<div class="col-md-6 wthree_about_grid_right">
					<img src="images/aeec03_53cfb9de32af48a2890ab491f230abd1.png" alt=" "  />
				</div>
				
				<div class="clearfix"> </div>
			</div>
			<p style="font-size: 14px; color: #8d8d8d; line-height: 30px; margin-left: 15px; margin-right: 20px;">Цим і скористалися хитрі селяни. Вони будували вночі сяку-таку глиняну хату і зранку уже було житло. Так по¬ступово виникло село, яке назвали Гаї Розтоцькі ( від м.Розточчя ).</p>
			<p style="font-size: 14px; color: #8d8d8d; line-height: 30px; margin-left: 15px; margin-right: 20px;">Село швидко розросталося. У середині XIX ст. тут була початкова школа. Тулилася вона у двох убогих приміщеннях. </p>
			<p style="font-size: 14px; color: #8d8d8d; line-height: 30px; margin-left: 15px; margin-right: 20px;">На початку XX ст. у селі велася просвітницька діяльність: була хата-читальня, яка потім стала клубом, а ще пізніше - школою. До Першої світової війни була двокласна школа. Перша світова війна зруйнувала село. Згоріло і шкільне приміщення. У перші післявоєнні роки початкова школа знаходилася в селянських хатах. Вчителями працювало подружжя Ціховських. Після війни у 1928р. збудовано нову чотирикласну школу. Вчителями було подружжя Гаєвських, потім - Макарів. Згодом Петро Макар став директором цієї школи. У 1927р.збудовано приміщення нового корпусу. З 1944 року школа була реорганізована у семи¬річну, в якій навчалося не більше 180 учнів. Тоді ж розпочали будівництво середньої (пла¬нувався клуб). Завдяки старанням тодішнього директора Данила Даниловича Міщенка і жителів сіл Гаїв за Рудою та Гаїв Розтоцьких добудували дерев'яний другий поверх даної школи, який завершили у 1949 році. У школі навчалося 432 учні. </p>
			<p style="font-size: 14px; color: #8d8d8d; line-height: 30px; margin-left: 15px; margin-right: 20px;">Потім директором був Гнідаго Володимир Омелянович, змінила його в 1950 році Мельник Катерина, в 1953-1957рр - Жаріков І.І. 3 1957 по 1970 рік ди¬ректорував Малєєв О.С. З 1970 року 9 років школу очолював Олійник Т.Й. В 1979 році став директором Верницький М.І. і завершила директорування в старій школі в 1981 році Очколас С.П. </p>
			<p style="font-size: 14px; color: #8d8d8d; line-height: 30px; margin-left: 15px; margin-right: 20px;">У 1993 році збудовано нову сучасну школу, директором якої став Шкрібляк Б.М., його замінив у 1994 році Покиданець Г.Г., який в 2000 році передав еста¬фету діючому директору Бенцалу І.Г. </p>
			<p style="font-size: 14px; color: #8d8d8d; line-height: 30px; margin-left: 15px; margin-right: 20px;">На даний час до складу педагогічного колективу входять 36 педагогів. Серед них десять мають вищу кваліфікаційну категорію. Двом присвоєно звання « Старший учитель», вісімнадцять вчителів з І категорією, троє - з II категорією, п'ятеро - спеціалісти. </p>
			<p style="font-size: 14px; color: #8d8d8d; line-height: 30px; margin-left: 15px; margin-right: 20px;">Отже, уже шістдесят років у нашому селі функціонує загальноосвітня школа І-ІІІ ступенів, яку відвідують правнуки її перших випускників.</p>
			<p style="font-size: 18px; color: #8d8d8d; line-height: 40px; margin-left: 15px; margin-right: 20px;">Наші традиції</p>
			<p style="font-size: 14px; color: #8d8d8d; line-height: 30px; margin-left: 15px; margin-right: 20px;">За час існування Гає-Розтоцької школи в її стінах установилися хороші традиції. Це насамперед святкування власне шкільних свят, таких як свято Першого дзвоника, вибори Президента школи і шкільного парламенту, Дня вчителя, посвята учнів п’ятого класу в ряди СКОБенят, вечір зустрічі з випускниками, свято Букварика, Останній дзвінок, випускний вечір; також державних свят: Дня незалежності України, вшанування воїнів ОУН-УПА, спортивні ігри і забави, приурочені Дню української армії, вшанування пам’яті жертв голодомору і політичних репресій, Нового року, Дня соборності України, вшанування героїв, полеглих під Крутами, тижні, приурочені Лесі Українці, Тарасу Шевченку, святкування Восьмого березня, Першого квітня, Дня матері, вшанування героїв Великої вітчизняної війни 9 травня, Дня захисту дітей 1 червня; релігійних свят: свята Покрови, Андріївських вечорниць, вертепів та Різдвяних дійств, Великодніх свят…</p>
			<p style="font-size: 14px; color: #8d8d8d; line-height: 30px; margin-left: 15px; margin-right: 20px;">Хорошою традицією стало проведення благодійних акцій, приурочених Дню ветерана, святу Покрови, Дню інвалідів та людей похилого віку, «Кутя і калач до Різдвяного столу».</p>
			<p style="font-size: 14px; color: #8d8d8d; line-height: 30px; margin-left: 15px; margin-right: 20px;">Щорічно проводяться і трудові акції: «Зернятко», «Затишок», впорядкування території біля школи і пам’ятника воїнам-односельчанам, які загинули під час ВВВ, могили воїнам УПА, допомога церкві у підготовці до Різдва та Великодня… При цьому виникла певна обрядовість. Під час святкування шкільних і державних свят традиційним стало звучання Гімну України і підняття державного прапора. </p>
			<p style="font-size: 14px; color: #8d8d8d; line-height: 30px; margin-left: 15px; margin-right: 20px;">На святкуванні Першого і Останнього дзвоника, випускного вечора стало традицією взаємне привітання першокласників і випускників, виступи гостей і батьків, дирекції школи.</p>
			<p style="font-size: 14px; color: #8d8d8d; line-height: 30px; margin-left: 15px; margin-right: 20px;">До Дня вчителя учні 11 класу традиційно готують святковий вогник, вітаючи усіх вчителів: і тих, хто ще працює, і тих, хто залишив учительську стежку. Не забувають вшанувати й тих, хто відійшов у вічність.</p>
			<p style="font-size: 14px; color: #8d8d8d; line-height: 30px; margin-left: 15px; margin-right: 20px;">Щорічно в переддень Старого Нового року одинадцятикласники в традиційних обрядових костюмах посівають своїх вчителів у їхніх оселях, вітаючи з Новим роком і Різдвом Христовим. У привітання входять колядки, щедрівки, побажання здоров’я, щастя, добробуту.</p>
			<p style="font-size: 14px; color: #8d8d8d; line-height: 30px; margin-left: 15px; margin-right: 20px;">На вечорі зустрічі з випускниками хорошою традицією стало вшанування вчителів-пенсіонерів, виступи-спогади колишніх учнів, подорожі в минуле. Кожного року випускники готують емблему вечора, гумористичні номери із життя школи та держави. Школа радо вітає випускників минулих років. Кожен бажаючий може взяти слово, виступити перед гостями, згадати сторінки свого шкільного життя. Колишні випускники радо заходять в цей день у стіни рідної школи, зустрічаються із своїми вчителями, однокласниками, друзями. Зал, де відбувається урочиста частина, завжди переповнений. Незважаючи на погодні умови, сюди з’їжджаються випускники з різних куточків світу.</p>
			<p style="font-size: 14px; color: #8d8d8d; line-height: 30px; margin-left: 15px; margin-right: 20px;">Традиційними в роботі шкільного парламенту стали вибори Президента школи. Відповідно до Положення про вибори Президента школи право висунення кандидатів на посаду Президента мають учні 8-10 класів. Для організації та проведення виборів утворюється виборча комісія, завданням якої є забезпечення організації та проведення виборів. Кандидати протягом трьох днів проводять передвиборчу агітацію серед учнів школи. Кожний кандидат формує групу підтримки, яка допомагає йому в проведенні агітації, продумує методи, шукає засоби. Кожен кандидат готує свою передвиборчу програму, яка складається з трьох блоків: заходи у галузі навчання, у галузі дозвілля та по захисту прав учнів.Завершальним етапом є день виборів. Виборча комісія заздалегідь складає списки виборців, готує бюлетені з прізвищами кандидатів, встановлює кабінки та скриньку для таємного голосування. Після закінчення голосування виборча комісія підраховує голоси виборців, складає протокол. Голова виборчої комісії на лінійці зачитує протокол виборів і оголошує Президента. Після цього Президент складає урочисту присягу і запрошує всіх на президентську вечірку.</p>
			<p style="font-size: 14px; color: #8d8d8d; line-height: 30px; margin-left: 15px; margin-right: 20px;">У школі діє дитячо-юнацьке об’єднання СКОБ, метою якого є формування в школярів патріотичного духу, інтересу до минулого свого краю, любов до рідної землі, її традицій, гордості за славне минуле України. СКОБ має свій статут, структуру (гурт → курінь → курінний, діловоди: заступник, писар, хронікар, скарбник), працює за затвердженим планом. Урочисто відбувається традиційне прийняття учнів 5 класу в ряди СКОБу. Бажаючі вступити в лави об’єднання складають присягу, виголошують обітниці перед курінним та старшими скобенятами на святковій лінійці. Між гуртками новообраного куреня проводяться змагання на витривалість, силу, хоробрість, дружбу, знання історії краю, козацтва.</p>
			<p style="font-size: 14px; color: #8d8d8d; line-height: 30px; margin-left: 15px; margin-right: 20px;">Педагогічний колектив ЗОШ І-ІІІст. с. Гаїв Розтоцьких розуміє, що нічого сталого не буває, особливо в роботі з дітьми. Тому постійно вдосконалює існуючу систему виховної роботи, вносить щось нове, від чогось відмовляється. Але для нас залишається незмінним одне – зробити шкільне життя дітей насиченим, змістовним, цікавим!</p>
		</div>
	</div>

	<div class="team" id="team">
		<div class="container">
			<h3>Наша гордість</h3>
			<?php 
		$sql='SELECT * FROM people';
		$res=mysqli_query($connect, $sql);
		$i=0;
		while($t=mysqli_fetch_array($res)){
			if($i==4){
				$i=0;
			}
			if($i==0){
				echo '<div class="agile_team_grids">';
			}
			echo '<div class="col-md-3 agile_team_grid  agile_team_gridf"><div class="agile_team_grid_main"><img src="'.$t[3].'" alt=" " /></div><div class="agile_team_grid1"><h4>'.$t[1].'</h4><p>'.$t[2].'</p></div></div>';
			$i+=1;
			if($i==4){
				echo '<div class="clearfix"> </div></div>';
			}
		} ?>
			
		</div>
	</div>
	<div class="clearfix"> </div>
	<div class="team" id="team1">
		<div class="container"><h3>Наш колектив</h3>
		<?php 
		$sql='SELECT * FROM teachers';
		$res=mysqli_query($connect, $sql);
		$i=0;
		while($t=mysqli_fetch_array($res)){
			if($i==4){
				$i=0;
			}
			if($i==0){
				echo '<div class="agile_team_grids">';
			}
			echo '<div class="col-md-3 agile_team_grid  agile_team_gridf"><div class="agile_team_grid_main"><img src="'.$t[3].'" alt=" " /></div><div class="agile_team_grid1"><h4>'.$t[1].'</h4><p>'.$t[2].'</p></div></div>';
			$i+=1;
			if($i==4){
				echo '<div class="clearfix"> </div></div>';
			}
		} ?>
			
			</div>
	</div>
</body>
</html>