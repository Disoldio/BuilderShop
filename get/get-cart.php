<?php
include_once "../templates/database.php";

$query = "SELECT cart.id,cart.material_id,material.name,material.price,cart.kolvo FROM material,cart WHERE material.id = cart.material_id";

// SELECT material.name,material.price,cart.kolvo FROM material,cart WHERE material.id = cart.material_id

// echo $query;

$result = mysqli_query($link, $query);

// var_dump($result);

$cart = [];
while($material = mysqli_fetch_assoc($result)){
    array_push($cart, $material);
}
$cart = json_encode($cart);

echo $cart;