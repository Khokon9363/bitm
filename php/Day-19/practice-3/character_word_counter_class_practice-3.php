<?php 


  class CharacterWord{
  	
  	   function makeCharacterWord1($data){

  		       $wordLength=str_word_count($data['input']);
  		       return $wordLength;
  	     }
  	   function makeCharacterWord2($data){
  	   	       $characterLength=strlen($data['input']);
  	   	       return $characterLength;
  	   }


  }

  //  avabeo possible

 ?>