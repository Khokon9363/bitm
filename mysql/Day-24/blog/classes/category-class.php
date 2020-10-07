<?php 

  
 /**
  * Add view delete edit
  */
 class Category{
 	
 	public function addCategory($data){

            $hostName='localhost';
            $userName='root';
            $password='';
            $dbName='blog';
            $link=mysqli_connect($hostName,$userName,$password,$dbName);
            $sql="INSERT INTO categorys (category_name,category_description,category_status) VALUES ('$data[category_name]','$data[category_description]','$data[category_status]')";

           if (mysqli_query($link,$sql)) {
                  $categoryMassage='Your Category Informations has been submitted.';
                  return $categoryMassage;

             } else {
                   die('Query problem.'.mysqli_error($link));
             }
    }
    public function viewCategory(){
           
           $hostName='localhost';
           $userName='root';
           $password='';
           $dbName='blog';
           $link=mysqli_connect($hostName,$userName,$password,$dbName);
           $sql="SELECT * FROM categorys";

           if (mysqli_query($link,$sql)) {
                   
                   $viewQuery=mysqli_query($link,$sql);
                   return $viewQuery;
           } else {
                 die('Query problem.'.mysqli_error($link));
           }
           
    }
    public function deleteCategory($id){
      
           $hostName='localhost';
           $userName='root';
           $password='';
           $dbName='blog';
           $link=mysqli_connect($hostName,$userName,$password,$dbName);
           $sql="DELETE FROM categorys WHERE category_id='$id' ";

           if (mysqli_query($link,$sql)) {

               $delmassage='Your category info has been deleted.Please reload the page.';
               return $delmassage;
           } else {
                die('Query problem .'.mysqli_error($link));
           }
           
    }
    public function editCategory($id){
           
           $hostName='localhost';
           $userName='root';
           $password='';
           $dbName='blog';
           $link=mysqli_connect($hostName,$userName,$password,$dbName);
           $sql="SELECT * FROM categorys WHERE category_id='$id' ";

           if (mysqli_query($link,$sql)) {
                   
                   $editQuery=mysqli_query($link,$sql);
                   return $editQuery;
           } else {
                  die('Query problem. '.mysqli_error($link));
           }
           
    }
    public function updateCategory($data){
           
           $hostName='localhost';
           $userName='root';
           $password='';
           $dbName='blog';
           $link=mysqli_connect($hostName,$userName,$password,$dbName);

           $sql="UPDATE categorys SET category_name='$data[category_name]',category_description='$data[category_description]',category_status='$data[category_status]' WHERE category_id='$data[category_id]' ";

           if (mysqli_query($link,$sql)) {
                 header('Location:manage-category.php');
           } else {
                 die('Query problem '.mysqli_error($link));
           }
           
    }









 }











 ?>