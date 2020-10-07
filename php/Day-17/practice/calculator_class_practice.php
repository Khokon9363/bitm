<?php


  class calculator{
  	
  	function makeCalculator($data){
  		 echo '<pre>';
  		 print_r($data);

  		 $sum=$data['btn'];
  		 switch ($sum) {
  		 	case '+':
  		 		$result=$data['first_number']+$data['second_number'];
  		 		break;
  		 	case '-':
  		 		$result=$data['first_number']-$data['second_number'];
  		 		break;
  		 	case '*':
  		 		$result=$data['first_number']*$data['second_number'];
  		 		break;
  		 	case '/':
  		 		$result=$data['first_number']/$data['second_number'];
  		 		break;
  		 	case '%':
  		 		$result=$data['first_number']%$data['second_number'];
  		 		break;	
  		 	
  		 } return $result;;

  	}


  }



        // function er return must
?>