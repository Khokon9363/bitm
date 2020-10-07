<?php 


 class Example{

 	public $name='Sakib';
 	protected $city='Savar';
 	private $country='Bangladesh';
 	private $value;
 	
 	// function __construct($data){
 	// 	   echo $data;
 	// 	   $this->value=$data;
 	// }

 	public function addition(){
 		   echo "In addition";
 		   // echo $this->value;
 	}
 	protected function substraction(){
 		   echo "In substraction";
 	}
 	private function division(){
 		   echo "In division";
 	}


 }







 ?>