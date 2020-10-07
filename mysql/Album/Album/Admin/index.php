<?php 
  session_start();
  if (isset($_SESSION['id'])) {
      header('Location:dashboard.php');
  }
  require_once '../vendor/autoload.php';
  use App\classes\Login;

  $loginQueryMassage='';
  if (isset($_POST['btn'])) {
      $loginQueryMassage=Login::logIn($_POST);
  }


 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Floating labels example · Bootstrap</title>
    <link href="../vendor/bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="../vendor/css/login.css" rel="stylesheet">
</head>
<body>

   <div class="container">
      <div class="col-sm-6 m-auto">
         <div class="card">
            <div class="card-header text-center"><i><b>Admin Login</b></i></div>
            <div class="card-body">
     <h5 style="color: red;text-align: center;"><?php echo $loginQueryMassage; ?></h5>

                <form class="form-signin" action="" method="post">
                <div class="form-label-group">
                   <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
                   <label for="inputEmail">Email address</label>
               </div>

               <div class="form-label-group">
                  <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>
                  <label for="inputPassword">Password</label>
              </div>
                 <input type="submit" name="btn" class="btn btn-lg btn-primary btn-block" value="Signin">
                 <p class="mt-5 mb-3 text-muted text-center">&copy; 2017-<?php echo date('Y'); ?></p>
            </form>

            <a href="../index.php" style="color: gray;text-decoration: none;"><p class="text-right"><small>I'm not The Admin ..</small></p></a>

            </div>
         </div>
      </div>
   </div>

</body>
</html>
