<?php
$data = file_get_contents("php://input");
$data = json_decode($data, true);

$request = "";
$searchRequest = "";

$request = $data['currentSort'] == "" ? "" : "ORDER BY ".$data['currentSort'];
$searchRequest = $data['search'] == "" ? "" : "AND name LIKE '%".$data['search']."%'";

// echo $request;

include_once "../templates/database.php";

$query = "SELECT * FROM material WHERE price >= ".$data['minprice']." AND price <= ".$data['maxprice']." $searchRequest $request";

// echo $query;

$result = mysqli_query($link, $query);

$products = [];

while($product = mysqli_fetch_assoc($result)){
    array_push($products, $product);
}

$products = json_encode($products);

echo $products;