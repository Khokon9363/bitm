<?php 

  require_once 'add-student-class.php';
  
  $massage='';

  if (isset($_POST['btn'])) {
  	   
  	   $student=new Student();
  	   $massage=$student->saveStudentInfo($_POST);
  }




 ?>




<hr>
<a href="add-student.php">Add Student</a> ||
<a href="view-student.php">View Student</a>

 <h1 style="color: red;"><?php echo $massage; ?></h1>
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