<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Каталог</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="content">
        <main>
            <?php
                include_once "templates/header.php";
            ?>
            <h1>Каталог</h1>
            <div class="filtr">
                <h2>Сортировка по:</h2> 
                <h3>имени:</h3>
                <form>
                    <div class="filtro">
                        от А до Я <input type="radio" name="sort" value="name ASC"><br>
                        от Я до А <input type="radio" name="sort" value="name DESC"><br>
                    </div>
                    <h3>цене:</h3>
                    <div class="filtro anton2">
                        по возрастанию<input type="radio" name="sort" value="price ASC"><br>
                        по убыванию<input type="radio" name="sort" value="price DESC"><br>
                    </div>
                </form>
                <h2>Фильтрация по:</h2>
                <h3>цене:</h3>
                <div class="filtro anton3">
                    <input type="number" class="num" value="0" id="pr1" min="0" onchange="GetProducts()"
                            onkeypress="return (event.keyCode > 47 && event.keyCode < 58);" 
                            oninput="this.value = this.value.replace(/[^0-9]/g, '');" 
                            onpaste="return /^[0-9]+$/g.test((event.clipboardData || window.clipboardData).getData('text'));"
                            pattern="^[0-9]+$" 
                        required> - <input type="number" class="num" value="5000" id="pr2" min="1" onchange="GetProducts()" 
                            onkeypress="return (event.keyCode > 47 && event.keyCode < 58);" 
                            oninput="this.value = this.value.replace(/[^0-9]/g, '');" 
                            onpaste="return /^[0-9]+$/g.test((event.clipboardData || window.clipboardData).getData('text'));"
                            pattern="^[0-9]+$" 
                            required>руб
                </div>

            </div>
            <div class="flex" id="catalog"></div>
        </main>
    </div>
<?php
    include_once "templates/footer.php";

    $search = isset($_POST['search']) ? $_POST['search'] : "";
    echo "<script> var search = '".$search."' </script>";
?>

<script src="catalog.js"></script>
</body>
</html>