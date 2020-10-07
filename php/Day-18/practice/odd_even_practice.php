<?php 

   $res='';
   $firstNumber=$_POST['first_number'];
   $lastNumber=$_POST['last_number'];
 if (isset($_POST['btn'])) {

 	require_once 'odd_even_class_practice.php';
 	$OddEven=new oddEven();
 	$res=$OddEven->makeOddEven();
 	
 }


 ?>

<form action="" method="post">
	<table border="1" style="border-collapse: collapse;">
		<tr>
			<th>First Number</th>
			<td><input type="text" name="first_number" value="<?php echo $firstNumber; ?>"></td>
		</tr>
		<tr>
			<th>Last Number</th>
			<td><input type="text" name="last_number" value="<?php echo $lastNumber; ?>"></td>
		</tr>
		<tr>
			<th>ODD / EVEN</th>
			<td>
				<input type="radio" name="check" value="Odd">ODD
				<input type="radio" name="check" value="Even">EVEN
			</td>
		</tr>
		<tr>
			<th>Result</th>
			<td><textarea rows="5" cols="30">
				<?php echo $res; ?>
			</textarea></td>
		</tr>
		<tr>
			<th></th>
			<td><input type="submit" name="btn" value="Submit"></td>
		</tr>
	</table>
</form>
