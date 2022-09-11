<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sports360</title>
    <!--Bootstrap.css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- StyleSheet -->
    <link rel="stylesheet" href="css/mystyle.css">
    <!-- Fontawesome -->
    <link rel="stylesheet" href="css/all.css">
</head>
<body>
<div>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark pb-3">
  <div class="container">
    <a class="navbar-brand" href="">Sports360</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span><i class="fa-solid fa-bars"></i></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav m-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="#">Home</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Categories
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Action </a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="contactus.php">ContactUs</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="aboutus.php">AboutUs</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control mx-2 search" type="search" placeholder="Search" aria-label="Search">
        <button class="btn1 me-2 px-2" type="submit"><i class="fa-sharp fa-solid fa-magnifying-glass"></i></button>
        <a class="nav-link " href="#"><span><i class="fa-solid fa-bag-shopping"></i></span></a>
        <a class="nav-link " href="login.php"><span><i class="fa-solid fa-user"></i></span></a>
      </form>
    </div>
  </div>
</nav>
</div>
<!-- ------------------------------------Main--------------------------------------- -->
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="./image/p1.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>First slide label</h5>
        <p>Some representative placeholder content for the first slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="./image/p2.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Second slide label</h5>
        <p>Some representative placeholder content for the second slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="./image/p3.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Third slide label</h5>
        <p>Some representative placeholder content for the third slide.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<div>
    <section class="main py-5">
        <div class="container py-5">
            <div class="row py-5">
                <div class="col-lg-6 py-5">
                    <p class="m-0">Sports Equipments</p>
                    <h1>ALL Sport is here</h1>
                    <div class="line my-4"></div>
                    <p>ALL types of Sports equipment is here to make your Sports more lively and enjoyable</p>
                    <button class="mbtn1">Shop Now</button>
                </div>
            </div>
        </div>
    </section>
</div>
<!-- -------------------------------------Aboutus----------------------------------------- -->
<div>
    <section class="about py-5">
        <div class="container py-5">
            <div class="row py-5">
                <div class="col-lg-5 py-5 offset-lg-7 col-md-6 col-sm-12 col-12">
                    <p class="m-0">Sports Equipments</p>
                    <h5>ALL Sport is here</h5>
                    <div class="line my-4"></div>
                    <p>ALL types of Sports equipment is here to make your Sports more lively and enjoyable</p>
                    <button class="mbtn1 mt-4">Read More</button>
                </div>
            </div>
        </div>
    </section>
</div>
<!-- ----------------------------------------Welcome--------------------------------------- -->
<!-- <secction class="welcome text-center pb-0">
  <div class="container py-5">
    <div class="row py-5 text-white">
      <div class="col-lg- m-auto">
        <h2>WELCOME</h2>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-4">
        <div class="card py-3">
          <div class="card-body">
            <span></span>
            <h2>Product</h2>
          </div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="card py-3">
          <div class="card-body">
            <span></span>
            <h2>Product</h2>
          </div>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="card py-3">
          <div class="card-body">
            <span></span>
            <h2>Product</h2>
          </div>
        </div>
  </div>
</secction> -->

<!-- --------------------------------Products-------------------------------- -->
<section class="product bg-light">
  <div class="container">
    <div class="row py-5 text-center">
      <div class="col-lg-6 m-auto">
        <h2>PRODUCTS</h2>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-4">
        <div class="card">
          <div class="card-body">
            <img src="./image/p1.jpg" class="img-fluid pb-3" alt="">
            <h4 class="head1">Shoes</h4>
            <h6>price</h6>
            <button class="btnc my-4">ADD TO CART</button>            
          </div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="card">
          <div class="card-body">
            <img src="./image/p1.jpg" class="img-fluid pb-3" alt="">
            <h4 class="head1">Shoes</h4>
            <h6>price</h6>
            <button class="btnc my-4">ADD TO CART</button>            
          </div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="card">
          <div class="card-body">
            <img src="./image/p1.jpg" class="img-fluid pb-3" alt="">
            <h4 class="head1">Shoes</h4>
            <h6>price</h6>
            <button class="btnc my-4">ADD TO CART</button>            
          </div>
        </div>
      </div>
  </div>
  <div class="row py-5">
      <div class="col-lg-4">
        <div class="card">
          <div class="card-body">
            <img src="./image/p1.jpg" class="img-fluid pb-3" alt="">
            <h4 class="head1">Shoes</h4>
            <h6>price</h6>
            <button class="btnc my-4">ADD TO CART</button>            
          </div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="card">
          <div class="card-body">
            <img src="./image/p1.jpg" class="img-fluid pb-3" alt="">
            <h4 class="head1">Shoes</h4>
            <h6>price</h6>
            <button class="btnc my-4">ADD TO CART</button>            
          </div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="card">
          <div class="card-body">
            <img src="./image/p1.jpg" class="img-fluid pb-3" alt="">
            <h4 class="head1">Shoes</h4>
            <h6>price</h6>
            <button class="btnc my-4">ADD TO CART</button>            
          </div>
        </div>
      </div>
  </div>
  <div class="row text-center py-5">
    <div class="col-lg-6 m-auto">
      <button class="mbtn1">Read More</button>
    </div>
  </div>
