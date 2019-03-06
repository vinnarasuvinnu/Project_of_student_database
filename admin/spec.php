<?php

include('../db.php');
$q1="select * from userinfo";
$res=mysqli_query($db,$q1);
$output=array();
$list=$_POST['arr'];

while($row=mysqli_fetch_array($res)){

$listarr=array();
foreach ($list as $key => $value) {

	array_push($listarr,array($value=>$row[$value]));

}
$output []=$listarr;

}
/*if($res){

while($row=mysqli_fetch_array($res)){

	$output []=array('fname'=>$row['fname'],'lname'=>$row['lname'],'dob'=>$row['dob'],'gender'=>$row['gender'],'contact'=>$row['contact'],'email'=>$row['email'],'board'=>$row['board'],'yearofpass'=>$row['yearofpass'],'aggri'=>$row['aggri'],'pboard'=>$row['pboard'],'pyearofpass'=>$row['pyearofpass'],'pagri'=>$row['pagri'],'ug_reg'=>$row['universityregno'],'ugdtype'=>$row['typeofdegree'],'ugdegree'=>$row['degree'],'ugstream'=>$row['stream'],'ugcolg'=>$row['College'],'uguni'=>$row['university'],'ugpass'=>$row['gyearofpass'],'ugcgpa'=>$row['Cgpa'],'ugaggr'=>$row['gaggri'],'mtdeg'=>$row['mtdgeree'],'pg_reg'=>$row['muniversityregno'],'pgdtype'=>$row['mtypeofdegree'],'pgdegree'=>$row['mdegree'],'pgstream'=>$row['mstream'],'pgcolg'=>$row['mCollege'],'pguni'=>$row['muniversity'],'pgpass'=>$row['myearofpass'],'pgcgpa'=>$row['mCgpa'],'pgaggr'=>$row['maggri']);
}

}*/
echo json_encode(array('result'=>$output));

?>