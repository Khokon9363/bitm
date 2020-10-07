<?php 

 /**
  * blog add manage view edit delete
  */
 class Blog{
   
         public function addBlog($data){
           
           $hostName='localhost';
           $userName='root';
           $password='';
           $dbName='blog';
           $link=mysqli_connect($hostName,$userName,$password,$dbName);
           $sql="INSERT INTO blogs (blog_name,blog_title,short_description,long_description,blog_image,publication_status) VALUES ('$data[blog_name]','$data[blog_title]','$data[short_description]','$data[long_description]','$data[blog_image]','$data[publication_status]')";

           if (mysqli_query($link,$sql)) {
                      $addBlogMassage='Your Blog has been submitted.';
                      return $addBlogMassage;
           } else {
                 die('Query problem .'.mysqli_error($link));
           }
           
    }
    public function viewBlog(){
           
           $hostName='localhost';
           $userName='root';
           $password='';
           $dbName='blog';
           $link=mysqli_connect($hostName,$userName,$password,$dbName);
           $sql="SELECT * FROM blogs";

           if (mysqli_query($link,$sql)) {
                 
                 $viewQuery=mysqli_query($link,$sql);
                 return $viewQuery;
           } else {
                 die('Query problem .'.mysqli_error($link));
           }
           
    }
    public function deleteBlog($id){
           
           $hostName='localhost';
           $userName='root';
           $password='';
           $dbName='blog';
           $link=mysqli_connect($hostName,$userName,$password,$dbName);
           $sql="DELETE FROM blogs WHERE blog_id='$id' ";

           if (mysqli_query($link,$sql)) {
                   
                   $delBlogMassage='Your Blog has been deleted. Please reload the page.';
                   return $delBlogMassage;
           } else {
                  die('Query problem .'.mysqli_error($link));
           }
           
    }
    public function editBlog($id){
           
           $hostName='localhost';
           $userName='root';
           $password='';
           $dbName='blog';
           $link=mysqli_connect($hostName,$userName,$password,$dbName);
           $sql="SELECT * FROM blogs WHERE blog_id='$id' ";

           if (mysqli_query($link,$sql)) {
                   
                   $editQuery=mysqli_query($link,$sql);
                   return $editQuery;
           } else {
                  die('Query problem. '.mysqli_error($link));
           }

       }
       public function updateBlog($data){
           
           $hostName='localhost';
           $userName='root';
           $password='';
           $dbName='blog';
           $link=mysqli_connect($hostName,$userName,$password,$dbName);
           $sql="UPDATE blogs SET blog_name='$data[blog_name]',blog_title='$data[blog_title]',short_description='$data[short_description]',long_description='$data[long_description]',publication_status='$data[publication_status]' WHERE blog_id='$data[blog_id]' ";

           if (mysqli_query($link,$sql)) {
                 header('Location:manage-blog.php');
           } else {
                 die('Query problem '.mysqli_error($link));
           }
           
    }










 }















 ?>