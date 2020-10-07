<?php 

   require_once 'add-student-class.php';
   
   $queryResult='';
  	   
   $student=new Student();
   $queryResult=$student->viewStudentInfo();


 // while ($student= mysqli_fetch_assoc($queryResult)){
 // 	 echo "<pre>";
 //    print_r(queryResult);
 // }
   



 ?>

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
	</tr>
  <?php while ($student= mysqli_fetch_assoc($queryResult)) { ?>
	<tr>
		<td><?php echo $student['id']; ?></td>
		<td><?php echo $student['name']; ?></td>
		<td><?php echo $student['email']; ?></td>
		<td><?php echo $student['mobile']; ?></td>
	</tr>
  <?php } ?>
</table>