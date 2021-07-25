<?php
include "./connection.php";
include "./helper.php";
$resultdata = query("SELECT * FROM buku");
echo json_encode($resultdata);
?>