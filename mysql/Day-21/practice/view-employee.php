<?php 


  require_once 'employee-class.php';
  $queryResult='';

  $employee=new Employee();
  // $queryResult=$employee->viewEmployee($_POST);      same
  $queryResult=$employee->viewEmployee();        // view close


  $massage='';
  if (isset($_GET['delete'])) {

  	     $id=$_GET['id'];
  	     $employee=new Employee();
  	     $massage=$employee->deleteEmployee($id);     // delete close
  }
  



 ?>
<hr>
 <a href="add-employee.php">Add employee</a> ||
 <a href="view-employee.php">View Employee</a>
<hr>
  <h1 style="color: red;"><?php echo $massage; ?></h1>
<hr>

<form action="" method="post">
	<table border="1" width="700" style="margin:auto;">
		<tr>
			<th>Id</th>
			<th>Name</th>
			<th>Email</th>
			<th>Mobile</th>
			<th>Action</th>
		</tr>
 <?php while ($employee=mysqli_fetch_assoc($queryResult)) { ?>    <!--    IMPORTANT > View part    -->  
		<tr>
			<td><?php echo $employee['id']; ?></td>
			<td><?php echo $employee['name']; ?></td>
			<td><?php echo $employee['email']; ?></td>
			<td><?php echo $employee['mobile']; ?></td>
			<td>
<!-- IMP -->    <a href="edit-employee.php?id=<?php echo $employee['id']; ?>php">Edit</a> <!-- Edit part > click korle vitore jabe id onujayi  -->
<!-- IMP -->    <a href="?delete=true&id=<?php echo $employee['id']; ?>" onclick="return confirm('Are you sure to delete this information permanently ?')">Delete</a>   <!--  Delete part -->
			</td>
		</tr>
 <?php } ?>
	</table>
</form>