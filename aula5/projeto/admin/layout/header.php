<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
	<title>Blog</title>

<?php require_once dirname(dirname(__DIR__)).'/include/data/login/db-login.php';
 ?>
<?php if(!isLogged()){header('location:/'.BASEDIR.'admin/login/login.php');} ?>
</head>
<body style="background-color: #64b5f6;">
<nav class="navbar navbar-expand-lg navbar-dark  justify-content-between" style="background-color: green;">
  <a class="navbar-brand" href="<?='/'.BASEDIR.'admin'?>">Blog</a>
	<ul class="navbar-nav">
	  <li class="nav-item active">
	    <a class="nav-link" href="<?='/'.BASEDIR.'admin'?>">Home</a>
	  </li>
	  <li class="nav-item">
	    <a class="nav-link" href="<?='/'.BASEDIR.'admin/posts'?>">Posts</a>
	  </li>
	</ul>
  <a class="btn btn-outline-warning" < a href="<?='/'.BASEDIR.'admin/login/logout.php'?>" role="button">Logout</a>
</nav>
<div style="margin: 25px 100px 25px 100px">

