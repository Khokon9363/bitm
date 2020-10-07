<?php 
    
    $res1='';
    $res2='';
   require_once 'character_word_counter_class_practice-3.php';

   if (isset($_POST['btn'])) {
   	    
   	  $characterWord=new CharacterWord();
   	  $res1=$characterWord->makeCharacterWord1($_POST);
   	  $res2=$characterWord->makeCharacterWord2($_POST);
   }



 ?>



<form action="" method="post">
 	<table>
 		<tr>
 			<th>Input a string</th>
 			<td><input type="text" name="input" size="50"></td>
 		</tr>
 		<tr>
 			<th>Number of Word</th>
 			<td><input type="text" value="<?php echo $res1; ?>"></td>
 		</tr>
 		<tr>
 			<th>Number of Characters</th>
 			<td><input type="text" value="<?php echo $res2; ?>"></td>
 		</tr>
 		<tr>
 			<th></th>
 			<td><input type="submit" name="btn" value="Submit"></td>
 		</tr>
 	</table>
 </form>