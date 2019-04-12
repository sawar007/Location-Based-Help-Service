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
      <a class="navbar-brand" href="main.php">WeCare</a>
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
        <li class ="nav-item"><a class ="nav-link" href="profile.php">Your Profile</a></li>
          
          <li><form action="includes/logout.inc.php" method="post">
		<button class="btn btn-primary m-2" name="logout-submit">Logout</button>
		</form></li>
        </ul>
       
      </div>
    </nav>
  </div>

  </header>


  <div class="container">

    <div class="container">
  <div class="row w-auto    m-2">

    
    <div class="col shadow p-1 bg-white rounded ">
      <div class="row w-90 m-2">
        <div class="col">
        <h1> About Us</h1>
        <p></p><br>

           <h3 style = "color:lightblue;"> Mission </h3>
    <p> To promote efficient and effective givings that provide greater opportunities to the poor india.</p>
    <br>


    <h3 style = "color:lightblue;"> Vission </h3>
      <p>A strong "giving" culture where Indians donate 2% of their income every year to give the poor a chance. A vibrant "philanthropy marketplace" to ensure that the most efficient and effective nonprofits get access to the most resources</p><br>


    <h3 style = "color:lightblue;"> Values</h3>
      <p>We must do things because they make sense to do, and not simply because that is how everyone else does it. Blind faith is the enemy of all innovation.</p>


      </div>
      </div>


  </div>  
  
      
  </div>
