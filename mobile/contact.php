<!DOCTYPE html>
<html>
<head>
	<title>Contact</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
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
      <li class="active"><a href="Contact.php">Contact</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="index.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
    </ul>
  </div>
</nav>
	<div class="container" style="background-image: url('image/chennai.jpg'); background-repeat: no-repeat; background-size: cover; width: 1200px; height: 600px;">
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