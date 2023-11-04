<?php
include 'connect.php';
session_start();
if(!isset($_SESSION['username'])){
    header('location:index.php');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome page</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
    <div class="jumbotron">
  <h1 class="display-4 text-center text-success">Welcome <?php echo $_SESSION['username']?></h1>
 
  <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
  <a class="btn btn-danger btn-lg" href="#" role="button">Logout</a>
</div>    
    
</body>
</html>