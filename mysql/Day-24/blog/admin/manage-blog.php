<?php 
   session_start();
   
   if ($_SESSION['id']==null) {     
   	     header('Location:index.php');
   }
  require_once '../classes/blog-class.php';
  
  $blog=new Blog();
  $viewQuery=$blog->viewBlog();

  
  $delBlogMassage='';
  if (isset($_GET['delete'])) {
           
           $id=$_GET['id'];
           $blog=new Blog();
           $delBlogMassage=$blog->deleteBlog($id);
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

<h3 style="color: red;text-align: center;"><?php echo $delBlogMassage; ?></h3>

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
 <?php while ($viewQueryFetch=mysqli_fetch_assoc($viewQuery)) { ?>
  <tbody> 
    <tr> 
      <th scope="row"><?php echo $viewQueryFetch['blog_id']; ?></th> 
      <td><?php echo $viewQueryFetch['blog_name']; ?></td> 
      <td><?php echo $viewQueryFetch['blog_title']; ?></td> 
      <td><?php echo $viewQueryFetch['short_description']; ?></td>
      <td><?php echo $viewQueryFetch['long_description']; ?></td>
      <td><?php echo $viewQueryFetch['publication_status']; ?></td>
      <td>
        <a href="edit-blog.php?id=<?php echo $viewQueryFetch['blog_id']; ?>php">Edit</a>
        <a href="?delete=true&id=<?php echo $viewQueryFetch['blog_id']; ?>" onclick="return confirm('Are you sure to delete this Informations ?') ">Delete</a>
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