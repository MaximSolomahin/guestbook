<!DOCTYPE html>
<html lang="ru">
	<head>
		<meta charset="utf-8">  
		<title>Гостевая книга</title>
		<link rel="stylesheet" href="css/bootstrap/css/bootstrap.css">
		<link rel="stylesheet" href="css/styles.css">
	</head>
	<body>
    <?php
    require_once 'functions/function.php';
    $link = connectDB();
//ADD massage
    if (isset($_POST['submit'])){
        $date = date('Y-m-d H:i:s');
        addMassage($_POST['name'],$_POST['text'],$date);
    }
    ?>
		<div id="wrapper">
			<h1>Гостевая книга</h1>
			<div>
				<nav>
				  <ul class="pagination">
					<li class="disabled">
						<a href="?page=1"  aria-label="Previous">
							<span aria-hidden="true">&laquo;</span>
						</a>
					</li>
					<li class="active"><a href="?page=1">1</a></li>
					<li><a href="?page=2">2</a></li>
					<li><a href="?page=3">3</a></li>
					<li><a href="?page=4">4</a></li>
					<li><a href="?page=5">5</a></li>
					<li>
						<a href="?page=5" aria-label="Next">
							<span aria-hidden="true">&raquo;</span>
						</a>
					</li>
				  </ul>
				</nav>
			</div>
            <?php


            ?>
			<div class="note">
				<p>
					<span class="date">18.04.2014 23:59:59</span>
					<span class="name">Дмитрий</span>
				</p>
				<p>
					Lorem ipsum dolor sit amet, 
					consectetur adipiscing elit. 
					Nulla efficitur elementum lorem id venenatis. 
					Nullam id sagittis urna, eu ultrices risus. 
					Duis ante lorem, semper nec fringilla eu,
					commodo vel mauris. Nunc tristique odio lectus, eget condimentum nunc consectetur eu. Nullam non varius nisl, aliquet fringilla lectus. Aliquam erat volutpat. Ut vel mi et lectus hendrerit ornare vel ut neque. Quisque venenatis nisl eu mi
				</p>
			</div>	
			<div class="note">
				<p>
					<span class="date">16.04.2014 14:59:59</span>
					<span class="name">Николай</span>
				</p>
				<p>
					Ut varius commodo fringilla. Nullam id pulvinar odio. Pellentesque gravida aliquam ipsum, et malesuada neque molestie eget. Vestibulum sagittis finibus efficitur. Donec sit amet aliquet dolor, vitae ornare tortor. Etiam eget augue nec diam vehicula bibendum. Nulla quis erat lacus. Vestibulum quis mattis augue. Praesent dignissim, justo non aliquam feugiat, lorem metus egestas leo, quis eleifend odio quam in ex. Aenean diam est, scelerisque ac ultricies sit amet, vulputate in tortor. Etiam ac mi enim. Sed pellentesque elementum erat eu eleifend. Integer imperdiet sem eu magna feugiat, sed efficitur velit convallis. 
				</p>
			</div>	
			<div class="note">
				<p>
					<span class="date">15.04.2014 12:59:59</span>
					<span class="name">Петр</span>
				</p>
				<p>
					Phasellus gravida fermentum pellentesque. Aenean non neque mollis nisl dapibus eleifend. Sed interdum dui nec dictum elementum. Proin eget semper dolor, ut commodo nibh. 
					Quisque vitae pharetra ligula. Sed dictum, sem sed pellentesque aliquam, tellus sapien dapibus magna, eu suscipit lacus augue sed velit. Ut vehicula sagittis nulla, et aliquet elit. Quisque tincidunt sem nibh, finibus dictum nisl vulputate quis. In vitae nisl et lacus pulvinar ornare id ac libero. Morbi pharetra fringilla erat ut lacinia. 
				</p>
			</div>	
			<div class="info alert alert-info">
				Запись успешно сохранена!
			</div>
			<div id="form">
				<form action="" method="POST">
					<p><input name="name" class="form-control" placeholder="Ваше имя"></p>
					<p><textarea name="text" class="form-control" placeholder="Ваш отзыв"></textarea></p>
					<p><input name="submit" type="submit" class="btn btn-info btn-block" value="Сохранить"></p>
				</form>
			</div>
		</div>
	</body>
</html>

