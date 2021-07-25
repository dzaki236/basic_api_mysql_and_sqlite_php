<?php
//include connection and helper
include "./connection.php";
include "./helper.php";
// $variable = query("query sql berbentuk string"); di ambil dari include connection dan helper php
$resultdata = query("query sql here");
echo json_encode($resultdata);
// echo json_encode($variable); untuk menampilkan result dari query
?>