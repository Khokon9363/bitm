<?php 

  class Student{
  	
  	public function saveStudentInfo($data){

  		   $link= mysqli_connect('localhost','root','','laravel');

  		   $sql= "INSERT INTO students (name, email, mobile) VALUES ('$data[name]','$data[email]','$data[mobile]')";

  		     // mysqli_query($link,$sql);

          if ( mysqli_query($link,$sql) ) {
                $massage='Your information submitted successfully.';
                return $massage;
                
          } else{
                 die ('Query problem'.mysqli_error($link));
          }


  	}

    public function viewStudentInfo(){
           
           $link= mysqli_connect('localhost','root','','laravel');

           $sql= "SELECT * FROM students";

           if ( mysqli_query($link,$sql) ) {

                $queryResult= mysqli_query($link,$sql);
                 return $queryResult;
                
           } else{
                 die('Query problem'.mysqli_error($link));
           }
    }

    


  }










  //  hostname name paswsword database-name   $sql=query
 ?>