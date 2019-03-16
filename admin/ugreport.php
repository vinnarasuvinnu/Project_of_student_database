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

        else if("med1" == val[i]){

          titleval="Medium";
         }

       else if("ano"==val[i]){

        titleval="Admission number"
        }
        else if("year" ==val[i]){
          titleval="Year";
        
        }


      else if("degree" == val[i]){
        titleval="Degree";
      }
      else if("course1" == val[i]){
        titleval="Course" 
      }
      else if("dept1" == val[i]){
        titleval="Department"; 
      }
      else if("shift1" == val[i]){
        titleval="Shift"; 
      }


else if("timing1" == val[i]){

        titleval="Timing";
      }




else if("rno" == val[i]){

    titleval="Roll no"      
      }




     else if("gen1" == val[i]){
      titleval="Gender";
        
      }



      else if("com" == val[i]){
        titleval="Community";

      
      }

      else{
        titleval="Date of birth";
        
      }


















            content=content+"<div class='col-md-2' style='font-weight:bold'>"+titleval+"</div>";


           }
           $('#textbody').append("<div class='row'>"+content+"</div><hr>");









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

        content="";


      $.each(value,function(k1,v1){
        if(v1.name != undefined){

        content=content+"<div class='col-md-2'>"+v1.name+"</div>";
      }



        if(v1.med1 != undefined){

     
                content=content+"<div class='col-md-2'>"+v1.med1+"</div>";

      }

        if(v1.ano != undefined){

        
                content=content+"<div class='col-md-2'>"+v1.ano+"</div>";

      }
        if(v1.year != undefined){


                content=content+"<div class='col-md-2'>"+v1.year+"</div>";

      }


      if(v1.degree != undefined){

       
                content=content+"<div class='col-md-2'>"+v1.degree+"</div>";

      }


      if(v1.course1 != undefined){

     
                content=content+"<div class='col-md-2'>"+v1.course1+"</div>";

      }

  if(v1.dept1 != undefined){

       
                content=content+"<div class='col-md-2'>"+v1.dept1+"</div>";

      }


if(v1.shift1 != undefined){

             content=content+"<div class='col-md-2'>"+v1.shift1+"</div>";

      }


if(v1.timing1 != undefined){

               content=content+"<div class='col-md-2'>"+v1.timing1+"</div>";

      }




if(v1.rno != undefined){

               content=content+"<div class='col-md-2'>"+v1.rno+"</div>";

      }




      if(v1.gen1 != undefined){

               content=content+"<div class='col-md-2'>"+v1.gen1+"</div>";

      }



      if(v1.com != undefined){

              content=content+"<div class='col-md-2'>"+v1.com+"</div>";

      }




      if(v1.dob != undefined){
                content=content+"<div class='col-md-2'>"+v1.dob+"</div>";

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