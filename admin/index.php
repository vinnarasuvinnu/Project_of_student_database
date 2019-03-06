<?php
session_start();
if(!isset($_SESSION['uname'])){
	echo '<script>';
	echo 'alert("please login via login form");location.href="login.php"';
	echo '</script>';
}
?>
<!DOCTYPE html>
<html>
  <head>
    <title>admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <!-- styles -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

    <link href="css/styles.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/dataTables.jqueryui.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.jqueryui.min.js"></script>
<style type="text/css">
    body{
        background-image: url("../11.jpg");
    }
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
	$(document).ready(function() {
     $('#example tfoot th').each( function () {
        var title = $(this).text();
        $(this).html( '<input type="text" placeholder="Search '+title+'" />' );
    } );
 
    // DataTable
    var table = $('#example').DataTable();

 
    // Apply the search
    table.columns().every( function () {
        var that = this;
 
        $( 'input', this.footer() ).on( 'keyup change', function () {
            if ( that.search() !== this.value ) {
                that
                    .search("^" + $(this).val() + "$", true, false, true)
                    .draw();
            }
        } );
    } );






    $('#example2 tfoot th').each( function () {
        var title = $(this).text();
        $(this).html( '<input type="text" placeholder="Search '+title+'" />' );
    } );
 
    // DataTable
    var table = $('#example2').DataTable();
 
    // Apply the search
    table.columns().every( function () {
        var that = this;
 
        $( 'input', this.footer() ).on( 'keyup change', function () {
            if ( that.search() !== this.value ) {
                that
                    .search("^" + $(this).val() + "$", true, false, true)
                    .draw();
            }
        } );
    } );


       $('#all').click(function(){
          $('#ug input[type=checkbox]').prop('checked', true);


        })

         $('#dall').click(function(){
          $('#ug input[type=checkbox]').prop('checked', false);


        })

            $('#mall').click(function(){
          $('#mphil input[type=checkbox]').prop('checked', true);


        })

         $('#mdall').click(function(){
          $('#mphil input[type=checkbox]').prop('checked', false);


        })
   
} );
</script>
  </head>
  <body>
  	<div class="header" style="height: 70px;">
	     <div class="container">
	        <div class="row">
	           <div class="col-md-5">
	              <!-- Logo -->
	              <div class="logo">
	                 <h1><a href="index.html">Student Admin </a></h1>
	              </div>
               

	           </div>
	           <div class="col-md-5">
	              <div class="row">
	                <div class="col-lg-12">
	                  <div class="input-group form">
	                       <span class="input-group-btn">
	                       </span>
	                  </div>
	                </div>
	              </div>
	           </div>
	           <div class="col-md-2">
	              <div class="navbar navbar-inverse" role="banner">
	                  <nav class="collapse navbar-collapse bs-navbar-collapse navbar-right" role="navigation">
	                    <ul class="nav navbar-nav">
	                      <li class="dropdown">
	                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" style="color: white">My Account <b class="caret"></b></a>
	                        <ul class="dropdown-menu animated fadeInUp">
	                          <li><a href="profile.html" style="color: white">Profile</a></li>
	                          <li><a href="logout.php" style="color: white">Logout</a></li>
	                        </ul>
	                      </li>
	                    </ul>
	                  </nav>
	              </div>
	           </div>
	        </div>
	     </div>
	</div>

    <div class="page-content">
    	<div class="row">
		  <div class="col-md-4">
		  	<div class="sidebar content-box" style="display: block;">
                <ul class="nav">
                            <form class="form-group" action="change.php" method="post">
                   <!-- Main menu -->
                       
                                 <label>Find</label>
                                <input type="text" name="find" class="form-control" placeholder="1st year"><br>
                                 <label>Replace</label>
                                <input type="text" name="rplace" class="form-control" placeholder="2nd year"><br>
                                <input type="submit" value="submit" class="btn btn-primary">
                            </form>

                </ul>
             </div>

        <div class="sidebar content-box" style="display: block;">
                <ul class="nav">
                           <form class="form-horizontal" action="getcsv1.php" method="post" name="uploadCSV"
    enctype="multipart/form-data">
    <div class="input-row">
        <label class="col-md-4 control-label">Choose CSV file(UG) </label> <input
            type="file" name="file" id="file" accept=".csv">
        <input type="submit" id="submit" name="import"
            class="btn btn-primary">
        <br />

    </div>
    <div id="labelError"></div>
</form>

                </ul>
             </div>




                <div class="sidebar content-box" style="display: block;">
                <ul class="nav">
                           <form class="form-horizontal" action="getcsv.php" method="post" name="uploadCSV"
    enctype="multipart/form-data">
    <div class="input-row">
        <label class="col-md-4 control-label">Choose CSV file(PG) </label> <input
            type="file" name="file" id="file" accept=".csv">
        <input type="submit" id="submit" name="import"
            class="btn btn-primary">
        <br />

    </div>
    <div id="labelError"></div>
