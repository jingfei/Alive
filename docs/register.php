<html><head>
    <title>Alive - Apperciate Love In Volunteering Everyday</title>    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">  <link rel="stylesheet" href="homepage.css">  <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>  <script>$('.dropdown-toggle').dropdown()</script>    <link rel="stylesheet" href="css/register.scss">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	</head>
	<body>
	<nav class="navbar navbar-default">  <div class="container-fluid">    <!-- Brand and toggle get grouped for better mobile display -->    <div class="navbar-header">      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">        <span class="sr-only">Toggle navigation</span>        <span class="icon-bar"></span>        <span class="icon-bar"></span>        <span class="icon-bar"></span>      </button>      <a class="navbar-brand" href="#">Alive</a>    </div>    <!-- Collect the nav links, forms, and other content for toggling -->    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">      <ul class="nav navbar-nav">        <li class="active"><a href="#">Start Volunteering <span class="sr-only">(current)</span></a></li>        <li><a href="#">Search Organization</a></li>        <li><a href="#">Post a job</a></li>        <li><a href="#">Find a job</a></li>      </ul>      <ul class="nav navbar-nav navbar-right">        <li><a href="#">Login</a></li>          <li><a href="#">Register</a></li>      </ul>    </div><!-- /.navbar-collapse -->  </div><!-- /.container-fluid --></nav>    <?php
    include "./php/register.php"
    ?>
    <div id="Registration" style="text-align:center">
      <h1>Register for Alive</h1>
      <h2>Sign Up for more!</h2>
      <form class="form-inline" id="name" method="post">
        <div class="form-group">
          <p>First Name</p>
          <input type="text" class="form-control" id="exampleInputName2" placeholder="First Name" name="firstname">
        </div><br>
        <div class="form-group">
          <p>Last Name</p>
          <input type="text" class="form-control" id="exampleInputName2" placeholder="Last Name" name="lastname">
        </div><br>
      <div class="form-group row">
        <p>Email</p>
        <div class="col-xs-10">
          <input class="form-control" type="email" value="bootstrap@example.com" id="example-email-input" name="email">
        </div>
      </div><br>
      <div class="form-group row">
        <p>Password</p>
        <div class="col-xs-10">
          <input class="form-control" type="password" value="hunter2" id="example-password-input" name="password">
        </div>
      </div><br>
      <div class="form-group row">
        <p>Phone number</p>
        <div class="col-xs-10">
          <input class="form-control" type="tel" placeholder="1-(555)-555-5555" id="example-tel-input" name="phonenumber">
        </div>
      </div><br>
      <div class="form-group row">
        <p>Birthday</p>
        <div class="col-xs-10">
          <input class="form-control" type="date" placeholder="2011-08-19" id="example-date-input" name="birthday">
        </div>
      </div><br>
      <input type="submit">
    </form>
    </div>

        <div id="footer" class="row">        <div class="About col-md-3">          <h3>About</h3>          <p>About us</p>          <p>Privacy Policy</p>          <p>Customer Service</p>        </div>        <div class="Help col-md-3">          <h3>Help</h3>          <p>Help Center</p>          <p>Get Started</p>          <p>Contact us</p>        </div>        <div class="Visit-us col-md-3">          <h3>Follow Us</h3>            <img src="images/facebookicon.png" height="30px" weight="30px">            <img src="images/twitter-128.png" height="30px" weight="30px">            <img src="images/google-plus-flat.png" height="30px" weight="30px">        </div>        <div class="Contact col-md-3">          <p>Stay Connected</p>          <div class="input-group">              <input type="text" class="form-control" placeholder="Email Address">              <span class="input-group-btn">                <button class="btn btn-default" type="button">Submit</button>              </span>          </div>        </div>      </div>  

</body></html>