</section>
<!-- -----------------------------new arrivals-------------------------------- -->
<section class="newproduct bg-light py-5">
<div class="container py-5">
    <div class="row">
      <div class="col-lg-6">
        <h1 class="py-5"> NEW PRODUCTS</h1>
      </div>
    </div>
    <div class="row g-2 py-2">
      <div class="col-lg-6">
        <div class="card">
          <div class="row">
            <div class="col-lg-6"><img src="./image/p2.jpg" class="image-fluid" alt=""></div>
              <div class="col-lg-6 p-5">
                <h4 class="head1">FOOTBALL</h4>
                <h6>Price</h6>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
        <div class="card">
          <div class="row">
            <div class="col-lg-6"><img src="./image/p2.jpg" class="image-fluid" alt=""></div>
              <div class="col-lg-6 p-5">
                <h4 class="head1">FOOTBALL</h4>
                <h6>Price</h6>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row g-2 py-2">
      <div class="col-lg-6">
        <div class="card">
          <div class="row">
            <div class="col-lg-6"><img src="./image/p2.jpg" class="image-fluid" alt=""></div>
              <div class="col-lg-6 p-5">
                <h4 class="head1">FOOTBALL</h4>
                <h6>Price</h6>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
        <div class="card">
          <div class="row">
            <div class="col-lg-6"><img src="./image/p2.jpg" class="image-fluid" alt=""></div>
              <div class="col-lg-6 p-5">
                <h4 class="head1">FOOTBALL</h4>
                <h6>Price</h6>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row g-2 py-2">
      <div class="col-lg-6">
        <div class="card">
          <div class="row">
            <div class="col-lg-6"><img src="./image/p2.jpg" class="image-fluid" alt=""></div>
              <div class="col-lg-6 p-5">
                <h4 class="head1">FOOTBALL</h4>
                <h6>Price</h6>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
        <div class="card">
          <div class="row">
            <div class="col-lg-6"><img src="./image/p2.jpg" class="image-fluid" alt=""></div>
              <div class="col-lg-6 p-5">
                <h4 class="head1">FOOTBALL</h4>
                <h6>Price</h6>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>    
 </div>
</div>
</div>
</div>    
</section>
<!------------------------------- Contact------------------------------ -->
<section class="contact py-5">
<div class="container py-3">
  <div class="row">
    <div class="col-lg-7">
      <h2>Contact Sports360</h2>
      <div class="row py-3">
        <div class="col-lg-6">
          <div class="row pt-2">
            <div class="col-lg-3 col-sm-3 col-2">
              <div class="circle">
                <span><i class="fa-solid fa-house"></i></span>
              </div>
            </div>
          <div class="col-lg-8  col-sm-8 col-8 pt-2"><p>Anand VallabhVidhya Nagar(388-122)</p></div>
        </div>
     </div>
     <div class="row py-3">
        <div class="col-lg-6">
          <div class="row pt-2">
            <div class="col-lg-3 col-sm-3 col-2">
              <div class="circle">
                <span><i class="fa-solid fa-phone"></i></span>
              </div>
            </div>
          <div class="col-lg-8  col-sm-8 col-8 pt-2"><p>+91 9988425679</p></div>
        </div>
     </div>
     <div class="row py-3">
        <div class="col-lg-6">
          <div class="row pt-2">
            <div class="col-lg-3 col-sm-3 col-2">
              <div class="circle">
                <span><i class="fa-solid fa-envelope"></i></span>
              </div>
            </div>
          <div class="col-lg-8  col-sm-8 col-8 pt-2"><p>sports360@gmail.com</p></div>
        </div>
     </div>
    </div>
  </div>
  <div class="col-lg-6">
          <input type="text" placeholder="Enter Name">
          <input type="text" placeholder="Enter Email">
          <input type="text" placeholder="Enter Mobile Number">
          <textarea name="" id=""placeholder="Message"></textarea>
          <button class="cbtn mt-3">SEND NOW</button>
        </div>
</div>
</section>
<!-- -------------------------------------Footer---------------------------------------- -->
<div class="section footer py-2">
  <div class="container">
    <div class="row">
      <div class="col-lg-9 pt-3">
        <p>&copy; <?php echo date('Y')?> Sports360 | All Rights Reserved </p>
      </div>
      <div class="col-lg-3 pt-3">
        <div class="s1">
          <span><i class="fa-brands fa-twitter"></i></span>
        </div>
        <div class="s1">
          <span><i class="fa-brands fa-instagram"></i></span>
        </div>
        <div class="s1">
          <span><i class="fa-brands fa-youtube"></i></span>
        </div>
        <div class="s1">
          <span><i class="fa-brands fa-linkedin"></i></span>
        </div>
        <div class="s1">
          <span><i class="fa-brands fa-facebook"></i></span>
        </div>
      </div>
    </div>
  </div>
</div>
    <script src="js/all.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>