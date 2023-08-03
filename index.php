<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Главная</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="content">
    <main>
        <?php
        include_once "templates/header.php"
        ?>
        <div class="main-foto">
            <a href="catalog.php"><button class="butcat"><img src="./img/catalog.png" alt=""> Каталог</button></a>
            <form class="poisk" method="POST" action="catalog.php">
                <input type="text" name="search" placeholder="Поиск">
                <button class="search"><img src="img/sea.png" alt=""></button>
            </form>
        </div>
        <div class="main-collection">
            <div class="main-box">
                <div class="text">
                    <h3>Инстументы для строительства</h3>
                    <p>по низким ценам</p>
                </div>
                <img src="./img/dr1.png">
            </div>
            <div class="box">
                <div class="text">
                    <h3>Садовая мебель</h3>
                    <p>отдыхайте с комфортом</p>
                </div>
                <img src="./img/sad.jpg.png">
            </div>
            <div class="box">
                <div class="text">
                    <h3>Услуги по ремонту и бесплатное обслуживание</h3>
                </div>
                <img src="./img/lin.png">
            </div>
            <div class="box">
                <div class="text">
                    <h3>Бренды</h3>
                    <p>выбирайте любимые марки</p>
                </div>
                <img src="./img/kuh.png">
            </div>
        </div>
    </main>
</div>
<?php
    include_once "templates/footer.php"
?>

<script src="jquery-3.6.0.min.js"></script>
<script src="main.js"></script>
</body>
</html>