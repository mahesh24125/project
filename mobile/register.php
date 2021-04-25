<?php
extract($_POST);
include("config.php");
$sql=mysqli_query($conn,"SELECT * FROM users where username='$username'");
if(mysqli_num_rows($sql)>0)
{
    echo "username Already Exists"; 
	exit;
}
elseif(isset($_POST['save']))
{
        $query="INSERT INTO users(username, password ) VALUES ('$username','$password')";
        $sql=mysqli_query($conn,$query)or die("Could Not Perform the Query");
        header ("Location: index.php");
    }
    else 
    {
		echo "Error.Please try again";
	}

?>