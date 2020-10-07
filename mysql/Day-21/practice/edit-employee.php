<?php 
  
  require_once 'employee-class.php';
  $queryResult='';
  
  $id=$_GET['id'];
  $employee=new Employee();
  $queryResult=$employee->editEmployee($id);
  $employee=mysqli_fetch_assoc($queryResult);   // edit close


  $massage='';
  if (isset($_POST['btn'])) {
  	    
  	    $employee=new Employee();
  	    // $employee->updateEmployee($_POST,$id);   // same
  	    $massage=$employee->updateEmployee($_POST);   // update close
  }



 ?>

<hr>
 <a href="add-employee.php">Add employee</a> ||
 <a href="view-employee.php">View Employee</a>
<hr>
 <h1 style="color: red;"><?php echo $massage; ?></h1>
 <hr>

<form action="" method="post">
	<table>
		<tr>
			<th>Name</th>
			<td>
<!-- IMP -->    <input type="text" name="name" value="<?php echo $employee['name']; ?>">
<!-- IMP -->    <input type="hidden" name="id" value="<?php echo $employee['id']; ?>">  <!-- name r value id must   >    Edit part   -->
			</td>
		</tr>
		<tr>
			<th>Email</th>
<!-- IMP --><td><input type="email" name="email" value="<?php echo $employee['email']; ?>"></td>
		</tr>
		<tr>
			<th>Mobile</th>
<!-- IMP --><td><input type="text" name="mobile" value="<?php echo $employee['mobile']; ?>"></td>
		</tr>
		<tr>
			<th></th>
			<td><input type="submit" name="btn" value="Update"></td>
		</tr>
	</table>
</form>