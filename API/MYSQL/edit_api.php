<?php
//include connection and helper
include "./connection.php";
include "./helper.php";
// id dari data yang di pilih
$id = htmlentities(htmlspecialchars(mysqli_real_escape_string($connection, $_POST['id']))); 
// $variable = query("query sql berbentuk string dan kondisi"); di ambil dari include connection dan helper php
$result = query("query sql dengan kondisi")[0];

echo json_encode($result);
?>