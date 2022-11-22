<?php
require('top.inc.php');
$product_id=mysqli_real_escape_string($conn,$_GET['id']);
$get_product=get_product($conn,'',$product_id);
?>
<?php
function get_product($conn,$limit='',$cat_id='',$product_id=''){
  $sql="select * from products where status=1 ";
  if($cat_id!=''){
    $sql.=" and products.categories_id=$cat_id ";
}  if($product_id!=''){
    $sql.=" and products.id=$product_id ";
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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Details</title>
    <link rel="stylesheet" href="product.css">
    <!--Bootstrap.css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- StyleSheet -->
    <link rel="stylesheet" href="css/mycss.css">
    <!-- Fontawesome -->
    <link rel="stylesheet" href="css/all.css">
</head>
<body>
    <div class="small-container single-product">
        <div class="row">
            <div class="col-2">
                <img src="./image/cricket7.jpg" width="100%" id="Productimg" alt="">
            </div>
            <div class="col-2">
            <h1><?php  echo $get_product['0']['name']?></h1>
            <h4>&#8377;<?php echo  $get_product['0']['mrp']?></h4>
            <input type="number" value="1">
            <button href=""  class="btnc my-4">ADD TO CART</button>
            <h3><?php  echo $get_product['0']['description']?></h3>
        </div>
        </div>
    </div>
</body>
</html>

<?php
require('footer.inc.php');
?> 