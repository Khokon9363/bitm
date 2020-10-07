<?php 

  class Student{

    // private function dbConnection{
    //         $hostName='localhost';
    //         $userName='root';
    //         $password='';
    //         $dbName='laravel';
    //         $link=mysqli_connect($hostName,$userName,$password,$dbName);
    //         return $link;
    // }

  	
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

    public function editStudentInfo($id){

           $link= mysqli_connect('localhost','root','','laravel');

           $sql="SELECT * FROM students WHERE id='$id' ";

           if ( mysqli_query($link,$sql) ) {

                $queryResult= mysqli_query($link,$sql);
                 return $queryResult;
                
           } else{
                 die('Query problem'.mysqli_error($link));
           }
           
    }

    public function updateStudentInfo($data) // ($data,$id) 
    {

           $link= mysqli_connect('localhost','root','','laravel');
           
           // $sql="UPDATE students SET name='$data[name]',email='$data[email]',mobile='$data[mobile]' WHERE id='$id' ";

           $sql="UPDATE students SET name='$data[name]',email='$data[email]',mobile='$data[mobile]' WHERE id='$data[id]' ";

           if ( mysqli_query($link,$sql) ) {

            header("Location:view-student.php");
                
           } else{
                 die('Query problem'.mysqli_error($link));
           }
    }

    public function deleteStudentInfo($id){
           
           $link= mysqli_connect('localhost','root','','laravel');

           $sql="DELETE FROM students WHERE id = '$id'";

           if ( mysqli_query($link,$sql) ) {
                $massage='Your information deleted successfully.'.'<br>'.'Please reload the page.';
                return $massage;
                
          } else{
                 die ('Query problem'.mysqli_error($link));
          }
    }

    


  }










  //  hostname name paswsword database-name   $sql=query
 ?>