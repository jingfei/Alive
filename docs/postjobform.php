<?php session_start(); ?><!DOCTYPE html><html><head>
    <title>Alive - Apperciate Love In Volunteering Everyday</title>    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">  <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>  <script>$('.dropdown-toggle').dropdown()</script>  </head>
  <body>
    <nav class="navbar navbar-default">  <div class="container-fluid">    <div class="navbar-header">      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">        <span class="sr-only">Toggle navigation</span>      </button>      <a class="navbar-brand" href="./">Alive</a>    </div>    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">      <ul class="nav navbar-nav">        <li class="active"><a href="#">Start Volunteering <span class="sr-only">(current)</span></a></li>        <li> <a href="./searchpage.php">Find Opportunities</a></li>        <?php          if(isset($_SESSION["id"]) && !empty($_SESSION["id"])) {        ?>        <li> <a href="./postjobform.php">Post a Job</a></li>    <?php } ?>      </ul>      <?php        if(isset($_SESSION["id"]) && !empty($_SESSION["id"])) {      ?>      <ul class="nav navbar-nav navbar-right">        <li><a href="./profile.php">My Profile</a></li>        <li><a href="./php/logout.php">Logout</a></li>      </ul>      <?php        }        else {      ?>      <ul class="nav navbar-nav navbar-right">        <li><a href="./login.php">Login</a></li>          <li><a href="./register.php">Register</a></li>      </ul>      <?php } ?>    </div>  </div></nav>    <?php @include "php/postjobform.php"; ?>
<form class="form-horizontal" action="" method="POST">
  <fieldset>
    <div id="legend" style="text-align: center">
      <h3>Post Job</h3>
    </div>

    <div class="control-group" style="text-align: center">
      <!-- Job Name -->
      <label class="control-label" name="job_name">Job Name</label>
      <div>
        <input type="text" id="jobname" name="job_name" placeholder="" class="input-xlarge">
      </div>
    </div>

    <div class="control-group" style="text-align: center">
      <!--Age Requirement -->
      <label class="control-label">Age Requirement</label>
      <div>
        <input type="text" id="agerequiremnt" name="age_requirement" placeholder="" class="input-xlarge">
      </div>
    </div>

    <div class="control-group" style="text-align: center">
      <!-- Org. Name-->
      <label class="control-label">Oragnization Name</label>
      <div>
      <input type="text" id="orgname" name="org_name" placeholder="" class="input-xlarge">
      </div>
    </div>

    <div class="control-group" style="text-align: center">
      <label class="control-label">Address</label>
      <div>
        <input type="text" id="address" name="address" placeholder="" class="input-xlarge">
      </div>
    </div>

    <div class="control-group" style="text-align: center">
      <!-- When -->
      <label class="control-label">When</label>
      <div>
        <input type="text" id="when" name="time" placeholder="" class="input-xlarge">
      </div>
    </div>

    <div class="control-group" style="text-align: center">
      <!-- Phone Number -->
      <label class="control-label">Phone Number</label>
      <div>
        <input type="text" id="phonenumber" name="phone_number" placeholder="" class="input-xlarge">
      </div>
    </div>

    <div class="control-group" style="text-align: center">
      <!-- Website -->
      <label class="control-label">Website</label>
      <div>
        <input type="text" id="website" name="website" placeholder="" class="input-xlarge">
      </div>
    </div>
    <div class="control-group" style="text-align: center">
      <!-- Job Description -->
      <label class="control-label">Job Description</label>
      <div class="controls">
        <input type="text" id="jobdescription" name="job_description" placeholder="" class="input-xlarge">
      </div>
    </div>

    <div class="control-group" style="text-align: center">
      <!-- Post Button -->
      <div class="controls">
        <button class="btn btn-success" type="submit">Post</button>
      </div>
    </div>
  </fieldset>
</form>
      <div id="footer" class="row">        <div class="col-md-6" style="padding: 10px 40px;">          <p><img src="images/location.png" style="height: 30px; width: 30px"> 地址</p>          <p><img src="images/phone-512.png" style="height:30px; width:30px"> +886 988-468-096</p>          <p><img src="images/mail_icon.jpg" style="height:30px; width:30px"><a href="mailto:alive-volunteer@googlegroups.com">yunchi20@kas.kh.edu.tw</a></p>        </div>        <div class="col-md-6">          <h3>About this company</h3>          <p>aodifjoa;smfoxd,jf</p>          <a href="https://www.facebook.com/Alive-Appreciate-Love-in-Volunteering-Everyday-100729750470795/"><img src="images/facebookicon.png" height="30px" weight="30px"></a>          <a href="https://twitter.com/alive_volunteer"><img src="images/twitter-128.png" height="30px" weight="30px"></a>        </div>      </div>

</body></html>
