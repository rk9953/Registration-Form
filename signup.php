<?php
$user=0;
$success=0;
$match=0;
if($_SERVER['REQUEST_METHOD']=='POST'){
    include 'connect.php';
    if(isset($_POST['signup'])){
$username=$_POST['username'];
$password=md5($_POST['password']);
$Cpassword=md5($_POST['cpassword']);

//$sql="insert into data (username,password) value('$username','$password')";
//$result=mysqli_query($con,$sql);
//if($result){
   // echo " Data inserted successfully";
//}else{
//    die(mysqli_error($con));
//}

$sql="select * from data where username='$username'";
$result=mysqli_query($con,$sql);
if($result){
    $num=mysqli_num_rows($result);
    //echo $num;
    if($num>0){
       // echo "user already exist";
       $user=1;
    }
    else{
        if($password===$Cpassword){
            $sql="insert into data (username, password) value('$username','$password')";
            $result=mysqli_query($con,$sql);
            if($result){
                //echo "Signup successfull";
                $success=1;

            }
        }else{                
            //echo "Password didn't match";
            $match=1;
        }

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
    <title>signup page</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>
<body>
    <?php
if($user){
    echo "<div class='alert alert-danger' role='alert'>
User already exist    
  </div>";
}else{
    if($success){
        echo "<div class='alert alert-success' role='alert'>
        Signup successfull   
          </div>";
    }else{
        if($match){
            echo "<div class='alert alert-danger' role='alert'>
            Password didn't match
              </div>";
        }
    }
} 
    
?>
</body>
</html>