<?php 

  $addBlogMassage='';
    if (isset($_POST['btn'])) {
           $link=mysqli_connect('localhost','root','','abc');

           $fileName=$_FILES['x']['name'];
           $directory='pics/';
           $imageUrl=$directory.$fileName;
           $filetype=pathinfo($fileName,PATHINFO_EXTENSION);
  

       if (file_exists($imageUrl)) {
           die('This file already Exist.Please select another file.');

       } else {
           if ($_FILES['x']['size']>50000000) {
             die('Your file size is too large.Please select a file with in 10 kilobite.');

           }else{
              if ($filetype !='jpg' && $filetype !='png' && $filetype !='JPG') {
                   die('Image type is not supported.Please use jpg or png or JPG .');

            }else{
              move_uploaded_file($_FILES['x']['tmp_name'], $imageUrl);

              $sql=" INSERT INTO asd (x) VALUES ('$imageUrl') ";
       if (mysqli_query($link,$sql)) {
          $addBlogMassage=' Your blog informations has been saved successfully .';
          return $addBlogMassage;
       } else {
          die('Query problem .'.mysqli_error($link));
       }


            }
          }


       }
    }

   












 ?>
 <?php echo $addBlogMassage; ?>
 <form action="" method="post" enctype="multipart/form-data">
    <table>
        <tr>
           <td><input type="file" name="x"></td>
        </tr>
        <tr>
          <td><input type="submit" name="btn"></td>
        </tr>
    </table>
 </form>