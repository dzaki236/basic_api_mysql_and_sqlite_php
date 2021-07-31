<?php
// activate this for debugging
// print_r($_POST); 

//include connection and helper
include "./connection.php";
include "./helper.php";
//Message (flash message)
$result['message']="";

// $variable = htmlentities(htmlspecialchars(mysqli_real_escape_string($connection,$_POST[''])));

if(/*condition*/){
    $result['message']="<p style='color:red;'>Message error here!</p>";
}
else if(/*condition*/){
    $result['message']="<p style='color:red;'>Another message error here!</p>";
}else{
    $query = mysqli_query($connection,"INSERT INTO `table` VALUES()");
    if($query){
        $result['message']="<p style='color:green;'>Success message!</p>";

    }else{
        $result['message']="<p style='color:red;'>Failed message !</p>";
    }
}

echo json_encode($result);
?>