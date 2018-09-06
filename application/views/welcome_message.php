<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/bootstrap.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/all.css') ?>">
    <style type="text/css">
	p.footer {
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}
    </style>

</head>
<body style="padding-top: 5rem">
    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
      <a class="navbar-brand" href="<?= base_url() ?>">CIP</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="#">Disabled</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="<?= base_url() ?>" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
            <div class="dropdown-menu" aria-labelledby="dropdown01">
              <a class="dropdown-item" href="#">Action</a>
              <a class="dropdown-item" href="#">Another action</a>
              <a class="dropdown-item" href="#">Something else here</a>
            </div>
          </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
      </div>
    </nav>

    <main role="main" class="container">

      <div>
      	<h1>Hello, Buddy!</h1>
      	<p>The page you are looking at is being generated dynamically by CodeIgniter Integrated Pack.</p>

		<p>If you are exploring CodeIgniter for the very first time, you should start by reading the <b>User Guide</b>.</p>
		<div class="card">
		  <div class="card-body">
		  	<h5 id="card-title"><i class="fas fa-user-tie"></i>&nbsp;User Guide</h5>
		  	<p class="card-text">This packages included: </p>
		  	<ul>
		  		<li>Codeigniter 3.1.9</li>
		  		<li>Bootstrap 4.0.0</li>
		  		<li>FontAwesome 5.3.1</li>
		  	</ul>
		  	<p class="card-text">You can click the link below to start reading the user guide for each package.</p>
		  	<a href="https://www.codeigniter.com/user_guide/index.html" class="card-link" data-toggle="tooltip" data-placement="top" title="Codeigniter v3.1.9">Codeigniter</a>
		  	<a href="https://getbootstrap.com/docs/4.0/getting-started/introduction/" class="card-link" data-toggle="tooltip" data-placement="top" title="Bootstrap v4.0">Bootstrap</a>
		  	<a href="https://fontawesome.com/how-to-use/on-the-web/referencing-icons/basic-use" class="card-link" data-toggle="tooltip" data-placement="top" title="FontAwesome v5.3.1">FontAwesome</a>

		  </div>

		</div>

      </div>
      <p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds.</p>

    </main><!-- /.container -->
<!-- JS loads -->
<script src="<?= base_url('assets/js/jquery-3.3.1.js') ?>"></script>
<script src="<?= base_url('assets/js/popper.min.js') ?>"></script>
<script src="<?= base_url('assets/js/bootstrap.js') ?>"></script>
<script type="text/javascript">
	$(document).ready(function() {
	  $('[data-toggle="tooltip"]').tooltip()
	});
</script>
</body>
</html>