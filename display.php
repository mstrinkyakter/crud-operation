<?php
include "server.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud Operation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        
        <button class="btn btn-primary my-5"> <a href="user.php" class="text-light text-decoration-none">Add User</a> </button>

        <table class="table">
  <thead>
    <tr>
      <th scope="col">Sl no</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Password</th>
      <th scope="col">Mobile</th>
      <th scope="col">Operation</th>
    </tr>
  </thead>
<tbody>
<?php
$sql="select* from `crud_table`";
$result=mysqli_query($conn,$sql);
if($result){
 while( $row = mysqli_fetch_assoc($result)){
    $id=$row['Id'];
    $name=$row['name'];
    $email=$row['email'];
    $password=$row['password'];
    $mobile=$row['mobile'];
    echo '   <tr>
     <th scope="row">'.$id.'</th>
    <td>'.$name.'</td>
    <td>'.$email.'</td>
    <td>'.$password.'</td>
    <td>'.$mobile.'</td>
    <td>
        <button class="btn btn-primary" > <a href="update.php? updateid='.$id.'" class="text-light text-decoration-none">Update</a> </button>
        <button class="btn btn-danger"> <a href="delete.php? deleteid='.$id.'"  class="text-light text-decoration-none">Delete</a> </button>
    </td>
   
  </tr>';
 }
}
?>


  </tbody>
</table>
    </div>
</body>
</html>