<?php 
 

class WordCharacter{
	
	function makeWordCharacter($data){
	         
	         $wordLength=str_word_count($data['input']);
	         $characterLength=strlen($data['input']);

	         $result=[

	         	'wordLength'=>$wordLength,
	         	'characterLength'=>$characterLength

	         ];
	            return $result;
	}

}





 ?>