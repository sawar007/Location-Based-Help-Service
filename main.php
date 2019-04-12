<?php
require "header.php";

?>


	<?php
	if(isset($_SESSION['userId'])){
		echo '
  <!doctype html>
  <html lang="en">
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="">
      <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
      <meta name="generator" content="Jekyll v3.8.5">
      <title>Main page</title>

      <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

      <style>
        .bd-placeholder-img {
          font-size: 1.125rem;
          text-anchor: middle;
        }

        @media (min-width: 768px) {
          .bd-placeholder-img-lg {
            font-size: 3.5rem;
          }
        }

      </style>

      <!-- Custom styles for this template -->
      <style type="text/css">
        /* GLOBAL STYLES
  -------------------------------------------------- */
  /* Padding below the footer and lighter body text */

  body {
    padding-top: 3rem;
    padding-bottom: 3rem;
    color: #5a5a5a;
    width: 80%;
    margin: auto;
  }


  /* CUSTOMIZE THE CAROUSEL
  -------------------------------------------------- */

  /* Carousel base class */
  .carousel {
    margin-top: 1rem;
    margin-bottom: 1rem;


  }
  /* Since positioning the image, we need to help out the caption */
  .carousel-caption {
    bottom: 3rem;
    z-index: 10;
  }

  /* Declare heights because of positioning of img element */
  .carousel-item {
    height: 28rem;
  }
  .carousel-item > img {
    position: absolute;
    top: 0;
    left: 0;
    min-width: 100%;
    height: 32rem;
  }


  /* MARKETING CONTENT
  -------------------------------------------------- */

  /* Center align the text within the three columns below the carousel */
  .marketing .col-lg-4 {
    margin-bottom: 1.5rem;
    text-align: center;
  }
  .marketing h2 {
    font-weight: 400;
  }
  .marketing .col-lg-4 p {
    margin-right: .75rem;
    margin-left: .75rem;
  }


  /* Featurettes
  ------------------------- */

  .featurette-divider {
    margin: 5rem 0; /* Space out the Bootstrap <hr> more */
  }

  /* Thin out the marketing headings */
  .featurette-heading {
    font-weight: 300;
    line-height: 1;
    letter-spacing: -.05rem;
  }
  .carousel-inner img {
      width: 100%;
      height: 100%;
    }
  .navbar{
    width: 90%;
    margin: auto;
  }

  /* RESPONSIVE CSS
  -------------------------------------------------- */

  @media (min-width: 40em) {
    /* Bump up size of carousel content */
    .carousel-caption p {
      margin-bottom: 1.25rem;
      font-size: 1.25rem;
      line-height: 1.4;
    }

    .featurette-heading {
      font-size: 50px;
    }
  }

  @media (min-width: 62em) {
    .featurette-heading {
      margin-top: 7rem;
    }
  }
      </style>
    
    </head>
    <body>
      <header>
        <div class="navbar">
    <nav class="navbar navbar-expand-md navbar-light fixed-top bg-light  ">
      <a class="navbar-brand" href="#">WeCare</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="donate.php">Donate</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="service.php">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.php">About Us</a>
          </li>
        </ul>

        <ul class="navbar-nav nav navbar-right">
        <li class ="nav-item"><a class ="nav-link" href="profile.php">Your Profile</a></li>
          
          <li><form action="includes/logout.inc.php" method="post">
		<button class="btn btn-primary m-2" name="logout-submit">Logout</button>
		</form></li>
        </ul>
       
      </div>
    </nav>
  </div>

  </header>

  <main role="main">

    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="IMG_7854-3.jpeg" alt="Los Angeles" width="1100" height="500">
          <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" ><rect fill="#777" width="100%" height="100%"/></svg>
          <div class="container">
            <div class="carousel-caption text-left">
              <h2>John Bunyan</h2>
              <p>You have not lived today until you have done something for someone who can never repay you.</p>
              <p><a class="btn btn-lg btn-primary" href="pro_signup.php" role="button">Sign up today</a></p>
            </div>
          </div>
        </div>
        <div class="carousel-item">
         <img src="gandhi.jpg" alt="Los Angeles" width="1100" height="500">
          <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" ><rect fill="#777" width="100%" height="100%"/></svg>
          <div class="container">
            <div class="carousel-caption text-left">
              <h2 style = "color:black;"> -Mahatma Gandhi </h2>
              <p style = "color:black;">The simplest act of kindness are by far more powerful than a thousand health bowing in prayers</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <img src="village.jpg" alt="Los Angeles" width="1100" height="500">
          <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" ><rect fill="#777" width="100%" height="100%"/></svg>
          <div class="container">
            <div class="carousel-caption text-right">
              <h2>-Myles Munroe</h2>
              <p>The value of life is not in its duration, but in its donation. You are not important because of how long you live, you are important because of how effective you live.</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
            </div>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>


  </main>
  <div class="container">
    <div class="row bg-light shadow p-3 mb-5 bg-white rounded"> 
      <div  style= "padding:20px" class="col-12  text-align">
        <p>“Making a difference by extending a helping hand for a social cause is like prestidigitating the magic of highest prestige.”</p>


    </div>
  </div>
  <div class ="row" style="margin-top: 4rem">
    <div style="padding: 0" class="col font-weight-bold">
      <p>Donate Food</p>
    
    </div>
  </div>
  <div style= "margin-top:0px" class="row bg-light shadow p-3 mb-5 bg-white rounded">
    <div  class="col-sm-12 col-md-6 col-lg-8">
       <p>We are a country that prides itself on power and wealth, yet there are 
millions of children who go hungry every day. It is our responsibility, 
not only as a nation, but also as individuals, to get involved. So, next
 time you pass someone on the street who is in need, remember how lucky 
you are, and do not turn away. </p> 
        <a href = "donate.php"> <button class="btn btn-primary">Donate Now</button></a><br>
     </div>
       <div  style="margin-top: 5px" class="col-sm-12 col-md-6 col-lg-4">
         <img src="poor.jpg" height="300px" width="100%">
       </div>

    </div>


    <div class ="row" style="margin-top: 4rem">
    <div style="padding: 0" class="col font-weight-bold text-right">
      <p>Donate clothes</p>
    
    </div>
  </div>
    <div style= "margin-top:0px" class="row bg-light shadow p-3 mb-5 bg-white rounded">
   
       <div   class="col-sm-12 col-md-6 col-lg-4">
         <img src="img_kids.jpg" height="300px" width="100%">
       </div>
       <div  class="col-sm-12 col-md-6 col-lg-8 ">
       <p>Clothes and manners do not make the man; but, when he is made, they greatly improve his appearance.

</p><br>
         <a href = "donate.php"> <button class="btn btn-primary">Donate Now</button></a><br>
     </div>

    </div>

    <div class ="row" style="margin-top: 4rem">
    <div style="padding: 0" class="col font-weight-bold">
      <p>Donate To Health</p>
    
    </div>
  </div>
  <div style= "margin-top:0px" class="row bg-light shadow p-3 mb-5 bg-white rounded">
    <div  class="col-sm-12 col-md-6 col-lg-8">
       <p>To enjoy good health, to bring true happiness to one s family, to bring peace to all, one must first discipline and control ones  own mind. If a man can control his mind he can find the way to Enlightenment, and all wisdom and virtue will naturally come to him.
 </p> 
        <a href = "donate.php"> <button class="btn btn-primary">Donate Now</button></a><br>
     </div>
       <div  style="margin-top: 5px" class="col-sm-12 col-md-6 col-lg-4">
         <img src="health.jpg" height="300px" width="100%">
       </div>

    </div>
   <div style= "margin-top:0px" class="row bg-light shadow p-3 mb-5 bg-white rounded">
   
       <div   class="col-sm-12 col-md-4 col-lg-4">
         <h3>24/7 Donor Support</h3>
         <p>Just a message away for information or assistance to make giving seamless for you.</p>
       </div>
       <div  class="col-sm-12 col-md-4 col-lg-4 ">
       <h3>GiveAssured</h3>
       <p>A promise to our donors that every listed NGO is legally and financially compliant</p>
     </div>

      <div  class="col-sm-12 col-md-4 col-lg-4 ">
       <h3>100% Guaranteed Updates</h3>
       <p>Ensuring you are aware of the impact that your donations are making.</p>
     </div>

    </div>









  </div>
    <!-- Footer -->
<footer class="page-footer font-small blue">

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2018 Copyright:
    <a href="https://mdbootstrap.com/education/bootstrap/"> </a>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->



  </body>


   <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

  </html>

';

	}
	else{
		echo '
  <!doctype html>
  <html lang="en">
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="">
      <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
      <meta name="generator" content="Jekyll v3.8.5">
      <title>Carousel Template · Bootstrap</title>

      <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

      <style>
        .bd-placeholder-img {
          font-size: 1.125rem;
          text-anchor: middle;
        }

        @media (min-width: 768px) {
          .bd-placeholder-img-lg {
            font-size: 3.5rem;
          }
        }

      </style>

      <!-- Custom styles for this template -->
      <style type="text/css">
        /* GLOBAL STYLES
  -------------------------------------------------- */
  /* Padding below the footer and lighter body text */

  body {
    padding-top: 3rem;
    padding-bottom: 3rem;
    color: #5a5a5a;
    width: 80%;
    margin: auto;
  }


  /* CUSTOMIZE THE CAROUSEL
  -------------------------------------------------- */

  /* Carousel base class */
  .carousel {
    margin-top: 1rem;
    margin-bottom: 1rem;


  }
  /* Since positioning the image, we need to help out the caption */
  .carousel-caption {
    bottom: 3rem;
    z-index: 10;
  }

  /* Declare heights because of positioning of img element */
  .carousel-item {
    height: 28rem;
  }
  .carousel-item > img {
    position: absolute;
    top: 0;
    left: 0;
    min-width: 100%;
    height: 32rem;
  }


  /* MARKETING CONTENT
  -------------------------------------------------- */

  /* Center align the text within the three columns below the carousel */
  .marketing .col-lg-4 {
    margin-bottom: 1.5rem;
    text-align: center;
  }
  .marketing h2 {
    font-weight: 400;
  }
  .marketing .col-lg-4 p {
    margin-right: .75rem;
    margin-left: .75rem;
  }


  /* Featurettes
  ------------------------- */

  .featurette-divider {
    margin: 5rem 0; /* Space out the Bootstrap <hr> more */
  }

  /* Thin out the marketing headings */
  .featurette-heading {
    font-weight: 300;
    line-height: 1;
    letter-spacing: -.05rem;
  }
  .carousel-inner img {
      width: 100%;
      height: 100%;
    }
  .navbar{
    width: 90%;
    margin: auto;
  }

  /* RESPONSIVE CSS
  -------------------------------------------------- */

  @media (min-width: 40em) {
    /* Bump up size of carousel content */
    .carousel-caption p {
      margin-bottom: 1.25rem;
      font-size: 1.25rem;
      line-height: 1.4;
    }

    .featurette-heading {
      font-size: 50px;
    }
  }

  @media (min-width: 62em) {
    .featurette-heading {
      margin-top: 7rem;
    }
  }
      </style>
    
    </head>
    <body>
      <header>
        <div class="navbar">
    <nav class="navbar navbar-expand-md navbar-light fixed-top bg-light  ">
      <a class="navbar-brand" href="#">WeCare</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="donate.php">Donate</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="service.php">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.php">About Us</a>
          </li>
        </ul>

        <ul class="navbar-nav nav navbar-right">
          <li><a href="pro_signup.php"><button class="btn btn-success m-2">Sign up</button></a></li>
          <li><a href="login.php"></span><button class="btn btn-primary m-2">Login</button> </a></li>
        </ul>
       
      </div>
    </nav>
  </div>

  </header>

  <main role="main">

    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="IMG_7854-3.jpeg" alt="Los Angeles" width="1100" height="500">
          <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" ><rect fill="#777" width="100%" height="100%"/></svg>
          <div class="container">
            <div class="carousel-caption text-left">
             <h2>John Bunyan</h2>
             <p>You have not lived today until you have done something for someone who can never repay you.</p>
              <p><a class="btn btn-lg btn-primary" href="pro_signup.php" role="button">Sign up today</a></p>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <img src="gandhi.jpg" alt="Los Angeles" width="1100" height="500">
          <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" ><rect fill="#777" width="100%" height="100%"/></svg>
          <div class="container">
            <div class="carousel-caption text-left">
              <h2 style = "color:black;"> -Mahatma Gandhi </h2>
              <p>The simplest act of kindness are by far more powerful than a thousand health bowing in prayers</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <img src="happy1.jpg" alt="Los Angeles" width="1100" height="500">
          <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" ><rect fill="#777" width="100%" height="100%"/></svg>
          <div class="container">
            <div class="carousel-caption text-right">
              <h2>-Myles Munroe</h2>
              <p>The value of life is not in its duration, but in its donation. You are not important because of how long you live, you are important because of how effective you live.</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
            </div>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>


  </main>
  <div class="container">
    <div class="row bg-light shadow p-3 mb-5 bg-white rounded"> 
      <div  style= "padding:20px" class="col-12  text-align">
        <p>“Making a difference by extending a helping hand for a social cause is like prestidigitating the magic of highest prestige.” </p>


    </div>
  </div>
  <div class ="row" style="margin-top: 4rem">
    <div style="padding: 0" class="col font-weight-bold">
      <p>Donate Food</p>
    
    </div>
  </div>
  <div style= "margin-top:0px" class="row bg-light shadow p-3 mb-5 bg-white rounded">
    <div  class="col-sm-12 col-md-6 col-lg-8">
       <p>We are a country that prides itself on power and wealth, yet there are 
millions of children who go hungry every day. It is our responsibility, 
not only as a nation, but also as individuals, to get involved. So, next
 time you pass someone on the street who is in need, remember how lucky 
you are, and do not turn away. </p> 
      <a href = "donate.php"> <button class="btn btn-primary">Donate Now</button></a><br>
     </div>
       <div  style="margin-top: 5px" class="col-sm-12 col-md-6 col-lg-4">
         <img src="poor.jpg" height="300px" width="100%">
       </div>

    </div>


    <div class ="row" style="margin-top: 4rem">
    <div style="padding: 0" class="col font-weight-bold text-right">
      <p>Donate clothes</p>
    
    </div>
  </div>
    <div style= "margin-top:0px" class="row bg-light shadow p-3 mb-5 bg-white rounded">
   
       <div   class="col-sm-12 col-md-6 col-lg-4">
         <img src="img_kids.jpg" height="300px" width="100%">
       </div>
       <div  class="col-sm-12 col-md-6 col-lg-8 ">
       <p>Clothes and manners do not make the man; but, when he is made, they greatly improve his appearance.

 </p><br>
        <a href = "donate.php"> <button class="btn btn-primary">Donate Now</button></a><br>
     </div>

    </div>

    <div class ="row" style="margin-top: 4rem">
    <div style="padding: 0" class="col font-weight-bold">
      <p>Donate To Health</p>
    
    </div>
  </div>
  <div style= "margin-top:0px" class="row bg-light shadow p-3 mb-5 bg-white rounded">
    <div  class="col-sm-12 col-md-6 col-lg-8">
       <p>To enjoy good health, to bring true happiness to one s family, to bring peace to all, one must first discipline and control one s own mind. If a man can control his mind he can find the way to Enlightenment, and all wisdom and virtue will naturally come to him.
</p> 
      <a href = "donate.php"> <button class="btn btn-primary">Donate Now</button></a><br>
     </div>
       <div  style="margin-top: 5px" class="col-sm-12 col-md-6 col-lg-4">
         <img src="health.jpg" height="300px" width="100%">
       </div>

    </div>


      

    <div style= "margin-top:0px" class="row bg-light shadow p-3 mb-5 bg-white rounded">
   
       <div   class="col-sm-12 col-md-4 col-lg-4">
         <h3>24/7 Donor Support</h3>
         <p>Just a message away for information or assistance to make giving seamless for you.</p>
       </div>
       <div  class="col-sm-12 col-md-4 col-lg-4 ">
       <h3>GiveAssured</h3>
       <p>A promise to our donors that every listed NGO is legally and financially compliant</p>
     </div>

      <div  class="col-sm-12 col-md-4 col-lg-4 ">
       <h3>100% Guaranteed Updates</h3>
       <p>Ensuring you are aware of the impact that your donations are making.</p>
     </div>

    </div>
   
   
      









  </div>
    <!-- Footer -->
<footer class="page-footer font-small blue">

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2018 Copyright:

  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->



  </body>


   <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

  </html>
';

	}
  ?>
 <?Php
 $connection = new mysqli('localhost', 'root', 'flatno887', 'LoginSystem');
 
 if ($connection->connect_errno > 0) {
 die ('Unable to connect to database [' . $connection->connect_error . ']');
 } 
 $sql = "SELECT * FROM donate1";
 if (!$result = $connection->query($sql)) {
     die ('There was an error running query[' . $connection->error . ']');
 } 
