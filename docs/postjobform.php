<html><head>
    <title>Alive - Apperciate Love In Volunteering Everyday</title>    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">  <link rel="stylesheet" href="homepage.css">  <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>  <script>$('.dropdown-toggle').dropdown()</script>  </head>
  <body>
    <nav class="navbar navbar-default">  <div class="container-fluid">    <!-- Brand and toggle get grouped for better mobile display -->    <div class="navbar-header">      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">        <span class="sr-only">Toggle navigation</span>        <span class="icon-bar"></span>        <span class="icon-bar"></span>        <span class="icon-bar"></span>      </button>      <a class="navbar-brand" href="#">Alive</a>    </div>    <!-- Collect the nav links, forms, and other content for toggling -->    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">      <ul class="nav navbar-nav">        <li class="active"><a href="#">Start Volunteering <span class="sr-only">(current)</span></a></li>        <li><a href="#">Search Organization</a></li>        <li><a href="#">Post a job</a></li>        <li><a href="#">Find a job</a></li>      </ul>      <ul class="nav navbar-nav navbar-right">        <li><a href="#">Login</a></li>          <li><a href="#">Register</a></li>      </ul>      <ul class="nav navbar-nav navbar-right">        <li><a href="#">Logout</a></li>        <li><a href="#">My Profile</a></li>      </ul>    </div><!-- /.navbar-collapse -->  </div><!-- /.container-fluid --></nav><?php @include "php/postjobform.php"; ?>
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
      <input type="text" placeholder="" <="" div="">

</body></html>
