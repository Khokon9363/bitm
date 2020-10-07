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
    
    
    
    
    
    
    
    
       
    // public function getAllCategoryInfo(){

    //        $hostName='localhost';
    //        $userName='root';
    //        $password='';
    //        $dbName='blog';
    //        $link=mysqli_connect($hostName,$userName,$password,$dbName);
           
    //        $sql="SELECT * FROM blogs WHERE status=1 ";
    //        if (mysqli_query($link,$sql)) {
              
    //           $queryResult=mysqli_query($link,$sql);
    //           return $queryResult;
    //        } else {
    //             die('Query problem '.mysqli_error($link));
    //        }
           
    // }







 }







 ?>