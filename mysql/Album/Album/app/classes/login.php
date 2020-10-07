<?php 
Namespace App\classes;


 class Login{
	
	
	public function logIn($data){
		   $link=mysqli_connect('localhost','root','','album');
     	   $sql="SELECT * FROM users WHERE email='$data[email]' AND password=md5('$data[password]') ";

     	   if (mysqli_query($link,$sql)) {
     	    	 $loginQuery=mysqli_query($link,$sql);
     	    	 $loginQueryFetch=mysqli_fetch_assoc($loginQuery);

     	    	if ($loginQueryFetch) {
     	    	 	 session_start();
     	    	 	 $_SESSION['id']=$loginQueryFetch['id'];
     	    	 	 $_SESSION['name']=$loginQueryFetch['name'];
     	    	 	   header('Location:dashboard.php');

     	    	} else {
     	    	     $loginQueryMassage="Your Email or Password is Invalid .".'<br>'.' Please enter Valid Email & Password .' ;
     	    	 	 return $loginQueryMassage;
     	    	}	 

     	    } else {
     	    	 die('Query problem .'.mysqli_error($link));
     	    }
     	    
     }
     public function logOutFromDashboard($id){
     	    session_start();
     	    unset($_SESSION['id']);
     	    unset($_SESSION['name']);
     	    header('Location:index.php');
     	    
     }
     public function logOutFromAll($id){
              session_start();
              unset($_SESSION['id']);
              unset($_SESSION['name']);
              header('Location:../index.php');
              
     }





}







 ?>