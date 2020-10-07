<?php 

  /**
   *  Admin login
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
              // echo "<pre>";
              // print_r($users);
              if ($users) {
                    
                    header('Location:dashboard.php');
              }else{
                $massage='Please use valid email address and password';
                return $massage;
              }

         } else {
               
               die('Query problem'.mysqli_error($link));
         }
         
    }






 }







 ?>