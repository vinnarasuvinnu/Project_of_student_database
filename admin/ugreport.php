<!DOCTYPE html>
<html>
<head>

	<title></title>
	    <!-- styles -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/dataTables.jqueryui.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.jqueryui.min.js"></script>
<style type="text/css">
  
    tfoot input {
        width: 100px;
        padding: 10px;
    }
      input[type=button]{
        margin-right: 10px;

      }
        input[type=button]{
                    margin-right: 10px;


        }
        h3{
            color: white;
        }
</style>
<script type="text/javascript">
	$(document).ready(function(){

		 $('#save_value').click(function(){

      $('#mydoc').empty();

        var val = [];
        $(':checkbox:checked').each(function(i){
          val[i] = $(this).val();
        });



        $.ajax({
   type: "POST",
   data: {arr:val},
   url: "spec.php",
   success: function(data){
   	console.log(data);
   	var data=JSON.parse(data);
   	data=data.result;
   	console.log(data);
   	$.each(data,function(key,value){

/*`ano`, `year`, `degree`, `course1`, `dept1`, `med1`, `shift1`, `timing1`, `rno`, `name`, `gen1`, `com`, `dob`*/

   		$.each(value,function(k1,v1){

   			if(v1.name != undefined){

   			$('#mydoc').append("<div class='row'><div class='col-md-6 text-center'>Name</div><div class='col-md-6 text-center'>"+v1.name+"</div></div>");
   		}



   			if(v1.med1 != undefined){

   			$('#mydoc').append("<div class='row'><div class='col-md-6 text-center'>Medium</div><div class='col-md-6 text-center'>"+v1.med1+"</div></div>");
   		}

   			if(v1.ano != undefined){

   			$('#mydoc').append("<div class='row'><div class='col-md-6 text-center'>Admission number</div><div class='col-md-6 text-center'>"+v1.ano+"</div></div>");
   		}
   			if(v1.year != undefined){

   			$('#mydoc').append("<div class='row'><div class='col-md-6 text-center'>Year</div><div class='col-md-6 text-center'>"+v1.year+"</div></div>");
   		}


   		if(v1.degree != undefined){

   			$('#mydoc').append("<div class='row'><div class='col-md-6 text-center'>Degree</div><div class='col-md-6 text-center'>"+v1.degree+"</div></div>");
   		}


   		if(v1.course1 != undefined){

   			$('#mydoc').append("<div class='row'><div class='col-md-6 text-center'>Course</div><div class='col-md-6 text-center'>"+v1.course1+"</div></div>");
   		}

	if(v1.dept1 != undefined){

   			$('#mydoc').append("<div class='row'><div class='col-md-6 text-center'>Department</div><div class='col-md-6 text-center'>"+v1.dept1+"</div></div>");
   		}


if(v1.shift1 != undefined){

   			$('#mydoc').append("<div class='row'><div class='col-md-6 text-center'>Shift</div><div class='col-md-6 text-center'>"+v1.shift1+"</div></div>");
   		}


if(v1.timing1 != undefined){

   			$('#mydoc').append("<div class='row'><div class='col-md-6 text-center'>Timing</div><div class='col-md-6 text-center'>"+v1.timing1+"</div></div>");
   		}




if(v1.rno != undefined){

   			$('#mydoc').append("<div class='row'><div class='col-md-6 text-center'>Register no</div><div class='col-md-6 text-center'>"+v1.rno+"</div></div>");
   		}




   		if(v1.gen1 != undefined){

   			$('#mydoc').append("<div class='row'><div class='col-md-6 text-center'>Gender</div><div class='col-md-6 text-center'>"+v1.gen1+"</div></div>");
   		}



   		if(v1.com != undefined){

   			$('#mydoc').append("<div class='row'><div class='col-md-6 text-center'>Community</div><div class='col-md-6 text-center'>"+v1.com+"</div></div>");
   		}




   		if(v1.dob != undefined){

   			$('#mydoc').append("<div class='row'><div class='col-md-6 text-center'>Date of birth</div><div class='col-md-6 text-center'>"+v1.dob+"</div></div>");
   		}



   		})

   		   		$('#mydoc').append("<hr style='border:2px solid black'>");




});


   }
});

        console.log(val);
      });

		 $('#print').click(function(){
		 	window.print();
		 })



	})
</script>
</head>
<body style="background-color: grey">
	<!-- `ano`, `year`, `degree`, `course1`, `dept1`, `med1`, `shift1`, `timing1`, `rno`, `name`, `gen1`, `com`, `dob` -->

	<div class="container" style="background-color: white;margin-top: 20px;margin-bottom: 20px">
    <div>
       <h3 class="text-center" style="color:black;"> Please select option and click report</h3>
    </div>
    <div id="check">
    	<div class="row">
    	<div class="col-md-3">
    
    Admissin number:<input name="selector[]" id="ad_Checkbox1" class="ads_Checkbox" type="checkbox" value="ano" />
</div>
    	<div class="col-md-3">

    
    Year:
<input name="selector[]" id="ad_Checkbox2" class="ads_Checkbox" type="checkbox" value="year" />
</div>

    	<div class="col-md-3">

Degree:
<input name="selector[]" id="ad_Checkbox3" class="ads_Checkbox" type="checkbox" value="degree" />
</div>

    	<div class="col-md-3">

Course1:
<input name="selector[]" id="ad_Checkbox4" class="ads_Checkbox" type="checkbox" value="course1" />
</div>

    	<div class="col-md-3">

Department:

<input name="selector[]" id="ad_Checkbox4" class="ads_Checkbox" type="checkbox" value="dept1" />
</div>
    	<div class="col-md-3">

Medium:
<input name="selector[]" id="ad_Checkbox4" class="ads_Checkbox" type="checkbox" value="med1" />
</div>

    	<div class="col-md-3">


Shift:
<input name="selector[]" id="ad_Checkbox4" class="ads_Checkbox" type="checkbox" value="shift1" />
</div>

    	<div class="col-md-3">


Timing:

<input name="selector[]" id="ad_Checkbox4" class="ads_Checkbox" type="checkbox" value="timing1" />
</div>

    	<div class="col-md-3">

Register no:

<input name="selector[]" id="ad_Checkbox4" class="ads_Checkbox" type="checkbox" value="rno" />
</div>
    	<div class="col-md-3">

Name:

<input name="selector[]" id="ad_Checkbox4" class="ads_Checkbox" type="checkbox" value="name" />
</div>
    	<div class="col-md-3">

Gender:
<input name="selector[]" id="ad_Checkbox4" class="ads_Checkbox" type="checkbox" value="gen1" />
</div>

    	<div class="col-md-3">


Community:

<input name="selector[]" id="ad_Checkbox4" class="ads_Checkbox" type="checkbox" value="com" />
</div>
    	<div class="col-md-3">


Date of birth:

<input name="selector[]" id="ad_Checkbox4" class="ads_Checkbox" type="checkbox" value="dob" />
</div>
</div>

<div class="text-center">
<input type="submit" id="save_value" name="save_value" value="Report" class="btn btn-primary" style="margin-bottom: 30px" />
</div>
<div class="text-center">
<input type="submit" id="print" value="Print" class="btn btn-primary" style="margin-bottom: 20px">


</div>
</div>
<div id="mydoc">


	</div>
</div>

</body>
</html>