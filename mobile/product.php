<!DOCTYPE html>
<html lang="en">
<head>
<title>Product</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style type="text/css">
    body
    {
        background-color: #ccff00;
    }
.form-control {
    height: 40px;
    box-shadow: none;
    color: #000000;
}
.form-control:focus {
    border-color: #5cb85c;
}
.form-control, .btn {        
    border-radius: 3px;
}
.signup-form {
    width: 450px;
    margin: 0 auto;
    padding: 30px 0;
    font-size: 15px;
}
.signup-form h2 {
    color: #000000;
    margin: 0 0 15px;
    position: relative;
    text-align: center;
}
.signup-form h2:before, .signup-form h2:after {
    content: "";
    height: 2px;
    width: 30%;
    background: #000000;
    position: absolute;
    top: 50%;
    z-index: 2;
}   
.signup-form h2:before {
    left: 0;
}
.signup-form h2:after {
    right: 0;
}
.signup-form .hint-text {
    color: #000000;
    margin-bottom: 30px;
    text-align: center;
}
.signup-form form {
    color: #999;
    border-radius: 3px;
    margin-bottom: 15px;
    background: #f2f3f7;
    box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    padding: 30px;
}
.signup-form .form-group {
    margin-bottom: 20px;
}
.signup-form .btn {        
    font-size: 16px;
    font-weight: bold;      
    min-width: 140px;
    outline: none !important;
}
.signup-form .row div:first-child {
    padding-right: 10px;
}
.signup-form .row div:last-child {
    padding-left: 10px;
}       
.signup-form a {
    color: #fff;
    text-decoration: underline;
}
.signup-form a:hover {
    text-decoration: none;
}
.signup-form form a {
    color: #5cb85c;
    text-decoration: none;
}   
.signup-form form a:hover {
    text-decoration: underline;
} 
.logo
{
    display: block;
    margin-left: auto;
    margin-right: auto;
    width: 50%;
} 
  </style>
</head>
<body>
    <h1 style="text-align: center;">Add Product</h1>
<div class="signup-form">
    <form action="pr.php" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <input type="text" class="form-control" name="sinfo" placeholder="Sellername" required="required">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="name" placeholder="Name" required="required">
        </div>
         <div class="form-group">
            <input type="text" class="form-control" name="address" placeholder="Address" required="required">
        </div>
         <div class="form-group">
            <input type="text" class="form-control" name="phone" placeholder="Phone No" required="required">
        </div>
         <div class="form-group">
            <input type="text" class="form-control" name="pinfo" placeholder="Pinfo" required="required">
        </div>
         <div class="form-group">
            <input type="text" class="form-control" name="pname" placeholder="Pname" required="required">
        </div>
         <div class="form-group">
            <input type="text" class="form-control" name="price" placeholder="Price" required="required">
        </div>
         <div class="form-group">
            <input type="text" class="form-control" name="brand" placeholder="Brand" required="required">
        </div>
        <div class="form-group">
            <select name="type">
                <option value="new"> New</option>
                <option value="used"> Used</option>
            </select>
        </div>
        <div class="form-group">
            <input type="file" name="upload">
        </div>
        <div class="form-group">
            <button type="submit" name="submit" class="btn btn-success btn-lg btn-block">Submit</button>
        </div>
    </form>
</div>
</body>
</html>