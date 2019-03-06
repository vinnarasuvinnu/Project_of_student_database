<?php
session_start();
include("db.php");

$sno=mysqli_real_escape_string($db,$_POST['sno']);
$ano=mysqli_real_escape_string($db,$_POST['ano']);
$year=mysqli_real_escape_string($db,$_POST['year']);
$degree=mysqli_real_escape_string($db,$_POST['degree']);
$course1=mysqli_real_escape_string($db,$_POST['course1']);
$dept1=mysqli_real_escape_string($db,$_POST['dept1']);
$med1=mysqli_real_escape_string($db,$_POST['med1']);
$shift1=mysqli_real_escape_string($db,$_POST['shift1']);
$timing1=mysqli_real_escape_string($db,$_POST['timing1']);
$rno=mysqli_real_escape_string($db,$_POST['rno']);
$name=mysqli_real_escape_string($db,$_POST['name']);
$gen1=mysqli_real_escape_string($db,$_POST['gen1']);
$com=mysqli_real_escape_string($db,$_POST['com']);
$dob=mysqli_real_escape_string($db,$_POST['dob']);





$q1="INSERT INTO `userinfo` ( `ano`, `year`, `degree`, `course1`, `dept1`, `med1`, `shift1`, `timing1`, `rno`, `name`, `gen1`, `com`, `dob`) VALUES ( '$ano', '$year', '$degree', '$course1', '$dept1', '$med1', '$shift1', '$timing1', '$rno', '$name', '$gen1', '$com', '$dob');";

if(mysqli_query($db,$q1))

{
echo "The error is:".mysqli_error($db);
	echo '<script language="javascript">';
echo 'alert("your registration is successful");location.href="index.php"';
echo '</script>';

}else{
	echo "The error is:".mysqli_error($db);



	echo '<script language="javascript">';
echo 'alert("your registration is unsuccessful");location.href="index.php"';
echo '</script>';

}
?>
