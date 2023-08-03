<?php
include_once "./templates/database.php";

$query = "SELECT * FROM material WHERE id=$materialID";

// echo $query;

$result = mysqli_query($link, $query);

$product = mysqli_fetch_assoc($result);