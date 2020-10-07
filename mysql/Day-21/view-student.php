<?php 

   require_once 'add-student-class.php';
   
   $queryResult='';
   $massage='';
  	   
   $student=new Student();
   $queryResult=$student->viewStudentInfo();


   
   // $student->deleteStudentInfo();

     if (isset($_GET['delete'])) {
   	    $id=$_GET['id'];    
   	    $student=new Student();
   	    $massage=$student->deleteStudentInfo($id);
   }

   



 ?>

 <hr>
 <h1 style="color: red;"><?php echo $massage; ?></h1>


<hr>
<a href="add-student.php">Add Student</a> ||
<a href="view-student.php">View Student</a>
<hr>


<table border="1" width="700">
	<tr>
		<th>Student Id</th>
		<th>Student Name</th>
		<th>Student Email</th>
		<th>Student Mobile</th>
		<th>Action</th>
	</tr>
  <?php while ($student= mysqli_fetch_assoc($queryResult)) { ?>
	<tr>
		<td><?php echo $student['id']; ?></td>
		<td><?php echo $student['name']; ?></td>
		<td><?php echo $student['email']; ?></td>
		<td><?php echo $student['mobile']; ?></td>
		<td>
			<a href="edit-student.php?id=<?php echo $student['id']; ?>">Edit</a>
			<a href="?delete=true&id=<?php echo $student['id']; ?>" onclick="return confirm('Are you sure to delete this !!')">Delete</a>
		</td>
	</tr>
  <?php } ?>
</table>


<h3 contenteditable="true">This is a editable tag (contenteditable)</h3>