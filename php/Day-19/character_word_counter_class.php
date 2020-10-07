<?php 


  class CharacterWord{
  	
  	function makeCharacterWord($data){
  		 // echo "<pre>";
  		 // print_r($data);

  		 $stringLength=strlen($data['entered_string']);
  		 $Wordlength=str_word_count($data['entered_string']);

  		 $result=[

  		 	'string_length'=>$stringLength,
  		 	'word_length'=>$Wordlength

  		 ]; 
  		  return $result;

  	}


  }












 ?>