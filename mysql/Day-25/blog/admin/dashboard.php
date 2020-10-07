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


 <h1 align="center" class="display-1" style="letter-spacing: 20px;margin-top: 170px;font-weight: bolder;font-style: italic;">Hello Sir !</h1>

 <script src="../vendor/jquery/jquery.min.js"></script>
  <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script type="text/javascript" src="../vendor/bootstrap.js"></script>
</body>
</html>