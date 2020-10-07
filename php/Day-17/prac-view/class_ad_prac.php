<?php 


 require_once 'class_prac.php';

 class Demo extends Example{
 	
 	    public $mobile='0123456789';
 	    protected $email='abc@gmail.com';
 	    private $address='Rajabari';
         
        public function One(){
        	   // echo "One";
        	   $this->addition();
        }
        protected function Two(){
        	   echo "Two";
        }
        private function Three(){
        	   echo "Three";
        }

 }









 ?>