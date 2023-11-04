<?php
$con=mysqli_connect('localhost','root','','registrationdata');
if(!$con){
    echo"connection successfully";
}else{   
    die(mysqli_connect_error());
}

?>