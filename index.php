<?php
include 'server.php';
if(isset($_POST['submit'])){
    
    $name=$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $mobile=$_POST['mobile'];

    $sql="INSERT INTO users(name,email,password,mobile) VALUE ('$name','$email','$password','$mobile')";
    $result=mysqli_query($conn,$sql);
    if($result){
      header('location:display.php');
    }
   else{
    die(mysqli_error($conn)) ;
   }
}
?>



<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Crud Operation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
   <div class="container my-5">
   <form class="row g-3" method="post">
   <div class="col-md-6">
    <label class="form-label">Name</label>
    <input type="text" class="form-control" placeholder="Enter your name" name="name" autocomplete="ogg">
  </div>
  
  <div class="col-6">
    <label class="form-label">Email</label>
    <input type="email" class="form-control"  placeholder="Enter your email" name ="email" autocomplete="ogg">
  </div>
 
  <div class="col-md-6">
    <label class="form-label">Password</label>
    <input type="password" class="form-control" placeholder="Enter your password" name="password" autocomplete="ogg">
  </div>
  <div class="col-6">
    <label  class="form-label">Mobile</label>
    <input type="text" class="form-control" placeholder="Enter your mobile number" name="mobile" autocomplete="ogg">
  </div>
 
  <div class="col-12">
    <button type="submit" class="btn btn-primary" name="submit">Sign in</button>
  </div>
</form>
   </div>
    
  </body>
</html>