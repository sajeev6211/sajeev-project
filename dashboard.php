<?php
include "header.php";
include "function.php";


if(isset($_POST) && !empty($_POST))
{
	if(isset($_FILES) && !empty($_FILES))
	{
	
	$fileName = $_FILES["csvfile"]["tmp_name"];
    
    if ($_FILES["csvfile"]["size"] > 0) {
        
    $file = fopen($fileName, "r");
    $column_num = count(fgetcsv($file, 10000, ","));
	$csvFile = file($fileName);
    $data = [];
    foreach ($csvFile as $line) {
        $data[] = str_getcsv($line);
    }
	$row_num = count($data);
	if($row_num < 5 || $column_num > 20)
	{
		echo "File must have minimum 5 coloums and maximum 20 rows";
		
	}
	else
	{
		$row_no = 1;
        while (($column = fgetcsv($file, 10000, ",")) !== FALSE) {
			$employeecoloum = $_POST['employeecoloum'];
			$namecoloum = $_POST['namecoloum'];
			$departmentcoloum = $_POST['departmentcoloum'];
			$dobcoloum = $_POST['dobcoloum'];
			$joindatecoloum = $_POST['joindatecoloum'];
			$column_num_val = count(fgetcsv($file, 10000, ",")) - 1;
			$col_validate = validate($_POST,$column_num_val);
			if($col_validate != "" )
			{
				echo "<div class='main-error'>Import fail! Coloum number is wrong in <b>".$col_validate."</b></div>";
				break;
			}
			
			else if(empty($column[$employeecoloum]) || empty($column[$namecoloum]) || empty($column[$departmentcoloum]) || empty($column[$dobcoloum]) || empty($column[$joindatecoloum])){
	
			echo "<div class='main-error'>Import failed for row <b>'".$row_no."'</b> because of empty coloumn ! </div>";
			}
			else
			{
			
			$sql_csv = "INSERT INTO details (employeecode, name, department,dob,joindate)
VALUES ('".$column[$employeecoloum]."', '".$column[$namecoloum]."', '".$column[$departmentcoloum]."','".$column[$dobcoloum]."','".$column[$joindatecoloum]."')";

			if ($con->query($sql_csv) === TRUE) {
			  //echo "Employee details imported successfully";
			} else {
			  //echo "Error: " . $sql . "<br>" . $con->error;
			}
			}
			
			$row_no = $row_no+1;
        
        }
	}
    }
}

else
{
	$employeecode = $_POST['employeecode'];
	$name = $_POST['name'];
	$department = $_POST['department'];
	$dob = $_POST['dob'];
	$joindate = $_POST['joindate'];
	$sql = "INSERT INTO details (employeecode, name, department,dob,joindate)
VALUES ('".$employeecode."', '".$name."', '".$department."','".$dob."','".$joindate."')";

if ($con->query($sql) === TRUE) {
  echo "<div class='main-success'>Employee details added successfully</div>";
} else {
  echo "Error: " . $sql . "<br>" . $con->error;
}

	
}
	
}

?>

<div class="container">
  <h2>Employees List</h2>
<a href ="/sajeev-project/csv.php"><button>Upload CSV</button></a>
<a href ="/sajeev-project/add-detail.php"><button>Add Details</button> </a>
<br/><br/>
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Employee Code</th>
        <th>Employee Name</th>
        <th>Department</th>
		<th>Age</th>
		<th>Experience in the organization</th>
      </tr>
    </thead>
    <tbody>
	 <?php
  $details = "select * from details";
  $details_data = $con->query($details);
if ($details_data->num_rows > 0) {
    while($employeedetail = $details_data->fetch_assoc()) {
		
	$date_dob = date('Y-m-d',strtotime($employeedetail['dob']));
	$dob_year = new DateTime($date_dob);
	$today   = new DateTime('today');
	$age = $dob_year->diff($today)->y;
	
	$date_join = date('Y-m-d',strtotime($employeedetail['joindate']));
	$join_year = new DateTime($date_join);
	$today_join   = new DateTime('today');
	$experiance_data = $join_year->diff($today_join);   
	$experiance =  $experiance_data->format('%y years %m months');
  ?>
      <tr>
        <td><?php echo $employeedetail['employeecode'];?></td>
       <td><?php echo $employeedetail['name'];?></td>
        <td><?php echo $employeedetail['department'];?></td>
		<td><?php echo $age;?></td>
		<td><?php echo $experiance;?></td>
      </tr>
   <?php
	}
}
?>
    </tbody>
  </table>
</div>

<?php
include "footer.php";
?>
