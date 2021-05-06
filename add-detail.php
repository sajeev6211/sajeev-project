
<?php
include "header.php";
?>
<div class="container">
  <h2>Add Employee</h2>  
  <a href ="/sajeev-project/dashboard.php"><button>Dashboard</button></a>
<form method="post" class="form-horizontal" name="registration" action="/sajeev-project/dashboard.php">

 <div class="form-group">
      <label class="control-label col-sm-2" for="email">Employee Code:</label>
      <div class="col-sm-6">
        <input type="text" class="form-control" id="employeecode" placeholder="Enter Your Employe Code" name="employeecode">
      </div>
    </div>
	
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Name:</label>
      <div class="col-sm-6">
        <input type="text" class="form-control" id="name" placeholder="Enter Your Name" name="name">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Department:</label>
      <div class="col-sm-6">          
        <input type="text" class="form-control" id="department" placeholder="Enter Department" name="department">
      </div>
    </div>
	
	<div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Date Of Birth:</label>
      <div class="col-sm-6">          
        <input type="date" class="form-control" id="dob" placeholder="Enter Date of birth" name="dob" max="<?php echo date('Y-m-d'); ?>">
      </div>
    </div>
	
	<div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Date Of Join:</label>
      <div class="col-sm-6">          
        <input type="date" class="form-control" id="joindate" placeholder="Enter Date of join" name="joindate" max="<?php echo date('Y-m-d'); ?>">
      </div>
    </div>
   
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default">Submit</button>
      </div>
    </div>
  </form>
  </div>
  <?php
include "footer.php";
?>