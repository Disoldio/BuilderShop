<?php
include_once "./templates/database.php";

$query = "SELECT * FROM material WHERE id=$materialID";

// echo $query;

$result = mysqli_query($link, $query);

$product = mysqli_fetch_assoc($result);

$query = "SELECT * FROM cart WHERE material_id=$materialID";

$result = mysqli_query($link, $query);

$materialIsInCart = mysqli_fetch_assoc($result);

$materialIsInCart = $materialIsInCart != null;

// var_dump($materialIsInCart);