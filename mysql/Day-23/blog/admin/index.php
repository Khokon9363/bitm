<?php 
  
  session_start();
  if (isset($_SESSION['id'])) {
        
        header('Location:dashboard.php');
  }

 require_once '../classes/login-class.php';

 $login=new Login();
 $massage='';

 if (isset($_POST['btn'])) {
        
      $massage=$login->adminLogin($_POST);
 }
 




 ?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Admin Login</title>
	<link rel="stylesheet" type="text/css" href="../vendor/bootstrap/css/bootstrap.min.css">
</head>
<body>
	<div class="container" style="margin-top: 200px;">
		<div class="row">
			<div class="col-sm-6 mx-auto">
				<div class="card">
          <div class="card-title">
             <p align="center"><i><b>Admin Pannel</b></i></p>
          </div>
					<div class="card-body">
<h3 style="color: red;"><?php echo $massage; ?></h3>

<form action="" method="POST">
   <div class="form-group row">
             <label for="inputEmail3" class="col-sm-3 col-form-label">Email</label> 
       <div class="col-sm-9"> 
            <input type="email" class="form-control" id="inputEmail3" name="email"> 
       </div> 
   </div> 
   <div class="form-group row"> 
            <label for="inputPassword3" class="col-sm-3 col-form-label">Password</label> 
      <div class="col-sm-9"> 
            <input type="password" class="form-control" id="inputPassword3" name="password"> 
      </div> 
   </div> 

   <div class="form-group row">
      <div class="col-sm-3"></div> 
      <div class="col-sm-9"> 
            <button type="submit" class="btn btn-success btn-block" name="btn">Sign in</button> 
      </div> 
  </div> 
</form>

					</div>
				</div>
			</div>
		</div>
	</div>

</body>
</html>