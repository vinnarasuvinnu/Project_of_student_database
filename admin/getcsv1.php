<?php

include('../db.php');


	$fileName = $_FILES["file"]["tmp_name"];
    
    if ($_FILES["file"]["size"] > 0) {
        
        $file = fopen($fileName, "r");
        $count=0;
        while (($column = fgetcsv($file, 10000, ",")) !== FALSE) {
        	$count++;
        	if($count>1){

        	$q1="INSERT INTO `priya`.`userinfo` (`ano`, `year`, `degree`, `course1`, `dept1`, `med1`, `shift1`, `timing1`, `rno`, `name`, `gen1`, `com`, `dob`) VALUES ('$column[7]', '$column[1]', '$column[2]', '$column[3]', 'null', '$column[4]', '$column[5]', 'null', '$column[6]', '$column[8]', '$column[9]', '$column[10]', '$column[12]');";
        	$res=mysqli_query($db,$q1);
        }

        
        }
        	echo '<script>alert("successfully added");location.href="index.php";</script>';

    }
else{
	        	echo '<script>alert("file not valid");location.href="index.php";</script>';

}


		?>