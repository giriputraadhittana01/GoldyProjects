<style type='text/css'>
.spanLink:hover{
    color:#FFA500;
}
.carousel-item {
  height: 100px;
  min-height: 350px;
  background: no-repeat center center scroll;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}
#content {
  width: 50%;
  float: left;
  padding: 10px;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}
#result{
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}
.result-content {
  width: 48%;
  float: right;
  padding: 10px;
}
.input-group.mb-3 {
  width: 50%;
}
body {
  margin-bottom: 50px;
  height: 1000px;
  width : 100%; 
}

</style>

<!DOCTYPE html>
<html lang="en">
<head>  
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?=base_url();?>assets/css/bootstrap.css">
    <link rel="stylesheet" href="<?=base_url();?>assets/css/animate.css">
    <script src="<?=base_url();?>assets/js/jquery.js"></script>
    <script src="<?=base_url();?>assets/js/popper.js"></script>
    <script src="<?=base_url();?>assets/js/bootstrap.js"></script>
    <script src="<?=base_url();?>assets/js/jquery.mask.js"></script>
    <script src="<?=base_url();?>assets/js/sweetalert.js"></script>
    <script src="<?=base_url();?>assets/script/functionGlobal.js"></script>
    <title>Documents</title>
</head>
<body>
  <!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
  <div class="container">
    <a class="navbar-brand" href="#">LOGO</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="<?=site_url("Login/index");?>">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?=site_url("Register/index");?>">Register</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?=site_url("Guest/index");?>">Services</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?=site_url("Guest/index");?>">Contact</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
   
                                               