<?php 

  /**
   * Add view edit update delete
   */
  class Employee{
  	
  	function addEmployee($data){
  		       
             $link=mysqli_connect('localhost','root','','laravel');
             $sql="INSERT INTO employee (name,email,mobile) VALUES ('$data[name]','$data[email]','$data[mobile]')";

             if (mysqli_query($link,$sql)) {

                  $massage='Your information has been submitted.';
                  return $massage;

             } else {
                   die('Query problem.'.mysqli_error($link));
             }
             
  	}
    // public function viewEmployee($data)         same
    public function viewEmployee(){
             
             $link=mysqli_connect('localhost','root','','laravel');
             $sql="SELECT * FROM employee ";

             if (mysqli_query($link,$sql)) {
                   
                   $queryResult=mysqli_query($link,$sql);
                   return $queryResult;

             } else {
                   die('Query problem.'.mysqli_error($link));
             }
             
    }
    public function editEmployee($id){

            $link=mysqli_connect('localhost','root','','laravel');
             $sql="SELECT * FROM employee WHERE id='$id'";

             if (mysqli_query($link,$sql)) {
                   
                   $queryResult=mysqli_query($link,$sql);
                   return $queryResult;

             } else {
                   die('Query problem.'.mysqli_error($link));
             }

    }
    // public function updateEmployee($data,$id){
            
    //         $link=mysqli_connect('localhost','root','','laravel');
    //          $sql="UPDATE employee SET name='$data[name]',email='$data[email]',mobile='$data[mobile]' WHERE id='$id' ";

    //          if (mysqli_query($link,$sql)) {
                   
    //                header("Location:view-employee.php");

    //          } else {
    //                die('Query problem.'.mysqli_error($link));
    //          }
    // }
    public function updateEmployee($data){
            
            $link=mysqli_connect('localhost','root','','laravel');
             $sql="UPDATE employee SET name='$data[name]',email='$data[email]',mobile='$data[mobile]' WHERE id='$data[id]' ";

             if (mysqli_query($link,$sql)) {
                   
                   header("Location:view-employee.php");

             } else {
                   die('Query problem.'.mysqli_error($link));
             }
    }
    public function deleteEmployee($id){
            
            $link=mysqli_connect('localhost','root','','laravel');
            $sql="DELETE FROM employee WHERE id='$id' ";

            if (mysqli_query($link,$sql)) {
                   
                   $massage='Your selected information has been deleted.Please reload the page.';
                   return $massage;

            } else {
                   die('Query problem'.mysqli_error($link));
            }
            
    }















  }



 ?>