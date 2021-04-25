<?php
include("config.php");
$result = mysqli_query($conn,"SELECT * FROM product ORDER BY price DESC");
?>
<!DOCTYPE html>
<html>
 <head>
 <title> Retrive data</title>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style type="text/css">
    p{
      padding: 1px;
    }
    body
    {
      background-color: #ADD8E6;    
    }
  </style>
 </head>
<body>
  <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
       <img src="image/logo.png" style="float:left"; height="50px" width="300px">
    </div>
    <ul class="nav navbar-nav">
      <li><a href="home.php">Home</a></li>
      <li><a href="list.php">List</a></li>
       <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Sort
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="ascen.php">Ascending order</a></li>
          <li class="active"><a href="desc.php">Descending order</a></li>
        </ul>
      </li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="index.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="log.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
    </ul>
  </div>
</nav>
  <h1 style="text-align: center;">Product List</h1>
<?php
if (mysqli_num_rows($result) > 0) {

  $id=0;
  while($row=mysqli_fetch_array($result)){

?>
<div class="col-sm-4">
  <div class="img-block">
  <img src="<?php echo $row['upload']; ?>" class="img-responsive" width="100px" height="50px"><br>
  <p><?php echo $row['pname']; ?></p>
  <p><strong><?php echo $row['price']; ?></strong></p>
  by:<p><?php echo $row['brand']; ?></p>
  <div class="col-sm-4">
  <button onclick="sub()" name="buy" class="btn btn-warning">Buynow</button><br>
</div>
<div class="col-sm-4">
  <button onclick="location.href='productdetail.php?id=<?php echo $row['id']; ?>'" name="more" class="btn btn-primary">More info</button>
</div>
</div>
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
 </body>
 <script type="text/javascript">
  function sub()
  {
    window.location.href="payment.php";
  }
 </script>
</html>