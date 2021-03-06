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

  $viewPostQuery=Post::viewPost();

  if (isset($_GET['PostId'])) {
      $PostId=$_GET['PostId'];
      Post::ManagePost($PostId);
  }

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title> View Post </title>
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
            <a class="nav-link" href="../posts/add_post.php">
              <span data-feather="plus-circle"></span>
              Add Post <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="../posts/view_post.php">
              <span data-feather="eye"></span>
              View Post <span class="sr-only">(current)</span>
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

      <div class="container">
      <div class="col-sm-10 ml-auto">
         <div class="card">
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-striped table-sm table-bordered text-center">
                   <tr style="background-color: black;color: white;">
                      <th>SL NO</th>
                      <th>Category</th>
                      <th>Caption</th>
                      <th>Image</th>
                      <th>Short Description</th>
                      <th>Long Description</th>
                      <th>Publication Status</th>
                      <th>Manage</th>
                   </tr>
 <?php
  $x=1;
  while ($viewPostQueryFetch=mysqli_fetch_assoc($viewPostQuery)) { ?>
                   <tr>
                      <td><?php echo $x++;?></td>
                      <td><?php echo $viewPostQueryFetch['category_name']; ?></td>
                      <td><?php echo $viewPostQueryFetch['caption']; ?></td>
                      <td><img src="<?php echo $viewPostQueryFetch['image']; ?>" height="160px" width="170px"></td>
                      <td><textarea style="width: 100%;height: 350px;font-size: 18px;" disabled>
                        <?php echo $viewPostQueryFetch['short_description']; ?></textarea>
                      </td>
                      <td><a href="viewlongdes.php?ViewLongDes=<?php echo $viewPostQueryFetch['id']; ?>">View</a></td>
                      <td><?php if ($viewPostQueryFetch['status']==1) {
                                echo "Published";
                      } else {
                                echo "Unpublished";
                      }
                       ?></td>
                    <td><a href="?PostId=<?php echo $viewPostQueryFetch['id']; ?>">
                        <?php if ($viewPostQueryFetch['status']!=1) {
                                echo "Published";
                      } else {
                                echo "Unpublished";
                      }
                       ?></a></td>
                   </tr>
 <?php } ?>
                </table>
              </div>

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
