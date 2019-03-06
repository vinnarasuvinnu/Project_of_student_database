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
    		// `ano`, `name`, `sex`, `Community`, `Bank`, `joindate`, `amount`

		 $('#save_value').click(function(){

      $('#mydoc').empty();

        var val = [];
        $(':checkbox:checked').each(function(i){
          val[i] = $(this).val();
        });



        $.ajax({
   type: "POST",
   data: {arr:val},
   url: "newmech.php",
   success: function(data){
   	console.log(data);
   	var data=JSON.parse(data);
   	data=data.result;
   	console.log(data);
   	$.each(data,function(key,value){


   		$.each(value,function(k1,v1){

   			if(v1.name != undefined){

   			$('#mydoc').append("<div class='row'><div class='col-md-6 text-center'>Name</div><div class='col-md-6 text-center'>"+v1.name+"</div></div>");
   		}



   			if(v1.ano != undefined){

   			$('#mydoc').append("<div class='row'><div class='col-md-6 text-center'>Admission number</div><div class='col-md-6 text-center'>"+v1.ano+"</div></div>");
   		}
   			

   	
   		if(v1.sex != undefined){

   			$('#mydoc').append("<div class='row'><div class='col-md-6 text-center'>Gender</div><div class='col-md-6 text-center'>"+v1.sex+"</div></div>");
   		}



   		if(v1.Community != undefined){

   			$('#mydoc').append("<div class='row'><div class='col-md-6 text-center'>Community</div><div class='col-md-6 text-center'>"+v1.Community+"</div></div>");
   		}




   		if(v1.joindate != undefined){

   			$('#mydoc').append("<div class='row'><div class='col-md-6 text-center'>Join of date</div><div class='col-md-6 text-center'>"+v1.joindate+"</div></div>");
   		}

   			if(v1.Bank != undefined){

   			$('#mydoc').append("<div class='row'><div class='col-md-6 text-center'>Bank</div><div class='col-md-6 text-center'>"+v1.Bank+"</div></div>");
   		}


   			if(v1.amount != undefined){

   			$('#mydoc').append("<div class='row'><div class='col-md-6 text-center'>Amount</div><div class='col-md-6 text-center'>"+v1.amount+"</div></div>");
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


Amount:

<input name="selector[]" id="ad_Checkbox4" class="ads_Checkbox" type="checkbox" value="amount" />
</div>

 
    	<div class="col-md-3">

Name:

<input name="selector[]" id="ad_Checkbox4" class="ads_Checkbox" type="checkbox" value="name" />
</div>
    	<div class="col-md-3">

Gender:
<input name="selector[]" id="ad_Checkbox4" class="ads_Checkbox" type="checkbox" value="sex" />
</div>

    	<div class="col-md-3">


Community:

<input name="selector[]" id="ad_Checkbox4" class="ads_Checkbox" type="checkbox" value="com" />
</div>

	<div class="col-md-3">


Bank:

<input name="selector[]" id="ad_Checkbox4" class="ads_Checkbox" type="checkbox" value="Bank" />
</div>



    	<div class="col-md-3">


Join Date:

<input name="selector[]" id="ad_Checkbox4" class="ads_Checkbox" type="checkbox" value="joindate" />
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