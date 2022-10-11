<?php 
require('connection.inc.php');
require('function.inc.php');

$cat_res=mysqli_query($conn,"select * from categories where status=1");
$cat_arr=array();
while($row=mysqli_fetch_assoc($cat_res)){
  $cat_arr[]=$row;
}
?>


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
    <a class="navbar-brand" href="index.php">Sports360</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span><i class="fa-solid fa-bars"></i></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav m-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="index.php">Home</a>

          <?php
          foreach($cat_arr as $list){
            ?>
            <li><a href="categories.php?id=<?php echo $list['id']?>"><?php echo $list['cat_name'] ?></a></li>
            <?php
          }
          ?>
        </li>
        <!-- <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Categories
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Action </a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li> -->
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
        <div>
          <?php
          if(isset($_SESSION['USER_LOGIN'])){
            echo '<a href="logout.php"><span><i class="fa-solid fa-sign-out"></i></span></a>';
          }else{
            echo '<a class="nav-link " href="login.php"><span><i class="fa-solid fa-user"></i></span></a>';
          }
          ?>
        </div>
      </form>
    </div>
  </div>
</nav>
</div>
