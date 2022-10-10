<?php

require('connection.inc.php');

$name=$_POST['name'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$password=$_POST['password'];
$added_on=date('Y-m-d h:i:s');


$check_user=mysqli_num_rows(mysqli_query($conn,"select * from users where email='$email'"));
$check_mobile=mysqli_num_rows(mysqli_query($conn,"select * from users where mobile='$mobile'"));
if($check_user>0){
	echo "email_present";
}elseif($check_mobile>0){
	echo "mobile_present";
}else{
    $added_on=date('Y-m-d h:i:s');
	mysqli_query($conn,"insert into users(name,email,mobile,password,added_on) values('$name','$email','$mobile','$password','$added_on')");
	echo "completed";
}

?>