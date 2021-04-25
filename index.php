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

$result = mysqli_query($link, "SELECT COUNT(*) as count FROM massage WHERE id > 0");
$count = mysqli_fetch_assoc($result)['count'];

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

                <?php
                //<li class="active"><a href="?page=1">1</a></li>
                    for ($i = 1; $i <= $count; $i++){
                        ?>
                <li><a href="?page=<?=$i?>"><?=$i?></a></li>
                <?php

                    }
                ?>
                <li>
                    <a href="?page=5" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
    <?php
    $pages = $_GET['page'];
        viewMessage($pages);
    ?>

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
