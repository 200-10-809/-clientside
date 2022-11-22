<?php

// ----------------------------display array structure----------------------------------
function pr($arr){
    echo '<pre>';
    print_r($arr);
}

function prx(){
    echo '<pre>';
    print_r($arr);
    die();
}
//--------------------------------------------------
// function get_product($conn,$type='',$limit=''){
//     $sql="select * from products";
//     if($type=='latest'){
//       $sql.="order by id desc";
//     }
//     if($limit!=''){
//       $sql.=" limit $limit";
//     }
//     $data=array();
//     $res=mysqli_query($conn,$sql);
//     while($row=mysqli_fetch_assoc($res)){
//       $data[]=$row;
//     }
//     return $data;
//   }
//   ?>