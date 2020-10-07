<?php 

  require_once 'add-student-class.php';
  
  $queryResult='';
  $massage='';

  $id=$_GET['id'];
  $student=new Student();
  $queryResult=$student->editStudentInfo($id);
  $student=mysqli_fetch_assoc($queryResult); // var amar iccha



  if (isset($_POST['btn'])) {
  	   $student=new Student();
  	   // $queryResult=$student->updateStudentInfo($_POST,$id);
  	   $massage=$student->updateStudentInfo($_POST);
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
			<td>
				<input type="text" name="name" value="<?php echo $student['name']; ?>">
				<input type="hidden" name="id" value="<?php echo $student['id']; ?>">
			</td>
		</tr>
		<tr>
			<th>Email</th>
			<td><input type="email" name="email" value="<?php echo $student['email']; ?>"></td>
		</tr>
		<tr>
			<th>Mobile</th>
			<td><input type="number" name="mobile" value="<?php echo $student['mobile']; ?>"></td>
		</tr>
		<tr>
			<th></th>
			<td><input type="submit" name="btn" value="Update"></td>
		</tr>
	</table>
</form>