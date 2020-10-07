<?php 
   
   require_once 'add-student-class-practice.php';
   
   $massage='';

   if (isset($_POST['btn'])) {
   	    $employee=new Employee();
   	    $massage=$employee->AddEmployeeInfo($_POST);
   }
   


 ?>


<h1 style="color: red;"><?php echo $massage; ?></h1>

<hr>
<a href="add-student-practice.php">Add Student</a> ||
<a href="view-student-practice.php">View Student</a>
<hr>

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