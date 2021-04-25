<?php
include("config.php");
if(isset($_POST['submit']))
{
	$sinfo = $_POST['sinfo'];
	$name = $_POST['name'];
	$address = $_POST['address'];
	$phone = $_POST['phone'];
	$pinfo = $_POST['pinfo'];
	$pname = $_POST['pname'];
	$price = $_POST['price'];
	$brand = $_POST['brand'];
	$type = $_POST['type'];
	$image = "image/" .$_FILES['upload']['name'];
	if(move_uploaded_file($_FILES['upload']['tmp_name'], $image))
	{
		echo "Image successfully";
	}else
	{
		echo "no data found";
	}

	$query = "INSERT INTO product (sinfo,name,address,phone,pinfo,pname,price,brand,type,upload) VALUES ('$sinfo','$name','$address','$phone','$pinfo','$pname','$price','$brand','$type','$image')";
	$sql = mysqli_query($conn,$query)or die("could not found");
	header("location: success.php");
}
?>