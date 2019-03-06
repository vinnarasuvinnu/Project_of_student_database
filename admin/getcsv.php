<?php

include('../db.php');


	$fileName = $_FILES["file"]["tmp_name"];
    
    if ($_FILES["file"]["size"] > 0) {
        
        $file = fopen($fileName, "r");
        $count=0;
        while (($column = fgetcsv($file, 10000, ",")) !== FALSE) {
        	$count++;
        	if($count>4){
        	$q1="INSERT INTO `priya`.`mphil` (`ano`, `name`, `sex`, `Community`, `Bank`, `joindate`, `amount`) VALUES ('$column[1]', '$column[2]', '$column[3]', '$column[4]', '$column[5]', '$column[6]', '$column[7]')";
        	$res=mysqli_query($db,$q1);
        }

        
        }
        	echo '<script>alert("successfully added");location.href="index.php";</script>';

    }
else{
	        	echo '<script>alert("file not valid");location.href="index.php";</script>';

}


		?>