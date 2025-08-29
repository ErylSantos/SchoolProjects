<!DOCTYPE html>
<html lang="en">
<head>
<title>Moonlight Landscaping- homepage</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
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
<br>
<br>
<br>
<!-- CONTACT US -->
<a id="contact">
<section class="my-4">
    <div class="py-4">
        <h2 class="text-center">CONTACT US</h2>
        <h3 class="text-center">Please fill out the form below with your contact information, and we will reach out to you shortly. Alternatively, you can reach us using the contact information provided below.</h3>
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
            <button type="submit" class="btn btn-success custom-btn">Submit</button>
        </form>
    </div>
</section>
</a>
<br>
<br>
<br>
<br>
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