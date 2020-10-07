<?php 
      
      $result['wordLength']='';
      $result['characterLength']='';

  if (isset($_POST['btn'])) {
  	        
  	  require_once 'character_word_counter_class_practice-2.php';

  	  $wordCharacter=new WordCharacter();
  	  $result=$wordCharacter->makeWordCharacter($_POST);
  }


 ?>


<form action="" method="post">
	<table>
		<tr>
			<th>Input a String</th>
			<td><input type="text" name="input"></td>
		</tr>
		<tr>
			<th>Number of Word</th>
			<td><input type="text" value="<?php echo $result['wordLength'] ?>"></td>
		</tr>
		<tr>
			<th>Number of Character</th>
			<td><input type="text" value="<?php echo $result['characterLength']; ?>"></td>
		</tr>
		<tr>
			<th></th>
			<td><input type="submit" name="btn" value="Submit"></td>
		</tr>
	</table>
</form>