<?php
session_start();
$login=0;
$invalid=0;
if($_SERVER['REQUEST_METHOD']=='POST'){
    include 'connect.php';
    if(isset($_POST['login'])){
        $username=$_POST['username'];
        $password=md5($_POST['password']);

        $sql="Select * from data where username='$username' and password='$password'";
        $result=mysqli_query($con,$sql);
        if($result){
            $num=mysqli_num_rows($result);
            if($num>0){
               // echo "Login successfull";
               $login=1;
               $_SESSION['username']=$username;
               header('location:welcome.php');
            }else{
                //echo "Invalid credentials";
                $invalid=1;
            }
            
        }

    }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login page</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>
<body>
    <?php
if($login){
    echo "<div class='alert alert-success' role='alert'>
Login successfull   
  </div>";
}else{
    if($invalid){
        echo "<div class='alert alert-danger' role='alert'>
        Invalid credentials  
          </div>";
    
    }
} 
    
?>
</body>
</html>