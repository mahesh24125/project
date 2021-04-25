<?php
include("config.php");
$result = mysqli_query($conn,"SELECT * FROM product");
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
  </style>
 </head>
<body>
  <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <img src="image/logo.png" style="float:left"; height="50px" width="300px">
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="home.php">Home</a></li>
      <li><a href="list.php">List</a></li>
      <li><a href="Contact.php">Contact</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="index.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="log.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
    </ul>
  </div>
</nav>
<div class="jumbotron">  
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
  
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <div class="carousel-inner">
      <div class="item active">
        <img src="image/soft6.jpg" alt="Los Angeles" style="width: 1700px; height: 500px;">
      </div>

      <div class="item">
        <img src="image/soft3.jpg" alt="Chicago" style="width: 1700px; height: 500px;">
      </div>
    
      <div class="item">
        <img src="image/soft5.jpg" alt="New york" style="width: 1700px; height: 500px;">
      </div>
    </div>

    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
<div class="container">
  <h1 style="text-align: center;">Catergoty</h1>
  <div class="container-fluid">
  <a href="list.php" ><img src="image/mobiles.jpg"><br><p>mobiles</p></a>
</div>
</div>

<div class="container" style="background-image: url('image/chennai.jpg'); background-repeat: no-repeat; background-size: cover; width: 1300px; height: 400px;">
  <h3 class="text-center"><strong>Contact</strong></h3>
  <p class="text-center"><strong><em>Greater Austin Area</em></strong></p>

  <div class="row">
    <div class="col-md-4">
      <p style="color: yellow;"><strong><span class="glyphicon glyphicon-map-marker"></span>L76A, L Block, 21st Street,Anna Nagar East, Near Chinthamani,Chennai – 600 102.</strong></p>
      <p style="color: yellow;"><strong><span class="glyphicon glyphicon-phone"></span>Phone: 044 2663 3535</strong></p>
      <p style="color: yellow;"><strong><span class="glyphicon glyphicon-envelope"></span>infoindia@dckap.com</strong></p>
    </div>
    <div class="col-md-8">
      <div class="row">
        <div class="col-sm-6 form-group">
          <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
        </div>
      </div>
      <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea>
      <br>
      <div class="row">
        <div class="col-md-12 form-group">
          <button class="btn pull-right" type="submit">Send</button>
        </div>
      </div>
    </div>
  </div>
</div>

 </body>
</html>