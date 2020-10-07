<?php 
   session_start();
  
   if ($_SESSION['id']==null) {
   	     header('Location:index.php');
   }

  require_once '../classes/Category-class.php';

  
  $categoryMassage='';
  if (isset($_POST['btn'])) {
       $category=new Category();
       $categoryMassage=$category->addCategory($_POST);
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

<h3 style="color: green;text-align: center;"><?php echo $categoryMassage; ?></h3>

 <div class="container" style="margin-top: 20px;">
    <div class="row">
      <div class="col-sm-8 mx-auto">
        <div class="card">
          <div class="card-body">

<form action="" method="POST">
   <div class="form-group row">
             <label for="inputEmail3" class="col-sm-3 col-form-label">Category Name</label> 
       <div class="col-sm-9"> 
            <input type="text" class="form-control" id="inputEmail3" name="category_name"> 
       </div> 
   </div> 
   <div class="form-group row"> 
            <label for="inputPassword3" class="col-sm-3 col-form-label">Category Description</label> 
      <div class="col-sm-9"> 
            <textarea class="form-control" id="inputPassword3" name="category_description"></textarea>
      </div> 
   </div> 
   <div class="form-group row">
             <label class="col-sm-3 col-form-label">Publication Status</label> 
       <div class="col-sm-9"> 
            <input type="radio" name="category_status" value="1">Published 
            <input type="radio" name="category_status" value="0">Unpublished 
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