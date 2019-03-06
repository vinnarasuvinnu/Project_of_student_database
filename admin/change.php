      <?php
      $find=$_POST['find'];
      $rplace=$_POST['rplace'];


include('../db.php');
$q1="update userinfo set year='$rplace' where year='$find'";
$res=mysqli_query($db,$q1);
echo mysqli_error($db);
if($res){
	echo '<script>alert("successfully updated");location.href="index.php";</script>';
}
else{
		echo '<script>alert("something went wrong");location.href="index.php";</script>';

}
?>