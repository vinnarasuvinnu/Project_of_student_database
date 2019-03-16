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
  
      @media print
{
  #footer {
    display: block; 
    position: fixed; 
    bottom: 0;
  } 
}
@page { margin: 0; }

td{
  color: black;
}

</style>
<script type="text/javascript">
	$(document).ready(function(){
    		// `ano`, `name`, `sex`, `Community`, `Bank`, `joindate`, `amount`
           $('#save_value').click(function(){


		 $('#textbody').empty();
        var val = [];
        $(':checkbox:checked').each(function(i){
          val[i] = $(this).val();
        });

        var content="";

           for(var i=0;i<val.length;i++){


            titleval="";


        

        if("name"==val[i]){

          titleval="Name";
        }

      
       else if("ano"==val[i]){

        titleval="Admission number"
        }
        else if("year" ==val[i]){
          titleval="Year";
        
        }


      else if("sex" == val[i]){
        titleval="Gender";
      }
      else if("Community" == val[i]){
        titleval="Community" 
      }
      else if("joindate" == val[i]){
        titleval="Join_date"; 
      }
      else if("Bank" == val[i]){
        titleval="Bank"; 
      }


else if("amount" == val[i]){

        titleval="Amount";
      }



            content=content+"<div class='col-md-2' style='font-weight:bold'>"+titleval+"</div>";


           }
           $('#textbody').append("<div class='row'>"+content+"</div><hr>");




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

content="";

   		$.each(value,function(k1,v1){

   			if(v1.name != undefined){

   		        content=content+"<div class='col-md-2'>"+v1.name+"</div>";

   		}



   			if(v1.ano != undefined){

   			        content=content+"<div class='col-md-2'>"+v1.ano+"</div>";

   		}
   			

   	
   		if(v1.sex != undefined){

   		        content=content+"<div class='col-md-2'>"+v1.sex+"</div>";

   		}



   		if(v1.Community != undefined){

   		        content=content+"<div class='col-md-2'>"+v1.Community+"</div>";

   		}




   		if(v1.joindate != undefined){

   		        content=content+"<div class='col-md-2'>"+v1.joindate+"</div>";

   		}

   			if(v1.Bank != undefined){

   		        content=content+"<div class='col-md-2'>"+v1.Bank+"</div>";

   		}


   			if(v1.amount != undefined){

   		        content=content+"<div class='col-md-2'>"+v1.amount+"</div>";

   		}




   		})

           $('#textbody').append("<div class='row'>"+content+"</div><hr>");




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

<input name="selector[]" id="ad_Checkbox4" class="ads_Checkbox" type="checkbox" value="Community" />
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
 
  <table border="0" width="100%"> 
   <thead> 
    <tr> 
     <th style="width:100%" class="text-center">Govt Arts College</th> 
   </tr> 
   <tr> 
    <th><hr style="color:#000080"/></th> 
   </tr> 
  </thead> 
  <tfoot>
   <tr> 
    <td width="100%"> 
     <table width="100%" border="0"> 
       <tr> 
         <td colspan="4"><br>&nbsp;</td> 
      </tr> 
    </table> 
  </tfoot>
  <tbody id="textbody"> 
 
 </tbody> 
</table>


<table id="footer" width="100%"> 
  <tr> 
  <td style="width: 100%" class="text-center"> 
    Dharmapuri
  </td>
  </tr>
</table>

	</div>
</div>

</body>
</html>