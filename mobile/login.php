<?php
session_start();
if(isset($_POST['save']))
{
    extract($_POST);
    include 'config.php';
    $sql=mysqli_query($conn,"SELECT * FROM users where username='$username' and password='$password'");
    $row  = mysqli_fetch_array($sql);
    if(is_array($row))
    {
        $_SESSION["id"] = $row['id'];
        $_SESSION["username"]=$row['username'];
        header("Location: home.php"); 
    }
    else
    {
        echo "Invalid Username/Password";
    }
}
?>