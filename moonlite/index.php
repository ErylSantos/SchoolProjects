<!DOCTYPE html>
<html lang="en">
<head>
<title>Moonlight Landscaping- homepage</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap" rel="stylesheet">
</head>
<body>
<!-- NAVIGATION BAR -->
<a id="home">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="index.php"><img class = "logo-img" src="images/logo.jpg" alt="Your Logo"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <!--
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Gallery
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#category1">Category 1</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#category2">Category 2</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#category3">Category 3</a>
        </div>
      </li>
      -->
      <li class="nav-item">
        <a class="nav-link" href="gallery.php">Gallery</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="services.php">Services</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="aboutus.php">About Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contactus.php">Contact Us </a>
      </li>
    </ul>
  </div>
</nav>
</a>

<!-- CAROUSEL -->
<div class="bd-example">
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100" src="images/home.jpg" alt="First slide">
        <div class="carousel-caption d-none d-md-block">
          <h3>Illuminating your landscape's True potential</h3>
        </div>
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="images/home2.jpg" alt="Second slide">
        <div class="carousel-caption d-none d-md-block">
          <h3>Illuminating your landscape's True potential</h3>
        </div>
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="images/home3.jpg" alt="Third slide">
        <div class="carousel-caption d-none d-md-block">
          <h3>Illuminating your landscape's True potential</h3>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>



<!--
<a id="category1">
<section class="my-4">
    <div class="py-4">
        <h2 class="text-center">CATEGORY 1</h2>
    </div>
    <div class="container-fluid">
        <div class="row">
    <div class="col-lg-4 col-md-4 col-12">
      <div class="box">
        <a href="images/bg1 (1).jpg">
        <img src="images/bg1 (1).jpg" class="img-fluid pb-3">
        </a>
      </div>
    </div>
    <div class="col-lg-4 col-md-4 col-12">
        <a href="images/bg1 (2).jpg">
        <img src="images/bg1 (2).jpg" class="img-fluid pb-3">
        </a>
    </div>
    <div class="col-lg-4 col-md-4 col-12">
    <a href="images/bg1 (3).jpg">
        <img src="images/bg1 (3).jpg" class="img-fluid pb-3">
    </a>
    </div>
    </div>
    </div>
</section>
</a>


<a id="category2">
<section class="my-4">
    <div class="py-4">
        <h2 class="text-center">CATEGORY 2</h2>
    </div>
    <div class="container-fluid">
        <div class="row">
    <div class="col-lg-4 col-md-4 col-12">
      <a href="images/cat2-1.jpg">
        <img src="images/cat2-1.jpg" class="img-fluid pb-3">
      </a>
    </div>
    <div class="col-lg-4 col-md-4 col-12">
    <a href="images/cat2-2.jpg">
        <img src="images/cat2-2.jpg" class="img-fluid pb-3">
    </a>
    </div>
    <div class="col-lg-4 col-md-4 col-12">
    <a href="images/cat2-3.jpg">
        <img src="images/cat2-3.jpg" class="img-fluid pb-3">
    </a>
    </div>
    </div>
    </div>
</section>
</a>

<a id="category3">
<section class="my-4">
    <div class="py-4">
        <h2 class="text-center">CATEGORY 3</h2>
    </div>
    <div class="container-fluid">
        <div class="row">
    <div class="col-lg-4 col-md-4 col-12">
    <a href="images/category3 (1).jfif">
        <img src="images/category3 (1).jfif" class="img-fluid pb-3">
    </a>
    </div>
    <div class="col-lg-4 col-md-4 col-12">
    <a href="images/category3 (2).jpg">
        <img src="images/category3 (2).jpg" class="img-fluid pb-3">
    </a>
    </div>
    <div class="col-lg-4 col-md-4 col-12">
    <a href="images/category3 (3).jpg">
        <img src="images/category3 (3).jpg" class="img-fluid pb-3">
    </a>
    </div>
    </div>
    </div>
</section>
</a>
-->

<!-- SERVICES
<a id="services">
<section class="my-4">
    <div class="py-4">
        <h2 class="text-center">SERVICES</h2>
    </div>
    <div class="container-fluid">
        <h3 class="text-center">Dito lagay services pwede ko rin lagyan image</h3>
        </b></p>
    </div>
  </section>
</a>
-->
<!-- ABOUT US
<a id="aboutus">
<section class="my-4">
    <div class="py-4">
        <h2 class="text-center">ABOUT US</h2>
    </div>
    <div class="container-fluid">
        <h3 class="text-center">Moonlight Landscaping</h3>
        <p class="text-center"><b>Moonlight is a blahblahblahblahblahblahblahblahblahblahblahblahblahblahblahblahblahblahblahblahbla
        blahblahblahblahblahblahblahblahblahblahblahblahblahblahblahblahblahblahblahblahblahblahblahblahblahblah
        </b></p>
    </div>
</section>
</a>
-->

<!-- CONTACT US
<a id="contact">
<section class="my-4">
    <div class="py-4">
        <h2 class="text-center">CONTACT US</h2>
    </div>
    <div class="w-50 m-auto">
        <form action="about.php" method="post">
            <div class="form-group">
                <label>Name:</label>
                <input type="text" name="name" class="form-control">
            </div>
            <div class="form-group">
                <label>Email:</label>
                <input type="email" name="email" class="form-control">
            </div>
            <div class="form-group">
                <label>Number:</label>
                <input type="" name="number" class="form-control">
            </div>
            <button type="submit" class="btn btn-success">Submit</button>
        </form>
    </div>
</section>
</a>
-->

<footer>
    <div class="footer-container">
        <div class="footer-section">
            <h3>About Us</h3>
            <p>At Moonlite Landscaping, we specialize in crafting custom outdoor spaces that blend beauty and functionality. With a decade of expertise, we bring your outdoor vision to life with a commitment to excellence and sustainability.</p>
        </div>
        <div class="footer-section">
            <h3>Contact Us</h3>
            <p>tjfree2222@gmail.com<br>1-360-509-7712</p>
        </div>
        <div class="footer-section">
            <!-- Add your third section content here -->
            <h3>Social Media</h3>
            <br><a href="https://www.facebook.com/profile.php?id=100057348793636" target="_blank">
            <img src="images/facebook.png" alt="fb" ="max-width: 10style0%; height: auto;">
            </a>
        </div>
    </div>
    <div class="footer-bottom">
        <br>
        <p>&copy; 2024 Moonlite Lanscaping. <br>All Rights Reserved.</p>
    </div>
</footer>



<!-- JavaScript to handle resizing -->
<script>
    document.addEventListener("DOMContentLoaded", function() {
        var currentLocation = location.href;
        var menuItem = document.querySelectorAll('.nav-link');
        var menuLength = menuItem.length;
        for (var i = 0; i < menuLength; i++) {
            if (menuItem[i].href === currentLocation) {
                menuItem[i].classList.add("active");
            }
        }
    });
</script>



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>