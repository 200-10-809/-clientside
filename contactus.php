<?php
$name='';
$email='';
$mobile='';
$mobile='';
$added_on='';
require('top.inc.php');
if(isset($_POST['submit'])){


  $name=($_POST['name']);
  $email=($_POST['email']);
  $mobile=($_POST['mobile']);
  $mobile=($_POST['message']);
  $added_on=date('Y-m-d h:i:s');
  $result=mysqli_query($conn,"insert into contact_us(name,email,mobile,comment,added_on) values('$name','$email','$mobile','$comment','$added_on')");
}
if(isset($result)){

}
else{
      // header('location:contactus.php');
      // die();
}

?>
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
  <form action="" method="Post">
  <div class="col-lg-6">
          <input type="text" id="name"  name="name"placeholder="Enter Name">
          <input type="text" id="email" name="email" placeholder="Enter Eamil">
          <input type="text" id="mobile" name="mobile" placeholder="Enter Mobile">
          <textarea   type="text" id="message" name="message" placeholder="Message"></textarea>
          <button  type="submit"  name="submit"class="cbtn mt-3">SEND NOW</button>
        </div>
</div>
</form>
</section>
<?php
require('footer.inc.php');
?>