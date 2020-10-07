<?php 

     $result=[];
     $result['wordlength']='';
     $result['characterlength']='';

  if (isset($_POST['btn'])) {

  	    require_once 'character_word_counter_class_practice.php';

  	    $characterWord=new CharacterWord();
  	    $result=$characterWord->makeCharacterWord($_POST);
  }


 ?>

 <form action="" method="post">
 	<table>
 		<tr>
 			<th>Input a string</th>
 			<td><input type="text" name="input" size="50" value="<?php echo $_POST['input']; ?>"></td>
 		</tr>
 		<tr>
 			<th>Number of Word</th>
 			<td><input type="text" value="<?php echo $result['wordlength']; ?>"></td>
 		</tr>
 		<tr>
 			<th>Number of Characters</th>
 			<td><input type="text" value="<?php echo $result['characterlength']; ?>"></td>
 		</tr>
 		<tr>
 			<th></th>
 			<td><input type="submit" name="btn" value="Submit"></td>
 		</tr>
 	</table>
 </form>