<?php
include("config.php");
$id=$_GET['id'];
$result = mysqli_query($conn,"SELECT * FROM product where id='$id'");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Product Detail</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
       <img src="image/logo.png" style="float:center;" height="50px" width="300px">
    </div>
    <ul class="nav navbar-nav">
      <li><a href="home.php">Home</a></li>
      <li><a href="list.php">List</a></li>
      <li><a href="Contact.php">Contact</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="index.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="log.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
    </ul>
  </div>
</nav>
	<h1 style="text-align: center;">Product Detail</h1>
	<div class="row">
	<?php
if (mysqli_num_rows($result) > 0) {

	$id=0;
	while($row=mysqli_fetch_array($result)){

?>
<div class="col-sm-4">
	<img src="<?php echo $row['upload']; ?>" width="500" height="500">
</div>
	<div class="col-sm-4">
		<h1 class="name" style="color: red;"><?php echo $row['pname']; ?></h1>
		<p>by  <?php echo $row['brand']; ?></p>
		<p>Price: <strong><?php echo $row['price']; ?></strong></p>
		Features:<p><?php echo $row['pinfo']; ?></p>
		Type: <p><strong><?php echo $row['type']; ?></strong></p>
		Manufacturing details:<p><?php echo $row['sinfo']; ?></p>
		<p><?php echo $row['name']; ?></p>
		<p><?php echo $row['phone']; ?></p>
		<p><?php echo $row['address']; ?></p>
		<button onclick="sub()" name="buy" class="btn btn-primary">Buynow</button>
		<button onclick="back()" name="buy" class="btn btn-danger">Back</button>
	</div>
	 <?php
  $id++;
}
?>
 <?php
}
else{
    echo "No result found";
}
?>
</div>
</body>
 <script type="text/javascript">
 	function sub(){
 		window.location.href="payment.php";
 	}
 	function back(){
 		window.location.href="list.php";
 	}
 </script>
</html>