</form>

                </ul>
             </div>

                <div class="sidebar content-box" style="display: block;">
                <ul class="nav">
                            <form class="form-group" action="change.php" method="post">
                   <!-- Main menu -->
                       
                                 <label>Mphil student report:&nbsp;&nbsp;&nbsp;&nbsp;</label>
                              <a href="mphilreport.php">  <input type="button" value="mphil" class="btn btn-primary"></a><br>
                                <br>
                                <br>
                                <br>
                                 <label>UG/PG student report:</label>
                             <a href="ugreport.php">   <input type="button" value="UG/PG" class="btn btn-primary"></a><br>
                            </form>

                </ul>
             </div>



		  </div>
		  <div class="col-md-8">

<form action="deleteug.php" method="post" enctype="multipart/form-data" id="ug">
    

		  	<table id="example" class="display table-responsive" style="width:100%">
                <h3>PG/UG student</h3>
        <thead>
            <tr>
                                <th>select</th>

                <th>Serial number</th>
                <th>Admission number</th>
                <th>Year</th>
                <th>degree</th>
                <th>Course</th>
                <th>Department</th>

                	<th>Medium</th>
                <th>Shift</th>
                <th>Timing</th>
                <th>Roll no</th>
                <th>Name</th>
                <th>Gender</th>

                	<th>Community</th>
                <th>Date of birth</th>
            </tr>
                
        </thead>
        <tbody>
            <?php
include('../db.php');
$q1="select * from userinfo";
$res=mysqli_query($db,$q1);
$output=array();
if($res){

while($row=mysqli_fetch_array($res)){
        if($row['name'] != NULL){


    ?>

    <tr>
         <td><input type="checkbox" value="<?php echo $row['sno']; ?>" name="check[]"/></td>
        <td><?php echo $row['sno']; ?></td>
        <td><?php echo $row['ano']; ?></td>
        <td><?php echo $row['year']; ?></td>
        <td><?php echo $row['degree']; ?></td>
        <td><?php echo $row['course1']; ?></td>
        <td><?php echo $row['dept1']; ?></td>
        <td><?php echo $row['med1']; ?></td>
        <td><?php echo $row['shift1']; ?></td>
        <td><?php echo $row['timing1']; ?></td>
        <td><?php echo $row['rno']; ?></td>
        <td><?php echo $row['name']; ?></td>
        <td><?php echo $row['gen1']; ?></td>
        <td><?php echo $row['com']; ?></td>
        <td><?php echo $row['dob']; ?></td>

    </tr>
    <?php
}
}
}
?>

        </tbody>

         <tfoot>
            <tr>
                                <th>select</th>

      <th>Serial number</th>
                <th>Admission number</th>
                <th>Year</th>
                <th>degree</th>
                <th>Course</th>
                <th>Department</th>

                    <th>Medium</th>
                <th>Shift</th>
                <th>Timing</th>
                <th>Roll no</th>
                <th>Name</th>
                <th>Gender</th>

                    <th>Community</th>
                <th>Date of birth</th>
            </tr>
        </tfoot>


    </table>

		  	

<br>
          <div class="text-center">
                        <input type="button" class="btn btn-primary" id="all" value="Check all">
                            <input type="button" class="btn btn-primary" id="dall" value="Deselect all">
                            <input type="submit" value="Delete selected" class="btn btn-primary">

                  
                      </div>    </form>



<form action="mphildelete.php" method="post" enctype="multipart/form-data" id="mphil">

            <table id="example2" class="display table-responsive" style="width:100%">
                <h3>Mphil student</h3>

        <thead>
            <tr>
                                <th>select</th>

                <th>Admission number</th>
                <th>Name</th>

                <th>Gender</th>
         <th>Community</th>

                <th>Bank</th>
                <th>Date of joing </th>

                <th>Amount</th>
            </tr>
                
        </thead>
        <tbody>
            <?php
include('../db.php');
$q1="select * from mphil";
$res=mysqli_query($db,$q1);
$output=array();
if($res){

while($row=mysqli_fetch_array($res)){
    if($row['name'] != NULL){

    ?>

    <tr>
         <td><input type="checkbox" value="<?php echo $row['mid']; ?>" name="check[]"/></td>
        <td><?php echo $row['ano']; ?></td>
        <td><?php echo $row['name']; ?></td>
        <td><?php echo $row['sex']; ?></td>
        <td><?php echo $row['Community']; ?></td>
        <td><?php echo $row['Bank']; ?></td>
        <td><?php echo $row['joindate']; ?></td>
        <td><?php echo $row['amount']; ?></td>
        

    </tr>
    <?php
}
}
}
?>

        </tbody>
        <tfoot>
                            <th>select</th>

             <th>Admission number</th>
                <th>Name</th>

                <th>Gender</th>
         <th>Community</th>

                <th>Bank</th>
                <th>Date of joing </th>

                <th>Amount</th>
        </tfoot>

   

    </table>

 <br>
          <div class="text-center">
                        <input type="button" class="btn btn-primary" id="mall" value="Check all">
                            <input type="button" class="btn btn-primary" id="mdall" value="Deselect all">

                                              <input type="submit" value="Delete selected" class="btn btn-primary">

                      </div></form><br>


		  </div>
		</div>
    </div>

    <footer>
         <div class="container">
         
            <div class="copy text-center">
               Copyright 2014 <a href='#'>Website</a>
            </div>
            
         </div>
      </footer>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->

  </body>
</html>