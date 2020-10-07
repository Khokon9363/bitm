<?php 
   
   require_once 'add-student-class-practice.php';
   
   $queryResult='';

   $employee=new Employee();
   $queryResult=$employee->ViewEmployeeInfo();

   


 ?>



<hr>
<a href="add-student-practice.php">Add Student</a> ||
<a href="view-student-practice.php">View Student</a>
<hr>

<form action="" method="post">
	<table border="1" width="700">
		<tr>
			<th>Id</th>
			<th>Name</th>
			<th>Email</th>
			<th>Mobile</th>
		</tr>
 <?php while ($employee= mysqli_fetch_assoc($queryResult)) { ?>
		<tr>
			<td><?php echo $employee['id']; ?></td>
			<td><?php echo $employee['name']; ?></td>
			<td><?php echo $employee['email']; ?></td>
			<td><?php echo $employee['mobile']; ?></td>
		</tr>
 <?php } ?>
	</table>
</form>