<?php
//include connection first
include "./connection.php";
//helper function (query)
function query(string $queries){
global $connection;
$results = [];
$query_sql = mysqli_query($connection,$queries);
while($result = mysqli_fetch_assoc($query_sql)){
    $results[] = $result;
}
return $results;
}
?>