<?php
session_start();
if(isset($_POST['save']))
{
    extract($_POST);
    include 'config.php';
    $sql=mysqli_query($conn,"SELECT * FROM admin where adminname='$adminname' and password='$password'");
    $row  = mysqli_fetch_array($sql);
    if(is_array($row))
    {
        $_SESSION["id"] = $row['id'];
        $_SESSION["adminname"]=$row['adminname'];
        header("Location: product.php"); 
    }
    else
    {
        echo "Invalid adminname/Password";
    }
}
?>