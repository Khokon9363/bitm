<?php 
  require_once 'vendor/autoload.php';
  use App\classes\Category;
  use App\classes\Setting;
  use App\classes\Post;

  $viewPublishedCategoryQuery='';
  $viewPublishedCategoryQuery=Category::viewPublishedCategory();

  $viewSiteInfoQuery='';
  $viewSiteInfoQuery=Setting::viewSiteInfo();
  $viewSiteInfoQueryFetch=mysqli_fetch_assoc($viewSiteInfoQuery);

  $viewPublishedPostQuery=Post::viewPublishedPost();

  if (isset($_GET['viewit'])) {
      $viewit=$_GET['viewit'];
      $viewOneQuery=Post::viewOne($viewit);
      $viewOneQueryFetch=mysqli_fetch_assoc($viewOneQuery);
  }


 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title> Super Shop </title>
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="vendor/css/album.css">
</head>
<body>
          <!-- Dropdown -->
<header class="sticky-top">
 <!--  <div class="collapse bg-light" id="navbarHeader">
    <div class="container">
      <div class="row">
        <div class="col-sm-4 py-4">
          <ul class="list-unstyled">
            <h3><li><a href="admin/index.php"> Login </a></li></h3>
          </ul>
        </div>
      </div>
    </div>
  </div> -->
  <div class="navbar navbar-light bg-light shadow-sm">
    <div class="container d-flex justify-content-between">
      <a href="index.php" class="navbar-brand d-flex align-items-center">
        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="35" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" aria-hidden="true" class="mr-2" viewBox="0 0 24 24" focusable="false"><path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"/><circle cx="12" cy="13" r="4"/></svg>
        <strong style="font-size: 30px;"> <?php echo $viewSiteInfoQueryFetch['site_name']; ?> </strong>
      </a>
     <!--  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader">
        <span class="navbar-toggler-icon"></span> 
      </button> -->
      <a href="admin/index.php"><button type="button" class="btn btn-lg btn-info">Login</button></a> 
    </div>
  </div>
</header>

           <!-- Navbar Link -->
<div class="container">
<div class="py-1 mb-2">
    <nav class="nav d-flex justify-content-between">
      <a class="p-2 text-muted" href="index.php">Home</a>
<?php while ($viewPublishedCategoryQueryFetch=mysqli_fetch_assoc($viewPublishedCategoryQuery)) { ?>
      <a class="p-2 text-muted" href="ViewDetails.php?detailsName=<?php echo $viewPublishedCategoryQueryFetch['category_name']; ?>"><?php echo $viewPublishedCategoryQueryFetch['category_name']; ?></a>
<?php } ?>
    </nav>
  </div>
</div>

                     <!-- Carousel -->
<main role="main">

                           <!-- Card -->
  <div class="py-5 bg-light">
    <div class="container">
      <div class="row">

        <div class="col-md-12">
          <div class="card mb-10 m-auto shadow-sm">
            <img src="admin/posts/<?php echo $viewOneQueryFetch['image']; ?>" style="height: 650px;"><br>
            <div class="card-title">
               <h3 class="text-center mb-0"><?php echo $viewOneQueryFetch['caption']; ?></h3>
            </div><span style="border-bottom: 1px solid gray;"></span>
            <div class="card-body">
              <p class="card-text text-center" style="font-size: 30px;"><?php echo $viewOneQueryFetch['short_description']; ?></p> <hr>
              <p class="card-text text-center" style="font-size: 30px;"><?php echo $viewOneQueryFetch['long_description']; ?></p> <hr>
              <div class="d-flex justify-content-between align-items-center">
                <small class="text-muted text">9 mins ago</small>
              </div>
            </div>
          </div>
        </div>


      </div>
    </div>
  </div>

</main>

<footer class="text-muted">
  <div class="container">
    <p class="float-right btn btn-md btn-success"><a href="#" style="color: white;">Back to top</a></p>
    <p class="text-center"> &copy; 2017-<?php echo date('Y'); ?> Album Company, Inc. </p>
  </div>
</footer>

   <script src="vendor/bootstrap/js/jquery.js"></script>
   <script src="vendor/bootstrap/js/popper.js"></script>
   <script src="vendor/bootstrap/js/bootstrap.js"></script>
</body>
</html>
