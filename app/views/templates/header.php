<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?= $data['title']; ?></title>

	<!-- Bootstrap v4.5 -->
	<link rel="stylesheet" href="<?= BASEURL; ?>/assets/css/bootstrap.min.css">
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
	<div class="container">
	  <a class="navbar-brand" href="#">PHPMVC</a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>
	  <div class="collapse navbar-collapse" id="navbarNav">
	    <ul class="navbar-nav">
	      <li class="nav-item">
	        <a class="nav-link" href="<?= BASEURL; ?>/home">Home</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="<?= BASEURL; ?>/about">About</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="<?= BASEURL; ?>/siswa">Siswa</a>
	      </li>
	    </ul>
	  </div>
	</div>
</nav>