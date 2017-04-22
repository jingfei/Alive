<?php session_start(); ?><!DOCTYPE html><html><head>
    <title>Alive - Apperciate Love In Volunteering Everyday</title>    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">  <link rel="stylesheet" href="homepage.css">  <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>  <script>$('.dropdown-toggle').dropdown()</script>    <link rel="stylesheet" href="css/searchpage.css">
	</head>
	<body>
    <nav class="navbar navbar-default">  <div class="container-fluid">    <div class="navbar-header">      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">        <span class="sr-only">Toggle navigation</span>      </button>      <a class="navbar-brand" href="./index.hbs">Alive</a>    </div>    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">      <ul class="nav navbar-nav">        <li class="active"><a href="#">Start Volunteering <span class="sr-only">(current)</span></a></li>        <li> <a href="">Find Organization</a></li>        <li> <a href="./searchpage.php">Find Opportunities</a></li>        <li> <a href="./postjobform.php">Post a Job</a></li>      </ul>      <?php        if(isset($_SESSION["id"]) && !empty($_SESSION["id"])) {      ?>      <ul class="nav navbar-nav navbar-right">        <li><a href="./profile.php">My Profile</a></li>        <li><a href="./php/logout.php">Logout</a></li>      </ul>      <?php      ?>      <ul class="nav navbar-nav navbar-right">        <li><a href="./login.php">Login</a></li>          <li><a href="./register.php">Register</a></li>      </ul>      <?php } ?>    </div>  </div></nav>    <div class="jumbotron" style="padding:10px">
      <h2>Search Result of ()!</h2>
      </div>
    <div class="sort-by">
      <h4>Sort By</h4>
      <button type="button" class="btn btn-secondary btn-lg">Most Popular</button>
      <button type="button" class="btn btn-secondary btn-lg">Most Recent</button>
      <button type="button" class="btn btn-secondary btn-lg">Most Views</button>
    </div>
    <div class="row">
      <div class="col-md-3 filter">
        <h2>Filter results</h2>
        <p>
        </p><div class="btn-group">
          <button type="button" class="btn btn-default btn-lg dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Location (City) <span class="caret"></span>
          </button>
          <ul class="dropdown-menu">
            <li><a href="#">Changhua</a></li>
            <li><a href="#">Chiayi</a></li>
            <li><a href="#">Douliu</a></li>
            <li><a href="#">Hsinchu</a></li>
            <li><a href="#">Hualien</a></li>
            <li><a href="#">Kaohsiung</a></li>
            <li><a href="#">Keelung</a></li>
            <li><a href="#">Magong</a></li>
            <li><a href="#">Miali</a></li>
            <li><a href="#">Nantou</a></li>
            <li><a href="#">New Taipei</a></li>
            <li><a href="#">Pingtung</a></li>
            <li><a href="#">Puzi</a></li>
            <li><a href="#">Taibao</a></li>
            <li><a href="#">Taichung</a></li>
            <li><a href="#">Tainan</a></li>
            <li><a href="#">Taipei</a></li>
            <li><a href="#">Taitung</a></li>
            <li><a href="#">Taoyuan</a></li>
            <li><a href="#">Toufen</a></li>
            <li><a href="#">Yilan</a></li>
            <li><a href="#">Yuanlin</a></li>
            <li><a href="#">Zhubei</a></li>
          </ul>
        </div><br>
        <div class="btn-group">
          <button type="button" class="btn btn-default btn-lg dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Weekday <span class="caret"></span>
          </button>
          <ul class="dropdown-menu">
            <li><a href="#">Monday</a></li>
            <li><a href="#">Tuesday</a></li>
            <li><a href="#">Wednesday</a></li>
            <li><a href="#">Thursday</a></li>
            <li><a href="#">Friday</a></li>
            <li><a href="#">Saturday</a></li>
            <li><a href="#">Sunday</a></li>
          </ul>
        </div><br>
        <div class="btn-group">
          <button type="button" class="btn btn-default btn-lg dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Time <span class="caret"></span>
          </button>
          <ul class="dropdown-menu">
            <li><a href="#">8:00</a></li>
            <li><a href="#">8:30</a></li>
            <li><a href="#">9:00</a></li>
            <li><a href="#">9:30</a></li>
            <li><a href="#">10:00</a></li>
            <li><a href="#">10:30</a></li>
            <li><a href="#">11:00</a></li>
            <li><a href="#">11:30</a></li>
            <li><a href="#">12:00</a></li>
            <li><a href="#">12:30</a></li>
            <li><a href="#">13:00</a></li>
            <li><a href="#">13:30</a></li>
            <li><a href="#">14:00</a></li>
            <li><a href="#">14:30</a></li>
            <li><a href="#">15:00</a></li>
            <li><a href="#">15:30</a></li>
            <li><a href="#">16:00</a></li>
            <li><a href="#">16:30</a></li>
            <li><a href="#">17:00</a></li>
            <li><a href="#">17:30</a></li>
            <li><a href="#">18:00</a></li>
            <li><a href="#">18:30</a></li>
            <li><a href="#">19:00</a></li>
            <li><a href="#">19:30</a></li>
            <li><a href="#">20:00</a></li>
            <li><a href="#">20:30</a></li>
            <li><a href="#">21:00</a></li>
            <li><a href="#">21:30</a></li>
          </ul>
      </div>
      </div>
      <div class="row col-md-9">
        <div class="col-sm-6 col-md-4">
          <div class="thumbnail">
            <img src="..." alt="...">
            <div class="caption">
              <h3>Search Result 1</h3>
              <p>Job title: <br> Age: <br> Location: <br></p>
              <p><a href="#" class="btn btn-primary" role="button">Click For More Info</a> <a href="#" class="btn btn-default" role="button">Save to Bookmarks</a></p>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4">
          <div class="thumbnail">
            <img src="..." alt="...">
            <div class="caption">
              <h3>Search Result 2</h3>
              <p>Job title: <br> Age: <br> Location:</p>
              <p><a href="#" class="btn btn-primary" role="button">Click For More Info</a> <a href="#" class="btn btn-default" role="button">Save to Bookmarks</a></p>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4">
          <div class="thumbnail">
            <img src="..." alt="...">
            <div class="caption">
              <h3>Search Result 3</h3>
              <p>Job title: <br> Age: <br> Location:</p>
              <p><a href="#" class="btn btn-primary" role="button">Click For More Info</a> <a href="#" class="btn btn-default" role="button">Save to Bookmarks</a></p>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4">
          <div class="thumbnail">
            <img src="..." alt="...">
            <div class="caption">
              <h3>Search Result 4</h3>
              <p>Job title: <br> Age: <br> Location:</p>
              <p><a href="#" class="btn btn-primary" role="button">Click For More Info</a> <a href="#" class="btn btn-default" role="button">Save to Bookmarks</a></p>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4">
          <div class="thumbnail">
            <img src="..." alt="...">
            <div class="caption">
              <h3>Search Result 5</h3>
              <p>Job title: <br> Age: <br> Location:</p>
              <p><a href="#" class="btn btn-primary" role="button">Click For More Info</a> <a href="#" class="btn btn-default" role="button">Save to Bookmarks</a></p>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4">
          <div class="thumbnail">
            <img src="..." alt="...">
            <div class="caption">
              <h3>Search Result 6</h3>
              <p>Job title: <br> Age: <br> Location:</p>
              <p><a href="#" class="btn btn-primary" role="button">Click For More Info</a> <a href="#" class="btn btn-default" role="button">Save to Bookmarks</a></p>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4">
          <div class="thumbnail">
            <img src="..." alt="...">
            <div class="caption">
              <h3>Search Result 7</h3>
              <p>Job title: <br> Age: <br> Location:</p>
              <p><a href="#" class="btn btn-primary" role="button">Click For More Info</a> <a href="#" class="btn btn-default" role="button">Save to Bookmarks</a></p>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4">
          <div class="thumbnail">
            <img src="..." alt="...">
            <div class="caption">
              <h3>Search Result 8</h3>
              <p>Job title: <br> Age: <br> Location:</p>
              <p><a href="#" class="btn btn-primary" role="button">Click For More Info</a> <a href="#" class="btn btn-default" role="button">Save to Bookmarks</a></p>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4">
          <div class="thumbnail">
            <img src="..." alt="...">
            <div class="caption">
              <h3>Search Result 9</h3>
              <p>Job title: <br> Age: <br> Location:</p>
              <p><a href="#" class="btn btn-primary" role="button">Click For More Info</a> <a href="#" class="btn btn-default" role="button">Save to Bookmarks</a></p>
            </div>
          </div>
        </div>
        <ul class="pagination">
        <li><a href="#">1</a></li>
        <li><a href="#">2</a></li>
        <li><a href="#">3</a></li>
        <li><a href="#">4</a></li>
        <li><a href="#">5</a></li>
      </ul>
      </div>
  </div>
  
          <div id="footer" class="row">        <div class="About col-md-3">          <h3>About</h3>          <p>About us</p>          <p>Privacy Policy</p>          <p>Customer Service</p>        </div>        <div class="Help col-md-3">          <h3>Help</h3>          <p>Help Center</p>          <p>Get Started</p>          <p>Contact us</p>        </div>        <div class="Visit-us col-md-3">          <h3>Follow Us</h3>            <img src="images/facebookicon.png" height="30px" weight="30px">            <img src="images/twitter-128.png" height="30px" weight="30px">            <img src="images/google-plus-flat.png" height="30px" weight="30px">        </div>        <div class="Contact col-md-3">          <p>Stay Connected</p>          <div class="input-group">              <input type="text" class="form-control" placeholder="Email Address">              <span class="input-group-btn">                <button class="btn btn-default" type="button">Submit</button>              </span>          </div>        </div>      </div>  

</body></html>
