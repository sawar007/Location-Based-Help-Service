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
      <a class="navbar-brand" href="main.php">Serloc</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="main.php">Home <span class="sr-only">(current)</span></a>
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
          
          <li><form action="includes/logout.inc.php" method="post">
		<button class="btn btn-primary m-2" name="logout-submit">Logout</button>
		</form></li>
        </ul>
       
      </div>
    </nav>
  </div>

</header>
<div class="container">
  <div class="row w-80     m-5">
    <div class="col">
      
      <form action=" " method="POST">
  <div class="form-group">
    <label for="name">Full Name</label>
    <input type="text" class="form-control m-2" id="email" name="Name">
  </div>
  <div class="form-group">
    <label for="Phone">Phone Number</label>
    <input type="text" class="form-control m-2" id="pwd" name="phone">
  </div>
 
  <div class="form-group">
    <label for="Phone">Street Address</label>
    <input type="text" class="form-control m-2" id="pwd" placeholder="Street and number" name="ad1">
     <input type="text" class="form-control m-2" id="pwd" placeholder="Apartment, suit, unit, building, floor, etc" name="ad2">
  </div>
  <div class="form-group">
    <label for="City">City</label>
    <input type="text" class="form-control m-2" id="pwd" name="city">
  </div>
  <div class="form-group">
    <label for="State">State/ Province/ Region</label>
    <input type="text" class="form-control m-2" id="pwd" name="state">
  </div>
  <div class="form-group">
    <label for="Zip">Zip</label>
    <input type="text" class="form-control m-2" id="pwd" name="zip">

  </div>
  <div class="form-group">
    <label for="Zip">Donating For</label>
    <input type="text" placeholder= "For example health,food etc" class="form-control m-2" id="pwd" name="for">

  </div>

  <button type="submit" name="submit"  class="btn btn-primary">Submit</button>
</form>
    </div>
    <div class="col shadow p-1 bg-white rounded ">


  </div>




</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>';
}
else{
  echo'please login first';
}

if(isset($_POST['submit']))
{

  
  require 'includes/dbh.inc.php';
  echo "string";
  $name = $_POST['Name'];
  $phone = $_POST['phone'];
  $sad = $_POST['ad1'];
  $sad1 = $_POST['ad2'];
  $city = $_POST['city'];
  $state = $_POST['state'];
  $zip = $_POST['zip'];
  $donating = $_POST['for'];
  $id = $_SESSION['userId'];


  
  $query = "insert into donate1(Name, Phone, Address, Address1, City, State, Zip,userid,donation)  values('$name','$phone', '$sad','$sad1','$city','$state','$zip','$id','$donating')";

  $query_bool = mysqli_query($conn, $query);
  if(!$query_bool)
  {
    die("error" . mysqli_error($conn));
  }




}


 ?>