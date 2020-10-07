<?php 

 require_once 'employee-class.php';
 $massage='';

if (isset($_POST['btn'])) {
	
	 $employee=new Employee();
     $massage=$employee->addEmployee($_POST);   // Add close
}



 ?>
<hr>
 <a href="add-employee.php">Add employee</a> ||
 <a href="view-employee.php">View Employee</a>
<hr>

<h1 style="color: seagreen;"><?php echo $massage; ?></h1>

<form action="" method="post">
	<table>
		<tr>
			<th>Name</th>
			<td><input type="text" name="name"></td>
		</tr>
		<tr>
			<th>Email</th>
			<td><input type="email" name="email"></td>
		</tr>
		<tr>
			<th>Mobile</th>
			<td><input type="number" name="mobile"></td>
		</tr>
		<tr>
			<th></th>
			<td><input type="submit" name="btn" value="Submit"></td>
		</tr>
	</table>
</form>

  <h3 contenteditable="true">ContentEditable = " true "</h3>