<?php
extract($_POST);
include("config.php");
$sql=mysqli_query($conn,"SELECT * FROM admin where adminname='$adminname'");
if(mysqli_num_rows($sql)>0)
{
    echo "adminname Already Exists"; 
	exit;
}
elseif(isset($_POST['save']))
{
        $query="INSERT INTO admin (adminname, password ) VALUES ('$adminname','$password')";
        $sql=mysqli_query($conn,$query)or die("Could Not Perform the Query");
        header ("Location: admin.php");
    }
    else 
    {
		echo "Error.Please try again";
	}

?>