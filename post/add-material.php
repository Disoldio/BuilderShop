<?php
include_once "../templates/database.php";

$data = file_get_contents("php://input");
$data = json_decode($data, true);

$query = "INSERT INTO `cart` (`id`, `material_id`, `kolvo`) VALUES (NULL, '$data', '1')";

$result = mysqli_query($link, $query);

$response = $result ? "Материал успешно добавлен в корзину" : "Ошибка";

echo $response;