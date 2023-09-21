<?php
include 'server.php';
if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];

    $sql="delete from `crud_table` where id=$id";
    $result=mysqli_query($conn,$sql);
    if($result){
        // echo "deleted succesfull";
        header('location:display.php');
    }
    else{
        die(mysqli_error($conn));
    }
}
?>