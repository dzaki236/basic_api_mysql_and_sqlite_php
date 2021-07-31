<?php

$host = 'localhost';//rubah ini
$username = 'username';//rubah ini
$password = 'passwords';//rubah ini 
$db_name = 'contoh';//rubah ini

// mysql_connection
$connection = mysqli_connect($host,$username,$password,$db_name);
//kondisi
if(!$connection)
{
    echo 'mysql_eror'.mysqli_connect_error($connection);
}

?>