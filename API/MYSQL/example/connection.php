<?php
$host = 'localhost';//rubah ini
$username = 'username';//rubah ini
$password = 'passwords';//rubah ini 
$db_name = 'contoh';//rubah ini
// $db_table = 'buku';//rubah ini
$connection = mysqli_connect($host,$username,$password,$db_name);
if(!$connection)
{
    echo 'mysql_eror'.mysqli_connect_error($connection);
}

?>