<?php 
 Namespace App\classes;

 class Post{
 	
 	public function addPost($data){
 		   $link=mysqli_connect('localhost','root','','album');
 		   $fileName=$_FILES['image']['name'];
           $directory='pics/';
           $imageUrl=$directory.$fileName;
           $filetype=pathinfo($fileName,PATHINFO_EXTENSION);
  

       if (file_exists($imageUrl)) {
           die('This file already Exist.Please select another file.');

       } else {
           if ($_FILES['image']['size']>50000000) {
             die('Your file size is too large.Please select a file with in 10 kilobite.');

           }else{
              if ($filetype !='jpg' && $filetype !='png' && $filetype !='JPG') {
                   die('Image type is not supported.Please use jpg or png or JPG .');

            }else{
              move_uploaded_file($_FILES['image']['tmp_name'], $imageUrl);

              $sql=" INSERT INTO posts (category_name,image,caption,short_description,long_description,status) VALUES ('$data[category_name]','$imageUrl','$data[caption]','$data[short_description]','$data[long_description]','$data[status]') ";
       if (mysqli_query($link,$sql)) {
          $addPostMassage=' Your Post has been saved successfully .';
          return $addPostMassage;
       } else {
          die('Query problem .'.mysqli_error($link));
       }


            }
          }


       }
 	}
 	public function viewPost(){
 		   $link=mysqli_connect('localhost','root','','album');
 		   $sql="SELECT * FROM posts ";

 		   if (mysqli_query($link,$sql)) {
 		   	   $viewPostQuery=mysqli_query($link,$sql);
 		   	   return $viewPostQuery;
 		   } else {
 		   	  die('Query problem .'.mysqli_error($link));
 		   }
 		   
 	}
 	public function managePost($PostId){
 		   $link=mysqli_connect('localhost','root','','album');
                   $sql="SELECT * FROM posts WHERE id='$PostId' ";

                   if (mysqli_query($link,$sql)) {
                           $result=mysqli_query($link,$sql);
                           $resultFetch=mysqli_fetch_assoc($result);

                   if ($resultFetch['status']==1) {
                       $sqlChange="UPDATE posts SET status=0 WHERE id='$PostId' ";

                       if (mysqli_query($link,$sqlChange)) {
                           header('Location:view_post.php');

                        } 
                    } if ($resultFetch['status']==0) {
                          $sqlChange2="UPDATE posts SET status=1 WHERE id='$PostId' ";

                          if (mysqli_query($link,$sqlChange2)) {
                                      header('Location:view_post.php');
                          }
                        }

              } else {
                      die('Query problem .'.mysqli_error($link));
                   }
 		   
 	}

 	public function viewPublishedPost(){
 		   $link=mysqli_connect('localhost','root','','album');
 		   $sql="SELECT * FROM posts WHERE status=1 ";

 		   if (mysqli_query($link,$sql)) {
 		   	   $viewPublishedPostQuery=mysqli_query($link,$sql);
 		   	   return $viewPublishedPostQuery;
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
  public function viewVideLongDesPost($ViewLongDes){
       $link=mysqli_connect('localhost','root','','album');
       $sql="SELECT * FROM posts WHERE id='$ViewLongDes' ";

       if (mysqli_query($link,$sql)) {
           $viewVideLongDesPostQuery=mysqli_query($link,$sql);
           return $viewVideLongDesPostQuery;
       } else {
          die('Query problem .'.mysqli_error($link));
       }
       
  }
  public function viewOne($viewit){
       $link=mysqli_connect('localhost','root','','album');
       $sql="SELECT * FROM posts WHERE id='$viewit' ";

       if (mysqli_query($link,$sql)) {
           $viewOneQuery=mysqli_query($link,$sql);
           return $viewOneQuery;
       } else {
          die('Query problem .'.mysqli_error($link));
       }
       
  }
  public function viewPublishedPostForLink(){
       $link=mysqli_connect('localhost','root','','album');
       $sql="SELECT * FROM posts WHERE status=1 ";

       if (mysqli_query($link,$sql)) {
           $viewPublishedPostForLinkQuery=mysqli_query($link,$sql);
           return $viewPublishedPostForLinkQuery;
       } else {
          die('Query problem .'.mysqli_error($link));
       }
       
  }




 }





 ?>