 <?php
include "header.php";
?>

		
			<div class="container">
  <h2>Upload CSV</h2>  
  <a href ="/sajeev-project/dashboard.php"><button>Dashboard</button></a>
<form method="post" class="form-horizontal" name="csvimport" id="csvimport" enctype="multipart/form-data" action="/sajeev-project/dashboard.php">

<div id="csvupload">
 <div class="form-group">
      <label class="control-label col-sm-2" for="email">Choose a csv:</label>
      <div class="col-sm-6">
        <input type="file" class="form-control" id="csvfile" name="csvfile" accept=".csv">
		<div id="fileerror"></div>
      </div>
	  
    </div>
    </div>

<div id="csvrow" style="display:none">
<p> please specify which columns correspond to Name, Employee code, Department, Date of Birth and Joining Date. </p>

<p> Important Notice : Coloumn number starts with 0 </p>

 <div class="form-group">
      <label class="control-label col-sm-2" for="email">Employee Code:</label>
      <div class="col-sm-2">
        <input type="text" class="form-control" id="employeecoloum" placeholder="Enter coloum Number" name="employeecoloum">
		<div id ="employeecoloum-error"></div>
      </div>
      </div>
	  
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Name:</label>
      <div class="col-sm-2">
        <input type="text" class="form-control" id="namecoloum" placeholder="Enter coloum Number" name="namecoloum">
		<div id ="namecoloum-error"></div>
      </div>
      </div>
	  
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Department:</label>
      <div class="col-sm-2">          
        <input type="text" class="form-control" id="departmentcoloum" placeholder="Enter coloum Number" name="departmentcoloum">
		<div id ="departmentcoloum-error"></div>
      </div>
    </div>
	
	<div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Date Of Birth:</label>
      <div class="col-sm-2">          
        <input type="text" class="form-control" id="dobcoloum" placeholder="Enter coloum Number" name="dobcoloum">
		<div id ="dobcoloum-error"></div>
      </div>
    </div>
	
	<div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Date Of Join:</label>
      <div class="col-sm-2">          
        <input type="text" class="form-control" id="joindatecoloum" placeholder="Enter coloum Number" name="joindatecoloum">
		<div id ="joindatecoloum-error"></div>
      </div>
    </div>
   </div>
   <div id="import">
   <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button id="importcsv" class="btn btn-default">Import</button>
      </div>
    </div>
    </div>
	<div id="upload" style="display:none">
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" id="submit-val" class="btn btn-default">Submit</button>
      </div>
    </div>
    </div>
	
  </form>
  </div>
			
			<?php
include "footer.php";
?>