?>

<?php
 $rows = $result->num_rows;    // Find total rows returned by database
 if($rows > 0) {
 $cols = 3;    // Define number of columns
 $counter = 1;     // Counter used to identify if we need to start or end a row
 $nbsp = $cols - ($rows % $cols);    // Calculate the number of blank columns
 
 $container_class = 'container-fluid';  // Parent container class name
 $row_class = 'row  bg-light h-25 p-1 shadow p-3 bg-white rounded n';    // Row class name
 $col_class = 'col-sm-4 p-0 '; // Column class name

        echo'<br><h1>People who recently donated</h1><br>';
        echo '<div class="'.$container_class.'">';    // Container open
 while ($item = $result->fetch_array()) {
 if(($counter % $cols) == 1) {    // Check if it's new row
 echo '<div class="'.$row_class.'">'; // Start a new row
 }
 echo'';
                   
 echo '<div class="'.$col_class.'"><p>'.$item['Name'].'</p> <h5>'.$item['Phone'].'</h5><p>'.$item['donation'].'</p> <p>'.$item['Address'].'</p> <p>'.$item['Address1'].'</p><p>'.$item['City'].'</p>
        <p>'.$item['State'].'</p><p>'.$item['Zip'].'</p><hr></div>';     // Column with content
 if(($counter % $cols) == 0) { // If it's last column in each row then counter remainder will be zero
 echo '</div>'; //  Close the row
 }
 $counter++;    // Increase the counter
 }
 $result->free();
 if($nbsp > 0) { // Adjustment to add unused column in last row if they exist
 for ($i = 0; $i < $nbsp; $i++) { 
 echo '<div class="'.$col_class.'">&nbsp;</div>'; 
 }
 echo '</div>';  // Close the row
 }
        echo '</div>';  // Close the container
 }
?>
    





	


