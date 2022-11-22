<?php
require('top.inc.php');
$cat_id=mysqli_real_escape_string($conn,$_GET['id']);
$get_product=get_product($conn,'',$cat_id);
?>
<?php
function get_product($conn,$limit='',$cat_id=''){
  $sql="select * from products where status=1 ";
  if($cat_id!=''){
    $sql.=" and products.categories_id=$cat_id ";
}

  if($limit!=''){
    $sql.=" limit $limit";
  }
  $res=mysqli_query($conn,$sql);
  $data=array();
  while($row=mysqli_fetch_assoc($res)){
    $data[]=$row;
  }
  return $data;
}

?>
<section class="product bg-light">
  <div class="container">
    <div class="row py-5 text-center">
      <div class="col-lg-6 m-auto">
        <h2>PRODUCTS</h2>
      </div>
    </div>
    <?php

      foreach($get_product as $list){
    ?>
    <div class="row">
      <div class="col-lg-3">
        <div class="card">
          <div class="card-body">
            <img src="./image/cricket7.jpg" class="img-fluid pb-3" alt="">
            <h4 class="head1"><?php echo $list['name']?></h4>
            <h6>&#8377;  <?php echo $list['mrp']?></h6>
            <button class="btnc my-4">ADD TO CART</button>            
          </div>
        </div>
      </div>
      <?php }?>
      <!-- <div class="col-lg-4">
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
  </div> -->
  <div class="row text-center py-5">
    <div class="col-lg-6 m-auto">
      <button class="mbtn1">Read More</button>
    </div>
  </div>
</section>

<?php
require('footer.inc.php');
?>