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


legend{
  color:#141823;
  font-size:25px;
  font-weight:bold;
}
.signup-btn {
  background: #79bc64;
  background-image: -webkit-linear-gradient(top, #79bc64, #578843);
  background-image: -moz-linear-gradient(top, #79bc64, #578843);
  background-image: -ms-linear-gradient(top, #79bc64, #578843);
  background-image: -o-linear-gradient(top, #79bc64, #578843);
  background-image: linear-gradient(to bottom, #79bc64, #578843);
  -webkit-border-radius: 4;
  -moz-border-radius: 4;
  border-radius: 4px;
  text-shadow: 0px 1px 0px #898a88;
  -webkit-box-shadow: 0px 0px 0px #a4e388;
  -moz-box-shadow: 0px 0px 0px #a4e388;
  box-shadow: 0px 0px 0px #a4e388;
  font-family: Arial;
  color: #ffffff;
  font-size: 20px;
  padding: 10px 20px 10px 20px;
  border: solid #3b6e22  1px;
  text-decoration: none;
}

.signup-btn:hover {
  background: #79bc64;
  background-image: -webkit-linear-gradient(top, #79bc64, #5e7056);
  background-image: -moz-linear-gradient(top, #79bc64, #5e7056);
  background-image: -ms-linear-gradient(top, #79bc64, #5e7056);
  background-image: -o-linear-gradient(top, #79bc64, #5e7056);
  background-image: linear-gradient(to bottom, #79bc64, #5e7056);
  text-decoration: none;
}
.navbar-default .navbar-brand{
    color:#fff;
    font-size:30px;
    font-weight:bold;
  }
.form .form-control { margin-bottom: 10px; }
@media (min-width:768px) {
  #home{
    margin-top:50px;
  }
  #home .slogan{
    color: #0e385f;
    line-height: 29px;
    font-weight:bold;
  }
}
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

<div class="container">
    <div class="row">
        <h3 class="col-sm-offset-3 col-sm-6">Signup</h3>
    </div
    <div class="row">
        <div class="col-sm-offset-1 col-sm-2">
          
        </div>
        <div class="col-sm-6">
            <form action="r" method="post" accept-charset="utf-8" class="form" role="form">
                <div class="row">
                    <div class="col-xs-6 col-md-6">
                        <input type="text" name="firstname" value="" class="form-control input-lg" placeholder="First Name"  />                        </div>
                    <div class="col-xs-6 col-md-6">
                        <input type="text" name="lastname" value="" class="form-control input-lg" placeholder="Last Name"  />                        </div>
                </div>
                <input type="text" name="email" value="" class="form-control input-lg" placeholder="Your Email"  /><input type="password" name="password" value="" class="form-control input-lg" placeholder="Password"  /><input type="password" name="confirm_password" value="" class="form-control input-lg" placeholder="Confirm Password"  />
                    <label>Birth Date</label>
                    <div class="row">
                        <div class="col-xs-4 col-md-4">
                            <select name="month" class = "form-control input-lg">
                                <option value="01">Jan</option><option value="02">Feb</option><option value="03">Mar</option>
                                <option value="04">Apr</option><option value="05">May</option><option value="06">Jun</option>
                                <option value="07">Jul</option><option value="08">Aug</option><option value="09">Sep</option>
                                <option value="10">Oct</option><option value="11">Nov</option><option value="12">Dec</option>
                            </select>
                        </div>
                        <div class="col-xs-4 col-md-4">
                            <select name="day" class = "form-control input-lg">
                                <option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option>
                                <option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option>
                                <option value="9">9</option><option value="10">10</option><option value="11">11</option><option value="12">12</option>
                                <option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option>
                                <option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="21">21</option>
                                <option value="22">22</option><option value="23">23</option><option value="24">24</option><option value="25">25</option>
                                <option value="26">26</option><option value="27">27</option><option value="28">28</option><option value="29">29</option>
                                <option value="30">30</option><option value="31">31</option>
                            </select>                        
                        </div>
                        <div class="col-xs-4 col-md-4">
                            <select name="year" class = "form-control input-lg">
                                <option value="2001">2001</option><option value="2002">2002</option><option value="2003">2003</option><option value="2004">2004</option>
                                <option value="2005">2005</option><option value="2006">2006</option><option value="2007">2007</option><option value="2008">2008</option>
                                <option value="2009">2009</option><option value="2010">2010</option><option value="2011">2011</option><option value="2012">2012</option>
                                <option value="2013">2013</option>
                            </select>
                        </div>
                    </div>
                    <label>Gender : </label>
                    <label class="radio-inline">
                        <input type="radio" name="gender" value="M" id=male />Male
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="gender" value="F" id=female />Female
                    </label>
                    <br />
               <span class="help-block">By clicking Create my account, you agree to our Terms and that you have 
               read our Data Use Policy, including our Cookie Use.</span>
                <button class="btn btn-lg btn-primary btn-block signup-btn" type="submit">Create my account</button>
            </form>          
        </div>
      </div>
    </div>
</div>
</body>
</html>