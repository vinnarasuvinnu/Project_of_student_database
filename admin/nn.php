<!DOCTYPE html>
<html>
<head>
  <title></title>

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
<body>

</body>
</html>