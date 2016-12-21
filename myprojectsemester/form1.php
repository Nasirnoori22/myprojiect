<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Theme Made By www.w3schools.com - No Copyright -->
  <title>Bootstrap Theme Company Page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
  button, input, select, textarea {
    font-family: inherit;
    font-size: inherit;
    line-height: inherit;
    padding-left: 0px;
        margin-bottom: 15px;
}
.carousel-inner>.item>a>img, .carousel-inner>.item>img, .img-responsive, .thumbnail a>img, .thumbnail>img {
    display: block;
    max-width: 100%;
    height: auto;
    margin-top: -20px;
}
.error {color: #FF0000;}
 .navbar {
    background-color: #222;
    border-color: #080808;
    border-radius: 0px;
}
.navbar-inverse .navbar-collapse, .navbar-inverse .navbar-form {
    border-color: #101010;
    margin-top: 15px;
}
.navbar-inverse .navbar-nav>.active>a, .navbar-inverse .navbar-nav>.active>a:focus, .navbar-inverse .navbar-nav>.active>a:hover {
    color: #fff;
    background-color: #252222;
}
.navbar-inverse .navbar-nav>li>a {
    color: #9d9d9d;
    padding-left: 4pc;
  </style>
</head>


<body>
<?php
$user='root';
$pass ='';
$db ='mylogoinform1';
$db = new mysqli('localhost',$user,$pass,$db) or die ("unbale to connect ");



?>


<nav class="navbar navbar-inverse">
  <div class="container-fluid">
   <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
    
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="projict5.html">Home</a></li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">SERVICE <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">WEB DESINGING</a></li>
            <li><a href="#">DATABASE APPLICATION </a></li>
            <li><a href="#">NETWORKING</a></li>
            <li><a href="#">GAMING APPLICATION</a></li>
            <li><a href="#">GRAPHIC DESINGING</a></li>
          </ul>
        </li>
        <li><a href="CANTACT">CANTACT</a></li>
        <li><a href="OUR COMPANYS">COMPANY</a></li>
        <li><a href="BLOG.html">BLOG</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </div>
</nav>
<img class="img-responsive" src="ContactUs.jpg">

<?php

// define variables and set to empty values
$nameErr = $emailErr = $genderErr = $phoneErr =  $subject ="";
$name = $email = $gender = $comment = $phone = $subject="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed"; 
    }
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format"; 
    }
  }
    if (empty($_POST["number_format(number)"])) {
    $phone = "";
  } else {
    $phone  = test_input($_POST["phone"]);
  }
  
  }

  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["comment"]);
  }

 if (empty($_POST["subject"])) {
    $subject = "";
  } else {
    $subject = test_input($_POST["subject"]);
  }
  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }


function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
<center><h3> WELCOME TO OUR CONTACT  </h3></center>
<div class="container-fluid">
<div class="row"></div>
<div class="col-xs-1"></div>
<div class="col-xs-5">
  
<h4>Get in touch with us.</h4><br><br>
<p>
a: Shar-e-Naw, Street # 4, Lane # 3 (Phase A), House # 128<br>
e: info@netlinks.af<br>
w: http://www.netlinks.af<br>
p: +93 77 30 20 100 / +93 799 11 55 66<br>

<h4>Billing Department:</h4><br><br><br>

e: billing@netlinks.af
p: +93 77 30 20 101
<br>
<h4>Support Department</h4>
<br><br>

e: support@netlinks.af
p: +93 77 30 20 111


</p>
</div>
<div class="col-xs-3">
<p><span class="error">* required field.</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <input type="text" name="name" value="<?php echo $name;?>">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  E-mail: <input type="text" name="email" value="<?php echo $email;?>">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
  phone: <input type="text" name="phone" value="<?php echo $phone;?>">
  <span class="error"><?php echo $phone ;?></span>
  <br><br>
   subject: <input type="text" name="subject" value="<?php echo $phone;?>"  >
    <br><br>
  Comment: <textarea name="comment" rows="5" cols="40"><?php echo $comment;?></textarea>
  <br><br>
  Gender:
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
  <span class="error">* <?php echo $genderErr;?></span>
  <br><br>
  <input type="submit" name="submit" value="Submit" style="padding-left: -50px;"> 

</form>
</div>
<div class="col-xs-3"></div>
</div>
</div>
<?php
if($_POST["submit"]=="save")
{
$name = $_post["name"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$comment = $_POST["comment"];
$gender = $_POST["gender"];
$subject= $_POST["subject"];

mysql_connect("localhost","root","");
mysql_select_db("mylogoinform1");
$s="insert into myform(name,email,phone,comment,subject)  values(' ".$name."',' ".$email." ','".$phone."',' ".comment."','".gender."','".subject."')";
mysql_query($s);
 


}

?>



<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $phone;
echo "<br>";
echo $comment;
echo "<br>";
echo $gender;
echo $subject;
?>
<!-- Change the "src" attribute according to your installation path -->
<script src="vendor/jquery/dist/jquery.min.js"></script>
</body>
</html>