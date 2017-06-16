<?php session_start(); ?><!DOCTYPE html><html><head>
    <meta charset="utf-8"><title>Alive - Apperciate Love In Volunteering Everyday</title>  <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">  <link rel="stylesheet" href="./css/font-awesome.min.css">  <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>  <script>$('.dropdown-toggle').dropdown()</script>    <link rel="stylesheet" href="css/register.css">
	</head>
	<body>
	<nav class="navbar navbar-default">  <div class="container-fluid">    <div class="navbar-header">      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">        <span class="sr-only">Toggle navigation</span>      </button>      <a class="navbar-brand" href="./"><img src="./images/logo.png" href="./" style="width: 120px; height:88px; margin-top: -40px;">    </a>    </div>    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">      <ul class="nav navbar-nav">        <li><a href="./">Start Volunteering <span class="sr-only">(current)</span></a></li>        <li> <a href="./searchpage.php">Find Opportunities</a></li>        <?php          if(isset($_SESSION["id"]) && !empty($_SESSION["id"])) {        ?>        <li> <a href="./postjobform.php">Post a Job</a></li>    <?php } ?>      </ul>      <?php        if(isset($_SESSION["id"]) && !empty($_SESSION["id"])) {      ?>      <ul class="nav navbar-nav navbar-right">        <li class="active"><a href="./profile.php">My Profile</a></li>        <li><a href="./php/logout.php">Logout</a></li>      </ul>      <?php        }        else {      ?>      <ul class="nav navbar-nav navbar-right">        <li><a href="./login.php">Login</a></li>          <li><a href="./register.php">Register</a></li>      </ul>      <?php } ?>    </div>  </div></nav>    <?php
    @include "./php/setting.php";
    ?>
    <div id="Registration" style="text-align:center">
      <h1>Profile Setting</h1>
      <div id="Registration-forms">
      <form class="form-inline" id="name" method="post" enctype="multipart/form-data">
        <div class="form-group">
          <p>First Name</p>
          <input type="text" class="form-control" value="<?php echo $row['first_name']; ?>" id="exampleInputName2" placeholder="First Name" name="firstname">
        </div><br>
        <div class="form-group">
          <p>Last Name</p>
          <input type="text" value="<?php echo $row['last_name'];?>" class="form-control" id="exampleInputName2" placeholder="Last Name" name="lastname">
        </div><br>
      <div class="form-group row">
        <p>Email</p><p><?php echo $row["email"];?></p>
        <div class="col-xs-10">
        </div>
      </div><br>
      <div class="form-group row">
        <div class="col-xs-10">
          <p>New password:</p>
          <input class="form-control" type="password" id="example-password-input" name="password">
          <p>Confirm password:</p>
          <input class="form-control" type="password" id="example-password-input" name="confirmpassword">
        </div>
      </div><br>
      <div class="form-group row">
        <p>Phone number</p>
        <div class="col-xs-10">
          <input class="form-control" value="<?php echo $row['phone_number']; ?>" type="tel" id="example-tel-input" name="phonenumber">
        </div>
      </div><br>
      <div class="form-group row">
        <p>Birthday</p> <p><?php echo $row["birthday"]; ?></p>
      </div><br>
      Select Profile Picture to upload:
    <input type="file" name="fileToUpload" id="fileToUpload" style="text-align:center; padding-left:120px">
      <input type="submit">
    </form>
  </div>
    </div>

        <div id="footer" class="row">        <div class="col-md-6" style="padding: 10px 40px;">          <p><a href="https://www.facebook.com/Alive-Appreciate-Love-in-Volunteering-Everyday-100729750470795/" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i>  &nbsp;Alive- Appreciate Love in Volunteering Everyday</a></p><a href="https://www.facebook.com/Alive-Appreciate-Love-in-Volunteering-Everyday-100729750470795/" target="_blank">          </a><p><a href="https://www.facebook.com/Alive-Appreciate-Love-in-Volunteering-Everyday-100729750470795/" target="_blank"></a><a href="https://twitter.com/alive_volunteer" target="_blank"> <i class="fa fa-twitter" aria-hidden="true"></i>  &nbsp;@alive_volunteer</a></p><a href="https://twitter.com/alive_volunteer" target="_blank">          </a><p><a href="https://twitter.com/alive_volunteer" target="_blank"><i class="fa fa-envelope-open-o" aria-hidden="true"></i></a><a href="mailto:alive-volunteer@googlegroups.com" target="_blank"> &nbsp;alive-volunteer@googlegroups.com</a></p>        </div>        <div class="col-md-6">          <h3>About this company</h3>        </div>      </div>  

</body></html>
