<?php
include "./connection.php";
include "./helper.php";

$id = $_POST['id'];
// $results = array();
$sql = query("SELECT * FROM buku where buku.id = '$id'")[0];
// if(count($sql))
// echo json_encode($result);
?>