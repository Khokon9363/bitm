<?php 
   session_start();
   
   if ($_SESSION['id']==null) {  
   	     header('Location:index.php');
   }

  require_once '../classes/category-class.php';
  
  $viewQuery='';
  $category=new Category();
  $viewQuery=$category->viewCategory();

  
  $delmassage='';
  if (isset($_GET['delete'])) {           
           $id=$_GET['id'];
           $category=new Category();
           $delmassage=$category->deleteCategory($id);
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

<h4 style="color: red;text-align: center;"><?php echo $delmassage; ?></h4>

 <div class="container" style="margin-top: 20px;">
    <div class="row">
      <div class="col-sm-10 mx-auto">
        <div class="card">
          <div class="card-body">

    <table class="table table-striped table-success"> 
  <thead> 
    <tr> 
      <th scope="col">SL NO</th> 
      <th scope="col">Category Name</th> 
      <th scope="col">Category Discription</th> 
      <th scope="col">Publication Status</th>
      <th scope="col">Action</th> 
    </tr> 
  </thead> 
<?php while ($viewFromdatabase=mysqli_fetch_assoc($viewQuery)) { ?>
  <tbody> 
    <tr> 
      <th scope="row"><?php echo $viewFromdatabase['category_id']; ?></th> 
      <td><?php echo $viewFromdatabase['category_name']; ?> </td> 
      <td><?php echo $viewFromdatabase['category_description']; ?> </td> 
      <td align="center"><?php echo $viewFromdatabase['category_status']; ?> </td>
      <td>
        <a href="edit-category.php?id=<?php echo $viewFromdatabase['category_id']; ?>php">Edit</a>
        <a href="?delete=true&id=<?php echo $viewFromdatabase['category_id']; ?>" onclick="return confirm('Are you sure to delete this Informations ?') ">Delete</a>
      </td> 
    </tr> 
    
  </tbody> 
<?php } ?>
</table>


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