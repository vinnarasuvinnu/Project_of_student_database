<?php
include("db.php");


$q1="SELECT * FROM userinfo";
$res=mysqli_query($db,$q1);
if($res){
  echo "The value of row is:";
  echo $res;
}
else{
  echo "something worng";
}



?>