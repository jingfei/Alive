<?php session_start(); ?><!DOCTYPE html><html><head>
    <meta charset="utf-8"><title>Alive - Apperciate Love In Volunteering Everyday</title>  <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">  <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>  <script>$('.dropdown-toggle').dropdown()</script>    <script src="http://code.jquery.com/jquery-1.12.0.min.js"></script>
    <script src="./js/detail.js"></script>
    <link rel="stylesheet" href="./css/detail.css">
  </head>
	<body>
	<nav class="navbar navbar-default">  <div class="container-fluid">    <div class="navbar-header">      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">        <span class="sr-only">Toggle navigation</span>      </button>      <a class="navbar-brand" href="./">Alive</a>    </div>    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">      <ul class="nav navbar-nav">        <li class="active"><a href="#">Start Volunteering <span class="sr-only">(current)</span></a></li>        <li> <a href="./searchpage.php">Find Opportunities</a></li>        <?php          if(isset($_SESSION["id"]) && !empty($_SESSION["id"])) {        ?>        <li> <a href="./postjobform.php">Post a Job</a></li>    <?php } ?>      </ul>      <?php        if(isset($_SESSION["id"]) && !empty($_SESSION["id"])) {      ?>      <ul class="nav navbar-nav navbar-right">        <li><a href="./profile.php">My Profile</a></li>        <li><a href="./php/logout.php">Logout</a></li>      </ul>      <?php        }        else {      ?>      <ul class="nav navbar-nav navbar-right">        <li><a href="./login.php">Login</a></li>          <li><a href="./register.php">Register</a></li>      </ul>      <?php } ?>    </div>  </div></nav>  <?php @include "php/detail.php"; ?>
  <div id="fb-root"></div>
    <div>
      <ul class="nav nav-tabs nav-justified">
        <li role="presentation" class="active"><a href="#">Home</a></li>
        <li role="presentation"><a href="#">Location</a></li>
        <li role="presentation" id="reviews"><a href="#">Reviews</a></li>
      </ul>
    </div>
    <div class="row content active" id="detail-Home">
      <div class="col-md-7">
        <h2><?php echo $row["job_name"]; ?></h2>
        <div id="detail-phonenumber">Phone Number:</div><div><?php echo $row["phone_number"]; ?></div><br>
        <div id="detail-agerequirement">Age Requirement:</div><div><?php echo $row["age_requirement"]; ?></div><br>
        <div id="detail-organizationname">Organization Name:</div><div><?php echo $row["org_name"]; ?></div><br>
        <div id="detail-address">Address:</div> <div><?php echo $row["address"]; ?></div><br>
        <div id="detail-worktime">When:</div> <div><?php echo $row["time"]; ?></div><br>
        <div id="detail-website">Website:</div><div><?php echo $row["website"]; ?></div><br>
        <div id="detail-jobdescription">Job Description:</div><div><?php echo $row["job_description"]; ?></div>
      </div>
      <div class="col-md-5">
        <img src="..." style="width:100%;height:50%">
        <div id="detail-optionbutton">
        <button type="button" class="btn btn-outline-primary" id="detail-sendvolunteerrequest">Send Volunteer Request</button>
        <button type="button" class="btn btn-outline-primary" id="detail-saveasbookmark">Save as bookmark</button>
        </div>
      </div>
    </div>
    <div id="detail-Location" class="content" style="text-align:center">
      <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d58759.16906197546!2d120.28783349999999!3d23.007315!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2stw!4v1490376535555" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen=""></iframe>
    </div>
    <div id="detail-Reviews" class="content" style="text-align:center;">
      <div class="fb-comments" data-href="https://www.facebook.com/Alive-Appreciate-Love-in-Volunteering-Everyday-100729750470795/" data-width="1000" data-numposts="3"></div>
    </div>
        <div id="footer" class="row">        <div class="About col-md-3">          <h3>About</h3>          <p>About us</p>          <p>Privacy Policy</p>          <p>Customer Service</p>        </div>        <div class="Help col-md-3">          <h3>Help</h3>          <p>Help Center</p>          <p>Get Started</p>          <p>Contact us</p>        </div>        <div class="Visit-us col-md-3">          <h3>Follow Us</h3>            <img src="images/facebookicon.png" height="30px" weight="30px">            <img src="images/twitter-128.png" height="30px" weight="30px">            <img src="images/google-plus-flat.png" height="30px" weight="30px">        </div>        <div class="Contact col-md-3">          <p>Stay Connected</p>          <div class="input-group">              <input type="text" class="form-control" placeholder="Email Address">              <span class="input-group-btn">                <button class="btn btn-default" type="button">Submit</button>              </span>          </div>        </div>      </div>  

</body></html>
