<?php 
    session_start();
    require('db_class.php');
    $obj = new Db_Class();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>SAMPLE WEB PAGE </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="index1.css">
  
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #f2f2f2;
      padding: 25px;
    }
  </style>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#"> USER DATABASE</a></div>
	  <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav"></ul>
<form action="footer.php" method="post">
  <span class="glyphicon glyphicon-plus-sign"></span>
<input type="submit" class="btn btn-primary pull-right" name="logout" value="Logout" style="margin-top:10px;"><br>
</form>  
  </div>
 
  </div>
</nav>