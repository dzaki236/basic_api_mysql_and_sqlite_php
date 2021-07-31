<?php
include "./connection.php";
function query(string $queries){
global $connection;
$results = array();
$query_sql = mysqli_query($connection,$queries);
if(mysqli_num_rows($query_sql) > 0){
while($result = mysqli_fetch_assoc($query_sql)){
    $results[] = $result;
}
}
return $results;
}

// var_dump(query("SELECT * FROM `buku`"));


?>