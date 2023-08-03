<?php
include_once "../templates/database.php";

$data = file_get_contents("php://input");
$data = json_decode($data, true);

$query = "DELETE FROM `cart` WHERE id = $data";

$result = mysqli_query($link, $query);

$response = $result ? "Материал успешно удален из корзины" : "Ошибка";

echo $response;