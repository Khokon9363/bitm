<?php 

   $link=mysqli_connect('localhost','root','','file_upload');
 
   // echo '<pre>';
   // print_r($_POST);

   // print_r($_FILES);
   // echo $_FILES['image_file']['name'];



   if (isset($_POST['btn'])) {
      
      $fileName=$_FILES['image_file']['name'];
      $directory='images/';
      $imageUrl=$directory.$fileName;
      $filetype=pathinfo($fileName,PATHINFO_EXTENSION);
      // $check= getimagesize($fileName);
  
  // if ($check) {

     if (file_exists($imageUrl)) {
          die('This file already Exist.Please select another file.');
     } else {
          if ($_FILES['image_file']['size']>500000) {
            
             die('Your file size is too large.Please select a file with in 10 kilobite.');
          }else{
            if ($filetype !='jpg' && $filetype !='png' && $filetype !='JPG') {
                
                die('Image type is not supported.Please use jpg or png or JPG .');
            }else{
              move_uploaded_file($_FILES['image_file']['tmp_name'], $imageUrl);

              $sql="INSERT INTO images (image_file) VALUES ('$imageUrl')";
              mysqli_query($link,$sql);
              echo "Image uploaded & save successfully.";
            }
          }


       } 

  }

  
       
  // } else {
  //   die('Please choose a image file thanks');
  // }

   
  















  // move_uploaded_file($_FILES['image_file']['tmp_name'], $imageUrl);






 ?>
     

<form action="" method="POST" enctype="multipart/form-data">
	<table>
		<tr>
			<th>Select File</th>
			<td><input type="file" name="image_file"></td>
		</tr>
		<tr>
			<th></th>
			<td><input type="submit" name="btn" value="Submit"></td>
		</tr>
	</table>
</form>


<hr>


 <?php 

  $sql="SELECT * FROM images";
  $imageQuery=mysqli_query($link,$sql);


  ?>


<table>
<?php while ($imageQueryFetch=mysqli_fetch_assoc($imageQuery)) { ?>
  <tr>
     <td><img src="<?php echo $imageQueryFetch['image_file']; ?>" height="100" width="100" style="float: left;"></td>
  </tr>
 <?php } ?>
</table>