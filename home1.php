<?php
    session_start();
    $database_name = "egg";
    $con = mysqli_connect("localhost","root","",$database_name);

  
?>

<!DOCTYPE html>

<head>
<title>Home</title>
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/stiles.css">
<link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@500&display=swap"
      rel="stylesheet"
    />

</head>
<body>
<!------including header here --------->
<?php include "php\header1.php";?>
<!------end header here --------->
<div class="container-fluid">
      <!-- banner ni nato -->
      <div class="row banner" color="primary">
        <div class="row col-md inner-banner m-4">
          <div class="col-md-6 content bg-circle align-self-center text-center">
            <h1 class="text-center">Hello Customer!</h1>
            <h5>Enjoy This Amazing Online Store</h5>
            <p class="dummy-desc">
             Using our Website makes you more productive <i class="far fa-smile-beam"></i>
            </p>
            <div class="button">
             <a href="login.php"><button type="button" class="btn" >
                PLEASE LOGIN <i class="fa fa-shopping-bag" aria-hidden="true"></i>
              </button></a>
            </div>
          </div>
          <div class="col-md-6 image alig-end">
            <div class=""></div>
          </div>
        </div>
      </div>
    </div>
    <!-- About daw -->
    <div class="container text-center about my-5">
      <div class="row">
        <div class="col-lg col-md col-sm col-xs">
          <h2 class="custom-title my-5">
            What We Offer
          </h2>
          <p class="dummy-desc">
          <h4>  We offer Quality, Safe and Good Service</h4>
          </p>
        </div>
      </div>
    </div>
    <!-- collection daw -->
    <div class="container text-center collections my-5">
      <h2 class="custom-title">SALE</h2>
      <div class="row my-5">
        <div class="col-md-4">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="img/w.jpg" alt="Card image cap" />
            <div class="card-body">
              <h5 class="card-title">KWEK KWEK ni siya</h5>
              <p class="card-text dummy-desc">
                Lami ni siya kwek kwek .
              </p>
              <a href="#" class="btn"
                >Add Cart
                <i class="fa fa-shopping-bag" aria-hidden="true"></i
              ></a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="img/k.jpg" alt="Card image cap" />
            <div class="card-body">
              <h5 class="card-title">Quail EGG kwek</h5>
              <p class="card-text dummy-desc">
                kwek kwek gihapon na gagmay xd.
              </p>
              <a href="#" class="btn"
                >Add Cart
                <i class="fa fa-shopping-bag" aria-hidden="true"></i
              ></a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="img/kwek.jpg" alt="Card image cap" />
            <div class="card-body">
              <h5 class="card-title">KWEK KWEK </h5>
              <p class="card-text dummy-desc">
                kwek kwek gihapon xd.
              </p>
              <a href="#" class="btn"
                >Add Cart
                <i class="fa fa-shopping-bag" aria-hidden="true"></i
              ></a>
            </div>
          </div>
        </div>
      </div>
      <div class="row my-5">
        <div class="col-md-4">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="img/k.jpg" alt="Card image cap" />
            <div class="card-body">
              <h5 class="card-title">kwek kwek</h5>
              <p class="card-text dummy-desc">
                lami basta libre.
              </p>
              <a href="#" class="btn"
                >Add Cart
                <i class="fa fa-shopping-bag" aria-hidden="true"></i
              ></a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="img/w.jpg" alt="Card image cap" />
            <div class="card-body">
              <h5 class="card-title">kwek kwek</h5>
              <p class="card-text dummy-desc">
                way fries diha xd.
              </p>
              <a href="#" class="btn"
                >Add Cart
                <i class="fa fa-shopping-bag" aria-hidden="true"></i
              ></a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="img/kwek.jpg" alt="Card image cap" />
            <div class="card-body">
              <h5 class="card-title">Sneakers</h5>
              <p class="card-text dummy-desc">
               way hatdog?.
              </p>
              <a href="#" class="btn"
                >Add Cart
                <i class="fa fa-shopping-bag" aria-hidden="true"></i
              ></a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- sale ni diri -->

 <footer class="footer">
      <div class="container">
        <div class="row">
          <div class="col-md-3 footer-widget one">
            <strong class="logo">Eggtraordinary</strong>
            <div class="row">
              <div class="col-md">
                <p class="dummy-desc">
                   Kwek Kwek or Orange eggs are boiled quailed eggs coated with an orange batter and deep-fried until the batter is crispy. This is categorized as a street food and are sold along with fish balls, squid balls, and chicken balls.
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-3 footer-widget two">
            <h5>Help Us!</h5>
             <p class="dummy-desc">
                  by providing feedback 
                </p>
          </div>
          <div class="col-md-3 footer-widget three">
            <h5>Folow Us on Social Media</h5>
            <div class="row"></div>
            <div class="social-icons col-md">
              <a href="#" class="fa fa-facebook"></a>
              <a href="#" class="fa fa-twitter"></a>
              <a href="#" class="fa fa-google"></a>
              <a href="#" class="fa fa-linkedin"></a>
              <a href="#" class="fa fa-youtube"></a>
              <a href="#" class="fa fa-instagram"></a>
            </div>
          </div>
          <div class="col-md-3 footer-widget four">
            <h5>What's New</h5>
            <div class="news">
              <div></div>
              <div class="media my-2">
                <img
                  src="a.jpg"
                  class="mx-2"
                  height="64px"
                  width="64px"
                  alt="..."
                />
                <div class="media-body">
                  Some recips here!
                 <a href="https://panlasangpinoy.com/pinoy-street-food-orange-egg-tokneneng-qwek-kwek-kwek-recipe/"> 
                  <br>Read more... </a>
                </div>
              </div>
              <div class="media">
                <img
                  src="a.jpg"
                  class="mx-2"
                  height="64px"
                  width="64px"
                  alt="..."
                />
                <div class="media-body">
                   <p>Kwek kwek is healthy?</p>
                 <a href="https://eaturistas.wordpress.com/tag/kwek-kwek/">Read more...</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <div class="copyright text-center">
      <span class="text-center"
        >Copyright <i class="fa fa-copyright" aria-hidden="true"></i> 2020 |
        Developed By <b>  Team BDLMNJJ</b></span
      >
    </div>

</body>
</html>