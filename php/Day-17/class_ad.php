<?php 

  require_once 'class.php';

  class Demo extends Example{

  	public $age=22;
  	protected $location='Farmgate';
  	private $mobile='0199868270';
  	
  	public function newOne(){
  		// echo "In newOne";
  		$this->addition();
  	}

  	protected function newTwo(){
        echo "In newTwo";
  	}

  	private function newthree(){
  	    echo "In newThree";
  	}
  	
  }





 ?>