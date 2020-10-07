<?php 
   session_start();

   if ($_SESSION['id']==null) { 
         header('Location:index.php');
   }
  require_once '../classes/blog-class.php'; 
  

  $id=$_GET['id'];
  $blog=new Blog();
  $editQuery=$blog-> editBlog($id);
  $editQueryFetch=mysqli_fetch_assoc($editQuery);


  if (isset($_POST['btn'])) {     
        $blog=new Blog();
        $blog-> updateBlog($_POST);
  }

   $blog=new Blog();
 $selectAllPubCatInQuery=$blog->getAllPublishedCategoryInfo();


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
            <select name="blog_name">
              <option disabled selected>--Select Blog Name--</option>
<?php while ($selectAllPubCatInQueryFetch=mysqli_fetch_assoc($selectAllPubCatInQuery)) { ?>
              <option value="<?php echo $selectAllPubCatInQueryFetch['category_id']; ?>"><?php echo $selectAllPubCatInQueryFetch['category_name']; ?></option>
<?php } ?>
            </select>
       </div> 
   </div> 
   <div class="form-group row"> 
            <label for="inputPassword3" class="col-sm-4 col-form-label">Blog Title</label> 
      <div class="col-sm-8"> 
            <input type="text" class="form-control" name="blog_title" value="<?php echo $editQueryFetch['blog_title']; ?>">
            <input type="hidden" name="blog_id" value="<?php echo $editQueryFetch['blog_id']; ?>"> 
      </div> 
   </div> 
   <div class="form-group row"> 
            <label for="inputPassword3" class="col-sm-4 col-form-label">Short Description</label> 
      <div class="col-sm-8"> 
            <textarea class="form-control" name="short_description"><?php echo $editQueryFetch['short_description']; ?>
            </textarea>
      </div> 
   </div> 
   <div class="form-group row"> 
            <label for="inputPassword3" class="col-sm-4 col-form-label">Long Description</label> 
      <div class="col-sm-8"> 
            <textarea class="form-control" name="long_description"><?php echo $editQueryFetch['long_description']; ?>
            </textarea>
      </div> 
   </div> 
   <div class="form-group row"> 
            <label for="inputPassword3" class="col-sm-4 col-form-label">Blog Image</label> 
      <div class="col-sm-8"> 
            <input type="file" name="blog_image" accept="image/*">
      </div> 
   </div> 
   <div class="form-group row">
             <label for="inputEmail3" class="col-sm-4 col-form-label">Publication Status</label> 
       <div class="col-sm-8"> 
            <input type="radio" name="publication_status" value="1">Published 
            <input type="radio" name="publication_status" value="0">Unpublished 
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