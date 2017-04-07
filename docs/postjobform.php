<html><head>
    <title>Alive - Apperciate Love In Volunteering Everyday</title>    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">  <link rel="stylesheet" href="homepage.css">  <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>  <script>$('.dropdown-toggle').dropdown()</script>  </head>
  <body>
    <nav class="navbar navbar-default">  <div class="container-fluid">    <div class="navbar-header">      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">        <span class="sr-only">Toggle navigation</span>      </button>      <a class="navbar-brand" href="#">Alive</a>    </div>    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">      <ul class="nav navbar-nav">        <li class="active"><a href="#">Start Volunteering <span class="sr-only">(current)</span></a></li>        <li> <a href="#">Search Organization</a></li>        <li> <a href="#">Post a job</a></li>        <li> <a href="#">Find a job</a></li>      </ul>      <?php        if(isset($_SESSION["id"]) && !empty($_SESSION["id"])) {      ?>      <ul class="nav navbar-nav navbar-right">        <li><a href="#">My Profile</a></li>        <li><a href="./php/logout.php">Logout</a></li>      </ul>      <?php    } else {      ?>      <ul class="nav navbar-nav navbar-right">        <li><a href="./login.php">Login</a></li>          <li><a href="#">Register</a></li>      </ul>      <?php } ?>    </div>  </div></nav><?php @include "php/postjobform.php"; ?>
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
        <input type="text" id="phonenumber" name="phonenumber" placeholder="" class="input-xlarge">
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
      <div id="footer" class="row">        <div class="About col-md-3">          <h3>About</h3>          <p>About us</p>          <p>Privacy Policy</p>          <p>Customer Service</p>        </div>        <div class="Help col-md-3">          <h3>Help</h3>          <p>Help Center</p>          <p>Get Started</p>          <p>Contact us</p>        </div>        <div class="Visit-us col-md-3">          <h3>Follow Us</h3>            <img src="images/facebookicon.png" height="30px" weight="30px">            <img src="images/twitter-128.png" height="30px" weight="30px">            <img src="images/google-plus-flat.png" height="30px" weight="30px">        </div>        <div class="Contact col-md-3">          <p>Stay Connected</p>          <div class="input-group">              <input type="text" class="form-control" placeholder="Email Address">              <span class="input-group-btn">                <button class="btn btn-default" type="button">Submit</button>              </span>          </div>        </div>      </div>

</body></html>
