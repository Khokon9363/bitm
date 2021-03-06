<?php 
  session_start();
  if (isset($_SESSION['id'])==null ){
      header('Location:../index.php');
  }
  require_once '../../vendor/autoload.php';
  use App\classes\Login;
  use App\classes\Setting;
  use App\classes\Post;
  
  if (isset($_GET['id'])) {
      $id=$_SESSION['id'];
      Login::logOutFromAll($id);
  }

  $viewSiteInfoQuery='';
  $viewSiteInfoQuery=Setting::viewSiteInfo();
  $viewSiteInfoQueryFetch=mysqli_fetch_assoc($viewSiteInfoQuery);

  $viewUsersInfoQuery='';
  $viewUsersInfoQuery=Setting::viewUsersInfo();
  $viewUsersInfoQueryFetch=mysqli_fetch_assoc($viewUsersInfoQuery);
  
  $addPostMassage='';
  if (isset($_POST['btn'])) {
      $addPostMassage=Post::addPost($_POST);
  }

  $viewPublishedCategoryQuery=Post::viewPublishedCategory();

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title> Add Post </title>
    <link href="../../vendor/bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="../../vendor/css/dashboard.css" rel="stylesheet">
</head>
<body>

   <nav class="navbar navbar-light sticky-top bg-light flex-md-nowrap p-0 shadow">
      <a class="navbar-brand col-md-3 col-lg-2 mr-0 px-3" style="color: white;" href="../dashboard.php">
       
        <svg xmlns="http://www.w3.org/2000/svg" style="margin-top: -10px;" width="30" height="30" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" aria-hidden="true" class="mr-2" viewBox="0 0 24 24" focusable="false"><path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"/><circle cx="12" cy="13" r="4"/></svg>
        <strong style="font-size: 26px;"> <?php echo $viewSiteInfoQueryFetch['site_name']; ?> </strong>
    
      </a>
      <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-toggle="collapse" data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <h1><?php echo $viewUsersInfoQueryFetch['name']; ?></h1>
  <ul class="navbar-nav px-3">
    <li class="nav-item text-nowrap"><a class="nav-link" href="?id=<?php echo $_SESSION['id']; ?>">
     <span data-feather="log-out"></span>
    Sign out</a></li>
  </ul>
   </nav>

<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="sidebar-sticky pt-3">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link" href="../dashboard.php">
              <span data-feather="home"></span>
              Dashboard 
            </a>
          </li><span style="border-bottom: 1px dashed black;"></span>
          <li class="nav-item">
            <a class="nav-link" href="../categorys/add_category.php">
              <span data-feather="plus-circle"></span>
              Add Categorys 
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../categorys/view_category.php">
              <span data-feather="eye"></span>
              View Categorys 
            </a>
          </li><span style="border-bottom: 1px dashed black;"></span>
          <li class="nav-item">
            <a class="nav-link active" href="../posts/add_post.php">
              <span data-feather="plus-circle"></span>
              Add Post <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../posts/view_post.php">
              <span data-feather="eye"></span>
              View Post
            </a>
          </li><span style="border-bottom: 1px dashed black;"></span>
          <li class="nav-item">
            <a class="nav-link" href="../sliders/add_slider.php">
              <span data-feather="plus-circle"></span>
              Add Slider
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../sliders/view_slider.php">
              <span data-feather="eye"></span>
              View Slider
            </a>
          </li><span style="border-bottom: 1px dashed black;"></span>
        </ul>

        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
          <span>Settings</span>
          <a class="d-flex align-items-center text-muted" href="#" aria-label="Add a new report">
            <span data-feather="settings"></span>
          </a>
        </h6>
        <ul class="nav flex-column mb-2">
          <li class="nav-item">
            <a class="nav-link" href="../settings/change_name.php">
              <span data-feather="user"></span>
              Change Website Name
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../settings/change_email.php">
              <span data-feather="at-sign"></span>
              Change Email
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../settings/change_password.php">
              <span data-feather="lock"></span>
              Change Password
            </a>
          </li>
        </ul>
      </div>
    </nav>

     <div class="container" style="margin-top: 60px;">
      <div class="col-sm-8 m-auto">
        <h3 class="text-center text-success"><?php echo $addPostMassage; ?></h3>
         <div class="card">
            <div class="card-header text-center"><h3><i><b>Add a Post</b></i></h3></div>
            <div class="card-body">

              <form action="" method="post" enctype="multipart/form-data">
                 <div class="form-group">
                   <h5> Choose a Category : </h5>
                   <select name="category_name" class="form-control" required style="border-bottom: 1px solid black;">
                      <option disabled selected>--Choose a Category--</option>

<?php while ($viewPublishedCategoryQueryFetch=mysqli_fetch_assoc($viewPublishedCategoryQuery)) { ?>
        <option value="<?php echo $viewPublishedCategoryQueryFetch['category_name']; ?>"><?php echo $viewPublishedCategoryQueryFetch['category_name']; ?></option>
<?php } ?>
                   </select>
                 </div>
                 <div class="form-group">
                   <h5> Choose a Image : </h5> <input type="file" name="image" required style="border-bottom: 1px solid black;">
                 </div>
                 <div class="form-group" style="border-bottom: 1px solid black;">
                    <h5> Choose a Caption : </h5>
                    <input type="text" name="caption" class="form-control" placeholder="Choose a caption" required>
                 </div>
                 <div class="form-group" style="border-bottom: 1px solid black;">
                  <h5> Choose a Short Description : </h5>
                    <textarea class="form-control" name="short_description"></textarea>
                 </div>
                 <div class="form-group" style="border-bottom: 1px solid black;">
                  <h5> Choose a Long Description : </h5>
                    <textarea class="form-control" name="long_description"></textarea>
                 </div>
                 <div class="form-group">
                  <h4>  <input type="radio" name="status" value="1"> Published <br>
                    <input type="radio" name="status" value="0"> Unpublished </h4>
                 </div>
                 <div class="form-group">
                    <input type="submit" name="btn" class="btn btn-lg btn-primary btn-block" value="Add Post">
                 </div>
            </form>

            </div>
         </div>
      </div>
   </div>


  </div>
</div>


     <script src="../../vendor/bootstrap/js/jquery.js"></script>
     <script src="../../vendor/bootstrap/js/bootstrap.js"></script>
     <script src="../../vendor/js/feather.min.js"></script>
     <script src="../../vendor/js/dashboard.js"></script>
</body>
</html>
