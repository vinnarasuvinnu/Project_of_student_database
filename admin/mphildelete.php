<?php
include("../db.php");
$count=0;
foreach ($_POST['check'] as $key => $value) {


$q1="delete from mphil where mid='$value'";
$res=mysqli_query($db,$q1);
if($res){
	$count++;
}



}

if($count > 0){
	echo '<script>alert("successfully deleted");location.href="index.php";</script>';
}
else{
		echo '<script>alert("something went wrong");location.href="index.php";</script>';

}


?>