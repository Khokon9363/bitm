<?php

echo "<pre>";
// var_dump($_POST);

// print_r($_POST);

// echo $_POST['first_name'].'<br>';
// echo $_POST['last_name'];

// $FirstName=$_POST['first_name'];
// $LastName=$_POST['last_name'];
// $FullName=$FirstName.' '.$LastName;
// echo $FullName;

// print_r($_POST);
// echo isset($_POST['btn']);

// if (isset($_POST['btn'])) {
// 	echo "<h1> Hello </h1>";
// } else {
// 	echo "<h1> Hey </h1>
// 	";
// }



if (isset($_POST['btn'])) {
	$firstName=$_POST['first_name'];
	$lastName=$_POST['last_name'];
	$fullName=$firstName.' '.$lastName;
	 echo $fullName;
}



  $result='';

if (isset($_POST['btn'])) {
     require_once 'data_in_input_class_practice.php';

	 $FirstName=new FullNamePractice();
	 $result=$FirstName->makeFullName($_POST['first_name'],$_POST['last_name']);
}






?>

<title>Input</title>
<form action="" method="post">
	<table>
		<tr>
			<th>First Name</th>
			<td><input type="text" name="first_name"></td>
		</tr>
		<tr>
			<th>Last Name</th>
			<td><input type="text" name="last_name"></td>
		</tr>
		<tr>
			<th>Full Name</th>
			<td><input type="text" name="full_name" value="<?php echo $result ?>"></td>
		</tr>
		<tr>
			<th></th>
			<td><input type="submit" name="btn"></td>
		</tr>
	</table>
</form>