<?php 
 Namespace App\classes;


 class Setting{
 	
 	public function viewSiteInfo(){
 		   $link=mysqli_connect('localhost','root','','album');
 		   $sql="SELECT * FROM site_name ";

 		   if (mysqli_query($link,$sql)) {
 		       $viewSiteInfoQuery=mysqli_query($link,$sql);
 		       return $viewSiteInfoQuery;
 		   } else {
 		   	  die('Query problem .'.mysqli_error($link));
 		   }
 		   
 	}
 	public function changeSiteName($data){
 		   $link=mysqli_connect('localhost','root','','album');
 		   $sql="UPDATE site_name SET site_name='$data[site_name]' ";

 		   if (mysqli_query($link,$sql)) {
 		       header('Location:change_name.php');
 		       
 		   } else {
 		   	  die('Query problem .'.mysqli_error($link));
 		   }
 		   
 	}

 	public function viewUsersInfo(){
 		   $link=mysqli_connect('localhost','root','','album');
 		   $sql="SELECT * FROM users ";

 		   if (mysqli_query($link,$sql)) {
 		       $viewUsersInfoQuery=mysqli_query($link,$sql);
 		       return $viewUsersInfoQuery;
 		   } else {
 		   	  die('Query problem .'.mysqli_error($link));
 		   }
 		   
 	}
 	public function changeEmail($data){
 		   $link=mysqli_connect('localhost','root','','album');
 		   $sql="UPDATE users SET email='$data[email]' ";

 		   if (mysqli_query($link,$sql)) {
 		       header('Location:change_email.php');
 		       
 		   } else {
 		   	  die('Query problem .'.mysqli_error($link));
 		   }
 		   
 	}
 	public function changePassword($data){
 		   $link=mysqli_connect('localhost','root','','album');
 		   $sql="UPDATE users SET password=md5('$data[password]') ";

 		   if (mysqli_query($link,$sql)) {
 		       header('Location:change_password.php');
 		       
 		   } else {
 		   	  die('Query problem .'.mysqli_error($link));
 		   }
 		   
 	}





 }








 ?>