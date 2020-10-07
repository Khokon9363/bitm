<?php 
 Namespace App\classes;


  class CategoryWise{
  	
  	public function categoryWiseView($detailsName){

 		   $link=mysqli_connect('localhost','root','','album');
 		   $sql="SELECT * FROM posts WHERE category_name='$detailsName' ";
 		   
 		   if (mysqli_query($link,$sql)) {
 		   	   $CategoryWiseViewQuery=mysqli_query($link,$sql);
 		   	   return $CategoryWiseViewQuery;
 		   } else {
 		   	   die('Query problem .'.mysqli_error($link));
 		   }
 		   
  	}




  }








 ?>