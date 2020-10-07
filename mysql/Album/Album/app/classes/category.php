<?php 
 Namespace App\classes;


 class Category{
        
        public function addCategory($data){
        	   $link=mysqli_connect('localhost','root','','album');
        	   $sql="INSERT INTO categorys (category_name,category_status) VALUES ('$data[category_name]','$data[category_status]') ";

        	   if (mysqli_query($link,$sql)) {
        	   	   $addCategoryMassage='Your Category has been added .';
        	   	   return $addCategoryMassage;
        	   } else {
        	   	   die('Query problem .'.mysqli_error($link));
        	   }
        	   
        	}
        public function viewCategory(){
                   $link=mysqli_connect('localhost','root','','album');
                   $sql="SELECT * FROM categorys ";

                   if (mysqli_query($link,$sql)) {
                           $viewCategoryQuery=mysqli_query($link,$sql);
                           return $viewCategoryQuery;
                   } else {
                           die('Query problem .'.mysqli_error($link));
                   }
                }
        public function publicationManagementOfCategory($categoryId){
                   $link=mysqli_connect('localhost','root','','album');
                   $sql="SELECT * FROM categorys WHERE id='$categoryId' ";

                   if (mysqli_query($link,$sql)) {
                           $result=mysqli_query($link,$sql);
                           $resultFetch=mysqli_fetch_assoc($result);

                   if ($resultFetch['category_status']==1) {
                       $sqlChange="UPDATE categorys SET category_status=0 WHERE id='$categoryId' ";

                       if (mysqli_query($link,$sqlChange)) {
                           header('Location:view_category.php');

                        } 
                    } if ($resultFetch['category_status']==0) {
                          $sqlChange2="UPDATE categorys SET category_status=1 WHERE id='$categoryId' ";

                          if (mysqli_query($link,$sqlChange2)) {
                                      header('Location:view_category.php');
                          }
                        }

              } else {
                      die('Query problem .'.mysqli_error($link));
                   }
                   
                }
        public function viewPublishedCategory(){
                   $link=mysqli_connect('localhost','root','','album');
                   $sql="SELECT * FROM categorys WHERE category_status=1 ";

                   if (mysqli_query($link,$sql)) {
                           $viewPublishedCategoryQuery=mysqli_query($link,$sql);
                           return $viewPublishedCategoryQuery;
                   } else {
                           die('Query problem .'.mysqli_error($link));
                   }
                }	
 



 }






 ?>