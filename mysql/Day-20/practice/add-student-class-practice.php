<?php 

  
   class Employee{
   	
   	public function AddEmployeeInfo($data){
   		     
   		     $link= mysqli_connect('localhost','root','','laravel');

   		     $sql= "INSERT INTO employee (name,email,mobile) VALUES ('$data[name]','$data[email]','$data[mobile]')";

   		     // mysqli_query($link,$sql);

   		     if (mysqli_query($link,$sql)) {
   		     	 
   		     	 $massage='Your Informations has been submitted.';

   		     	  return $massage;

   		     } else {

   		     	 die('Query problem'.'. '.mysqli_error($link));
   		     }
   		     

   		     

   		     
   	}

   	public function ViewEmployeeInfo(){
   		   
   		   $link= mysqli_connect('localhost','root','','laravel');

   		   $sql= "SELECT * FROM employee";
   		   
   		    if (mysqli_query($link,$sql)) {
   		   	   
   		   	   $queryResult=mysqli_query($link,$sql);

   		   	   return $queryResult;
   		   	   
   		   } else {
   		   	    die('Query problem'.'. '.mysqli_error($link));
   		   }

   		   
   	}



   }








 ?>