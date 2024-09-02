<?php 
error_reporting(0);
session_start();
include_once('connection.php');
if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST['username'];
        $password = $_POST['password'];
		$admin="admin";
if(!empty($name)&& !empty($password)){
        // Prepare SQL statement
		$sql = "SELECT encode(image,'base64')as image ,user_name, password ,users FROM user1 WHERE user_name = '".$name."' AND password ='".$password."'";
		$stmt=pg_query($sql);
		$sas=pg_fetch_object($stmt);
		        if ($sas->users=='public') {
            // Authentication successful, redirect to adminhome.php
			$_SESSION["username"]=$_POST["username"];
			$img= base64_decode($sas->image);
			$_SESSION["image"]=$img;
          header('location:index.php');
			}
				//elseif($stmt=='false')	{
        //$sql = "SELECT user_name, password FROM user1 WHERE user_name = '".$name."' AND password ='".$password."'";
//$stmt=pg_query($sql);
        // Bind parameters
        //$sql->bindParam(':name', $name);
        //$sql->bindParam(':password', $password);

        // Execute query
        //$sql->execute();
		//$fet=$sql->fetch();
//echo "cont=>".$sql->rowCount();
        // Check if a row was returned
elseif ($sas->users=='admin') {
	$_SESSION["username'"]=$name;
            // Authentication successful, redirect to index.php
header('location:adminhome.php');
        } 
		else {
            // Authentication failed
			echo '<script type="text/javascript">';
            echo 'alert("username and password not found");';
			echo '</script>';
       // }
    }
}
else{
echo '<script type="text/javascript">';
            echo 'alert(" enter username and password");';
			echo '</script>';
}
}
?>
<html>
<head>
<link href="mainlogin.css" rel="stylesheet" id="bootstrap-css">
 <link rel="stylesheet" type="text/css" href="style.css">
 <link rel="stylesheet" type="text/css" href="style3.css">
<script src="mainlogin1.js"></script>
<script src="mainlogin2.js"></script>

 <title>Login Page</title>
  
<!--Bootsrap 4 CDN-->
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
 
    <!--Fontawesome CDN-->
 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

 <!--Custom styles-->
 
 <style>

 </style>
</head>
<body>
<div class="container">
 <div class="d-flex justify-content-center h-100">
  <div class="card">
   <div class="card-header">
    <h3>Sign In</h3>
    <div class="d-flex justify-content-end social_icon">
     <span><i class="fab fa-facebook-square"></i></span>
     <span><i class="fab fa-google-plus-square"></i></span>
     <span><i class="fab fa-twitter-square"></i></span>
    </div>
   </div>
   <div class="card-body">
    <form method="post" action="#" name="loginform"  autocomplete="off">
	
     <div class="input-group form-group">
      <div class="input-group-prepend">
       <span class="input-group-text"><i class="fas fa-user"></i></span>
      </div>
      <input type="text" name="username" class="form-control" placeholder="username">
      
     </div>
     <div class="input-group form-group">
      <div class="input-group-prepend">
       <span class="input-group-text"><i class="fas fa-key"></i></span>
      </div>
      <input type="password" name="password" class="form-control" placeholder="password">
     </div>
     <div class="row align-items-center remember">
      <input type="checkbox">Remember Me
     </div>
     <div class="form-group">
      <input type="submit" name="submit" id="submit" value="Login" class="btn float-right login_btn">
     </div>
    </form>
   </div>
   <div class="card-footer">
    <div class="d-flex justify-content-center links">
     Dont have an account?<a href="signup.php">Sign Up</a>
    </div>

    </div>
   </div>
  </div>
 </div>
</div>
</body>
</html>
