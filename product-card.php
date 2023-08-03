<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MaterialName</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="content">
        <?php
            include_once "templates/header.php";
        ?>
        <main>
            <?php
            
            $materialID = $_GET['id'];

            include_once "get/get-current-material.php";
            echo "<div class='yabloko'>";
            echo "<div class='bolda'>";
            echo "<img class='proImg' src=' ".$product['img']."'>"."<br>";
            echo "</div>";
            echo "<div class='piada'>";
            echo "<h2> Название материала: ".$product['name']."</h2><br>";
            echo "<h3>Описание материала: ".$product['discription']."</h3><br>";
            echo "<h4>Цена материала: ".((int)$product['price']).".00 Руб</h4><br>";
            echo "<button onclick='AddProduct(".$product['id'].")'>Добавить в корзину</button>";
            echo "<button onclick='IncreaseProduct(".$product['id'].")'>Увеличить количество</button>";
            echo "</div>";
            echo "</div>";
            
            echo "<script>document.title = '".$product['name']."'</script>";
            ?>
        </main>
    </div>

    <?php include_once "templates/footer.php"; ?>

    <script src="product-card.js"></script>
</body>
</html>
