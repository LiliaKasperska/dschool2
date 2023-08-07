<?php 
    require("connect_db.php");
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Admin school</title>
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
        <div class="logo-navigation-w3layouts" >
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
                        <li class="agileits w3layouts"><a href="index.php" >Сайт</a></li>
	    					<li class="agileits w3layouts"><a href="adm_index.php" >Головна</a></li>
	    					<li class="agileits w3layouts"><a href="adm_news_add.php">Новини</a></li>
                            <li class="agileits w3layouts"><a href="adm_t_add.php">Викладачі</a></li>
                            <li class="agileits w3layouts"><a href="adm_p_add.php" class="active">Наша гордість</a></li>
	    					<li class="agileits w3layouts"><a href="adm_downl_file_add.php">Документи</a></li>
	    					<li class="agileits w3layouts"><a href="adm_form.php">Форма</a></li>
	    				</ul>
	    			</div>
	    		</nav>
	    	</div>
	    	<div class="clearfix"></div>
	    	</div>
	    </div>
        <hr>
        <div class="row first_div"></div>
        <div class="row">
            <div class="col-sm-3"></div>
            <div class="col-sm-6">
                <div class="row" >
                    <ul class="nav nav-tabs"align="center">
                        <li class="nav-item">
                            <a class="nav-link active" href="adm_p_add.php">Додати</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="adm_p_update.php">Редагувати</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="adm_p_delete.php">Видалити</a>
                        </li>
                    </ul>
                </div>
                <div class="row after_menu"></div>
                <h2 align="center">Додати випускника</h2>
                <div class="row after_menu"></div>
                <form action="adm_p_add.php" method="post" enctype="multipart/form-data">
                    <fieldset class="form-group">
                        <label for="pib">ПІБ</label>
                        <input type="text" class="form-control" name="pib">
                    </fieldset>
                    <fieldset class="form-group">
                        <label for="ppib">Посада</label>
                        <input type="text" class="form-control" name="ppib">
                    </fieldset>
                    <fieldset class="form-group">
                            <label for="foto">Виберіть зображення</label><br>
                            <input name="foto" type="file" >
                    </fieldset>
                    <button type="submit" class="btn btn-primary" value="123" name="123">Зберегти</button>
                </form>
                <?php
                    if(isset($_POST['123'])){
                        if(!empty($_POST['pib']) and !empty($_POST['ppib'])){
                            $pib=$_POST['pib'];
                            $ppib=$_POST['ppib'];
                                $file = "adm_img/".$_FILES['foto']['name'];
                                move_uploaded_file($_FILES['foto']['tmp_name'], $file);
                                if(isset($_FILES['foto']['name'])){
                                    echo "Завантажений файл: ".$_FILES['foto']['name']."</br>";
                                }
                            $sql="INSERT INTO people (name, position, foto) VALUES ('$pib', '$ppib', '$file')";
                            $res=mysqli_query($connect,$sql);
                            if($res){
                                echo "Випускника додано";
                            }
                        } else {
                            echo '  * Заповніть усі поля!';
                            } 
                        }?>
            </div>
            <div class="col-sm-3"></div>
        </div>
    </body>
</html>