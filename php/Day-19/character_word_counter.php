<?php 
  
     $result['word_length']='';
     $result['string_length']='';

  if (isset($_POST['btn'])) {
  	  require_once 'character_word_counter_class.php';
  	  $characterWord=new CharacterWord();
  	  $result=$characterWord->makeCharacterWord($_POST);

  }






 ?>


<form action="" method="post">
	<table>
		<tr>
			<th>Enter a String</th>
			<td><input type="text" name="entered_string" size="50"></td>
		</tr>
		<tr>
			<th>Number of word</th>
			<td><input type="text" name="" value="<?php echo $result['word_length']; ?>"></td>
		</tr>
		<tr>
			<th>Number of letter</th>
			<td><input type="text" name="" value="<?php echo $result['string_length']; ?>"></td>
		</tr>
		<tr>
			<th></th>
			<td><input type="submit" name="btn"></td>
		</tr>
	</table>
</form>