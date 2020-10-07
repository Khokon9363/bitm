<?php 

  /**
   *  Admin login logout
   */

 class Login{
   
   public function adminLogin($data){
         
         $hostName='localhost';
         $userName='root';
         $password='';
         $dbName='blog';
         $link=mysqli_connect($hostName,$userName,$password,$dbName);

         $email=$data['email'];
         $password=md5($data['password']);
         // echo $password;
         // exit();
         $sql="SELECT * FROM users WHERE email='$email' AND password='$password' ";

         if (mysqli_query($link,$sql)) {
              
              $queryResult=mysqli_query($link,$sql);
              $users=mysqli_fetch_assoc($queryResult);

              if ($users) {
                    
                    session_start();
                    $_SESSION['id']=$users['id'];
                    $_SESSION['name']=$users['name'];

                    header('Location:dashboard.php');

              }else{

                $massage='Please use valid email address and password';
                return $massage;
              }

         } else {
               
               die('Query problem'.mysqli_error($link));
         }
         
    }
    public function adminLogout(){

          unset($_SESSION['id']);
          unset($_SESSION['name']);
          
          header('Location:index.php');
    }
    public function addcategory($data){
        
           $hostName='localhost';
           $userName='root';
           $password='';
           $dbName='blog';
           $link=mysqli_connect($hostName,$userName,$password,$dbName);

           $sql="INSERT INTO category (name,description,status) VALUES ('$data[name]','$data[description]','$data[status]')";

           if (mysqli_query($link,$sql)) {

                  $massage='Your Category Informations has been submitted.';
                  return $massage;

             } else {
                   die('Query problem.'.mysqli_error($link));
             }
    }
    public function viewcategory(){
           
           $hostName='localhost';
           $userName='root';
           $password='';
           $dbName='blog';
           $link=mysqli_connect($hostName,$userName,$password,$dbName);

           $sql="SELECT * FROM category";

           if (mysqli_query($link,$sql)) {
                   
                   $queryResult=mysqli_query($link,$sql);
                   return $queryResult;
           } else {
                 die('Query problem.'.mysqli_error($link));
           }
           
    }
    public function editcategory($id){
           
           $hostName='localhost';
           $userName='root';
           $password='';
           $dbName='blog';
           $link=mysqli_connect($hostName,$userName,$password,$dbName);

           $sql="SELECT * FROM category WHERE id='$id' ";

           if (mysqli_query($link,$sql)) {
                   
                   $queryResult=mysqli_query($link,$sql);
                   return $queryResult;

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

           $sql="UPDATE category SET name='$data[name]',description='$data[description]',status='$data[status]' WHERE id='$data[id]' ";

           if (mysqli_query($link,$sql)) {
                 header('Location:manage-category.php');
           } else {
                 die('Query problem '.mysqli_error($link));
           }
           
    }
    public function deleteCategory($id){
      
           $hostName='localhost';
           $userName='root';
           $password='';
           $dbName='blog';
           $link=mysqli_connect($hostName,$userName,$password,$dbName);

           $sql="DELETE FROM category WHERE id='$id' ";

           if (mysqli_query($link,$sql)) {

               $delmassage='Your category info has been deleted.Please reload the page.';
               return $delmassage;
           } else {
                die('Query problem .'.mysqli_error($link));
           }
           
    }
    public function addBlog($data){
           
           $hostName='localhost';
           $userName='root';
           $password='';
           $dbName='blog';
           $link=mysqli_connect($hostName,$userName,$password,$dbName);

           $sql="INSERT INTO blogs (name,title,shortdescription,longdescription,status) VALUES ('$data[name]','$data[title]','$data[shortdescription]','$data[longdescription]','$data[status]')";
           if (mysqli_query($link,$sql)) {
                      
                      $massage='Your Blog has been submitted.';
                      return $massage;
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
                 
                 $queryResult=mysqli_query($link,$sql);
                 return $queryResult;
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

           $sql="DELETE FROM blogs WHERE id='$id' ";

           if (mysqli_query($link,$sql)) {
                   
                   $delmassage='Your Blog has been deleted. Please reload the page.';
                   return $delmassage;
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

           $sql="SELECT * FROM blogs WHERE id='$id' ";

           if (mysqli_query($link,$sql)) {
                   
                   $queryResult=mysqli_query($link,$sql);
                   return $queryResult;

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

           $sql="UPDATE blogs SET name='$data[name]',title='$data[title]',shortdescription='$data[shortdescription]',longdescription='$data[longdescription]',status='$data[status]' WHERE id='$data[id]' ";

           if (mysqli_query($link,$sql)) {
                 header('Location:manage-blog.php');
           } else {
                 die('Query problem '.mysqli_error($link));
           }
           
    }







 }







 ?>