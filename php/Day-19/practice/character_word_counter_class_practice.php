<?php 


  class CharacterWord{
  	
  	function makeCharacterWord($data){
  		     // echo "<pre>";
  		     // print_r($data);

  		    $characterlength=strlen($data['input']);
  		    $wordlength=str_word_count($data['input']);

  		    $result=[

  		    	'wordlength'=>$wordlength,
  		    	'characterlength'=>$characterlength
  		    ];
  		        return $result;

  	}




  }





          //   array er joss akta use

          //  akhane duibar return kora jabe na tai array use kora hoyese

 ?>