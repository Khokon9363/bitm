<?php 
   session_start();
   
   if ($_SESSION['id']==null) {
   	     
   	     header('Location:index.php');
   }

  require_once '../classes/login-class.php';

  $login=new Login();

  if (isset($_GET['logout'])) {	   
  	   $login->adminLogout();
  }

  
  $queryResult='';
  $queryResult=$login->viewBlog();

  
  $delmassage='';
  if (isset($_GET['delete'])) {
           
           $id=$_GET['id'];
           $login=new Login();
           $delmassage=$login->deleteBlog($id);
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

<h3 style="color: red;text-align: center;"><?php echo $delmassage; ?></h3>

 <div class="container" style="margin-top: 20px;">
    <div class="row">
      <div class="col-sm-10 mx-auto">
        <div class="card">
          <div class="card-body">

    <table class="table table-striped table-success"> 
  <thead> 
    <tr> 
      <th scope="col">SL NO</th> 
      <th scope="col">Blog Name</th> 
      <th scope="col">Blog Title</th> 
      <th scope="col">Short Description</th>
      <th scope="col">Long Description</th>
      <th scope="col">Publication Status</th>
      <th scope="col">Action</th> 
    </tr> 
  </thead> 
 <?php while ($login=mysqli_fetch_assoc($queryResult)) { ?>
  <tbody> 
    <tr> 
      <th scope="row"><?php echo $login['id']; ?></th> 
      <td><?php echo $login['name']; ?></td> 
      <td><?php echo $login['title']; ?></td> 
      <td><?php echo $login['shortdescription']; ?></td>
      <td><?php echo $login['longdescription']; ?></td>
      <td><?php echo $login['status']; ?></td>
      <td>
        <a href="edit-blog.php?id=<?php echo $login['id']; ?>php">Edit</a>
        <a href="?delete=true&id=<?php echo $login['id']; ?>" onclick="return confirm('Are you sure to delete this Informations ?') ">Delete</a>
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