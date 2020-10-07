<?php 
Namespace App\classes;

  class Slider{
    

    public function addSlider($data){


           $link=mysqli_connect('localhost','root','','album');

           $fileName=$_FILES['carousel_image']['name'];
           $directory='pics/';
           $imageUrl=$directory.$fileName;
           $filetype=pathinfo($fileName,PATHINFO_EXTENSION);
  

       if (file_exists($imageUrl)) {
           die('This file already Exist.Please select another file.');

       } else {
           if ($_FILES['carousel_image']['size']>50000000) {
             die('Your file size is too large.Please select a file with in 10 kilobite.');

           }else{
              if ($filetype !='jpg' && $filetype !='png' && $filetype !='JPG') {
                   die('Image type is not supported.Please use jpg or png or JPG .');

            }else{
              move_uploaded_file($_FILES['carousel_image']['tmp_name'], $imageUrl);

              $sql=" INSERT INTO carousels (carousel_caption,carousel_image,carousel_status) VALUES ('$data[carousel_caption]','$imageUrl','$data[carousel_status]') ";
       if (mysqli_query($link,$sql)) {
          $addSliderMassage=' Your Slider has been saved successfully .';
          return $addSliderMassage;
       } else {
          die('Query problem .'.mysqli_error($link));
       }


            }
          }


       }


    }       
    public function viewSliderFront(){
         $link=mysqli_connect('localhost','root','','album');
         $sql=" SELECT * FROM carousels WHERE carousel_status=1 ";

         if (mysqli_query($link,$sql)) {
             $viewSliderQuery=mysqli_query($link,$sql);
             return $viewSliderQuery;
         } else {
             die('Query problem .'.mysqli_error($link));
         }
         
    }
    public function viewSlider(){
         $link=mysqli_connect('localhost','root','','album');
         $sql=" SELECT * FROM carousels ";

         if (mysqli_query($link,$sql)) {
             $viewSliderQuery=mysqli_query($link,$sql);
             return $viewSliderQuery;
         } else {
             die('Query problem .'.mysqli_error($link));
         }
         
    }
    public function viewSliderForIndicators(){
         $link=mysqli_connect('localhost','root','','album');
         $sql=" SELECT * FROM carousels WHERE carousel_status=1 ";

         if (mysqli_query($link,$sql)) {
             $viewSliderQuery=mysqli_query($link,$sql);
             return $viewSliderQuery;
         } else {
             die('Query problem .'.mysqli_error($link));
         }
         
    }
    public function PublicationManagmentOfSlider($sliderId){
           $link=mysqli_connect('localhost','root','','album');
           $sql=" SELECT * FROM carousels WHERE id='$sliderId' ";

           if (mysqli_query($link,$sql)) {
               $result=mysqli_query($link,$sql);
               $resultFetch=mysqli_fetch_assoc($result);

               if ($resultFetch['carousel_status']==1) {
                   $sqlChange=" UPDATE carousels SET carousel_status=0 WHERE id='$sliderId' ";

                   if (mysqli_query($link,$sqlChange)) {
                       header('Location:view_slider.php');
                   } 
                   

               } if ($resultFetch['carousel_status']==0) {
                   $sqlChange2=" UPDATE carousels SET carousel_status=1 WHERE id='$sliderId' ";

                   if (mysqli_query($link,$sqlChange2)) {
                       header('Location:view_slider.php');
                   }
               }
               
           } else {
               die('Query problem .'.mysqli_error($link));
           }
    }





}

 ?>