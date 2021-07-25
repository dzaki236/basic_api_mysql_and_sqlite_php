<?php
include "./connection.php";
include "./helper.php";

$id = $_POST['id'];
// $results = array();
$result = query("SELECT * FROM buku where buku.id = $id")[0];
echo json_encode($result);
?>