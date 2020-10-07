<?php 
   session_start();

   if ($_SESSION['id']==null) { 
         header('Location:index.php');
   }
  require_once '../classes/login-class.php'; 
  $login=new Login();
  
  // $queryResult='';
  $id=$_GET['id'];
  $queryResult=$login-> editBlog($id);
  $login=mysqli_fetch_assoc($queryResult);


  if (isset($_POST['btn'])) {
        
        $login=new Login();
        $login-> updateBlog($_POST);
  }


 ?>




<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Dashboard</title>
  <link rel="stylesheet" type="text/css" href="../vendor/bootstrap/css/bootstrap.min.css">
</head>
<body>


<?php include 'includes/menu.php'; ?>

<!-- <h3 style="color: green;text-align: center;"><?php echo $massage; ?></h3> -->

 <div class="container" style="margin-top: 20px;">
    <div class="row">
      <div class="col-sm-8 mx-auto">
        <div class="card">
          <div class="card-body">

<form action="" method="POST">
   <div class="form-group row">
             <label for="inputEmail3" class="col-sm-4 col-form-label">Blog Name</label> 
       <div class="col-sm-8"> 
            <select name="name">
              <option disabled >--Select Blog Name--</option>
              <option value="One">Blog One</option>
              <option value="Two">Blog Two</option>
              <option value="Three">Blog Three</option>
            </select> 
       </div> 
   </div> 
   <div class="form-group row"> 
            <label for="inputPassword3" class="col-sm-4 col-form-label">Blog Title</label> 
      <div class="col-sm-8"> 
            <input type="text" class="form-control" name="title" value="<?php echo $login['title']; ?>">
            <input type="hidden" name="id" value="<?php echo $login['id']; ?>"> 
      </div> 
   </div> 
   <div class="form-group row"> 
            <label for="inputPassword3" class="col-sm-4 col-form-label">Short Description</label> 
      <div class="col-sm-8"> 
            <textarea class="form-control" name="shortdescription">
<?php echo $login['shortdescription']; ?>
            </textarea>
      </div> 
   </div> 
   <div class="form-group row"> 
            <label for="inputPassword3" class="col-sm-4 col-form-label">Long Description</label> 
      <div class="col-sm-8"> 
            <textarea class="form-control" name="longdescription">
<?php echo $login['longdescription']; ?>
            </textarea>
      </div> 
   </div> 
   <div class="form-group row"> 
            <label for="inputPassword3" class="col-sm-4 col-form-label">Blog Image</label> 
      <div class="col-sm-8"> 
            <input type="file" name="blogimage" accept="image/*">
      </div> 
   </div> 
   <div class="form-group row">
             <label for="inputEmail3" class="col-sm-4 col-form-label">Publication Status</label> 
       <div class="col-sm-8"> 
            <input type="radio" name="status" value="published">Published 
            <input type="radio" name="status" value="unpublished">Unpublished 
       </div> 
   </div> 

   <div class="form-group row">
      <div class="col-sm-3"></div> 
      <div class="col-sm-9"> 
            <button type="submit" class="btn btn-success btn-block" name="btn">Save Category Info</button> 
      </div> 
  </div> 
</form>

          </div>
        </div>
      </div>
    </div>
  </div>

 <script src="../vendor/jquery/jquery.min.js"></script>
  <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script type="text/javascript" src="../vendor/bootstrap.js"></script>
</body>
</html>