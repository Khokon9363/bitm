<?php 

  echo "<pre>";
//   var_dump($_POST);

//   print_r($_POST);

//   echo $_POST["first_name"]."<br>";
//   echo $_POST["last_name"];

//   $firstName=$_POST["first_name"];
//   $lastName=$_POST["last_name"];
//   $fullName=$firstName.' '.$lastName;
//   echo $fullName;

//     $x="Rahim";
//     $x=100;
//     echo isset($x);

// isset holo akta call in function .
// er man thakle 1 = true
// man na thakle 0 = false


//   print_r($_POST);
//   echo isset($_POST['submit']);

//   if (isset($_POST["submit"])) {
//   	   echo "<h1>"."Hello"."</h1>";
//   } else {
//   	   echo "<h1>"."Hay"."</h1>";
//   }





  if (isset($_POST["submit"])) {
  	   $firstName=$_POST["first_name"];
  	   $lastName=$_POST["last_name"];
  	   $fullName=$firstName.' '.$lastName;
  	   echo $fullName;
  }



  $result=' ';

  if (isset($_POST['submit'])) {
  	   require_once 'data_in_input_class.php';
  	   $fullName=new FullName();
  	   $result=$fullName->makeFullName($_POST['first_name'], $_POST['last_name']);
      }
  


 ?>

    <title>Data Submit from Form</title>
<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
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
		<td><input type="text" name="full_name" value="<?php echo $result; ?>"></td>
	</tr>
	<tr>
		<th></th>
		<td><input type="submit" name="submit" value="Submit"></td>
	</tr>
</table>
</form>