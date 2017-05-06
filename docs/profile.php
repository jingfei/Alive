<?php session_start(); ?><!DOCTYPE html><html><head>
    <title>Alive - Apperciate Love In Volunteering Everyday</title>    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">  <link rel="stylesheet" href="homepage.css">  <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>  <script>$('.dropdown-toggle').dropdown()</script>
  <link rel="stylesheet" href="css/Profile.css">
</head>
<body>
  <nav class="navbar navbar-default">  <div class="container-fluid">    <div class="navbar-header">      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">        <span class="sr-only">Toggle navigation</span>      </button>      <a class="navbar-brand" href="./index.hbs">Alive</a>    </div>    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">      <ul class="nav navbar-nav">        <li class="active"><a href="#">Start Volunteering <span class="sr-only">(current)</span></a></li>        <li> <a href="">Find Organization</a></li>        <li> <a href="./searchpage.php">Find Opportunities</a></li>        <li> <a href="./postjobform.php">Post a Job</a></li>      </ul>      <?php        if(isset($_SESSION["id"]) && !empty($_SESSION["id"])) {      ?>      <ul class="nav navbar-nav navbar-right">        <li><a href="./profile.php">My Profile</a></li>        <li><a href="./php/logout.php">Logout</a></li>      </ul>      <?php        }        else {      ?>      <ul class="nav navbar-nav navbar-right">        <li><a href="./login.php">Login</a></li>          <li><a href="./register.php">Register</a></li>      </ul>      <?php } ?>    </div>  </div></nav>  <?php @include "php/profile.php"; ?>
  <div class="row">
      <div class="row col-md-6">
        <h3><?php echo $row["first_name"]." ".$row["last_name"]; ?></h3>
        <div class="col-md-12">
          <img src="./images/profile.svg" height="100px" width="100px">
        </div>
        <div class="col-md-12">
          <p>Job: <?php echo $row["job"]; ?></p>
        </div>
        <div class="col-md-12">
          <p>Email: <?php echo $row["email"]; ?></p>
        </div>
        <div class="col-md-12">
          <p>Age: <?php echo $row["age"]; ?></p>
        </div>
        <div class="col-md-12">
          <p>Gender: <?php echo $row["gender"]; ?></p>
        </div>
        <div class="col-md-12">&nbsp;
          <p>Phone Number: <?php echo $row["phone_number"]; ?></p>
        </div>
        <div class="col-md-12">
              <p>Birthday: <?php echo  $row["birthday"]; ?></p>
        </div>
      </div>

    <div class="row col-md-6">
      <div class="col-md-12">
            <table class="table table-striped">
           <thead>
              <tr>
                <th>Jobname</th>
                <th>detail</th>
                <th>Organization</th>
                <th>Time</th>
              </tr>
            </thead>
            <tbody>
          <?php while($row=$result2->fetch_assoc()) { ?>
            <tr onclick="location.href='detail?jobid=<?php echo $row["id"]; ?>';"><td><?php echo $row["job_name"]; ?></td>
            <td><?php echo $row["job_description"]; ?></td>
            <td><?php echo $row["org_name"]; ?></td>
            <td><?php echo $row["time"]; ?></td>
          </tr>
          <?php } ?>
        </tbody>
         </table>

      </div>
    </div>
  </div>
          <div id="footer" class="row">        <div class="About col-md-3">          <h3>About</h3>          <p>About us</p>          <p>Privacy Policy</p>          <p>Customer Service</p>        </div>        <div class="Help col-md-3">          <h3>Help</h3>          <p>Help Center</p>          <p>Get Started</p>          <p>Contact us</p>        </div>        <div class="Visit-us col-md-3">          <h3>Follow Us</h3>            <img src="images/facebookicon.png" height="30px" weight="30px">            <img src="images/twitter-128.png" height="30px" weight="30px">            <img src="images/google-plus-flat.png" height="30px" weight="30px">        </div>        <div class="Contact col-md-3">          <p>Stay Connected</p>          <div class="input-group">              <input type="text" class="form-control" placeholder="Email Address">              <span class="input-group-btn">                <button class="btn btn-default" type="button">Submit</button>              </span>          </div>        </div>      </div>

</body></html>
