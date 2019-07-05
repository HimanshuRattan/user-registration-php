<?php
session_start();
if(!isset($_SESSION['username'])){
    header('location:index.php');
}
?>
<html>
<head>
<meta name="viewport" content="width=device-width, minimum-scale=1, maximum-scale=1"/>
<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" />
<link rel="stylesheet" href="css/home.css" type="text/css" />
<link href="https://fonts.googleapis.com/css?family=Poppins:500,700&display=swap" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<title>Home</title>
</head>
<body>

<!-- start navbar -->
<nav class="navbar navbar-expand-md navbar-dark bg-primary">
    <a class="navbar-brand abs" href="home.php">Welcome <?php echo $_SESSION['username'];?> </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsingNavbar">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="navbar-collapse collapse" id="collapsingNavbar">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a href="logout.php" class="nav-link">Logout</a>
            </li>
        </ul>
    </div>
</nav>
<!-- end navbar -->
<div class="container">
<!-- buttons -->
    <button type="button" class="btn btn-primary">Primary</button>
    <button type="button" class="btn btn-secondary">Secondary</button>
    <button type="button" class="btn btn-success">Success</button>
    <button type="button" class="btn btn-danger">Danger</button>
    <button type="button" class="btn btn-warning">Warning</button>
    <button type="button" class="btn btn-info">Info</button>
    <button type="button" class="btn btn-light">Light</button>
    <button type="button" class="btn btn-dark">Dark</button>
    <button type="button" class="btn btn-link">Link</button>
<!-- end buttons -->
<!-- start alerts -->
    <h3 class="mt-lg mb-4">
        <span>Alerts</span>
    </h3>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      <span class="alert-inner--icon"><i class="ni ni-like-2"></i></span>
      <span class="alert-inner--text"><strong>Success!</strong> This is a success alert—check it out!</span>
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div class="alert alert-info alert-dismissible fade show" role="alert">
      <span class="alert-inner--icon"><i class="ni ni-bell-55"></i></span>
      <span class="alert-inner--text"><strong>Info!</strong> This is an info alert—check it out!</span>
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
      <span class="alert-inner--icon"><i class="ni ni-bell-55"></i></span>
      <span class="alert-inner--text"><strong>Warning!</strong> This is a warning alert—check it out!</span>
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
      <span class="alert-inner--icon"><i class="ni ni-support-16"></i></span>
      <span class="alert-inner--text"><strong>Danger!</strong> This is an error alert—check it out!</span>
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <!-- end alerts -->
</div>
<!-- end container -->

<!-- start footer -->
<footer class="footer fixed-bottom">
    <hr>
    <div class="row align-items-center justify-content-md-between">
        <div class="col-md-6">
            &copy; 2019
            <a href="https://www.himanshuweb.ml/" target="_blank">Himanshu</a>
        </div>
        <div class="col-md-6">
            <ul class="nav nav-footer justify-content-end">
                <li class="nav-item">
                    <a href="https://getbootstrap.com/docs/4.1/getting-started/introduction/" class="nav-link">Bootstrap</a>
                </li>
                <li class="nav-item">
                    <a href="http://www.srmuniv.ac.in/" class="nav-link">SRM</a>
                </li>
                <li class="nav-item">
                    <a href="" class="nav-link disabled">CDATS</a>
                </li>
                <li class="nav-item">
                    <a href="https://github.com/HimanshuRattan" class="nav-link" target="_blank">Github</a>
                </li>
            </ul>
        </div>
      </div>
    </div>
  </footer>
<!-- end footer -->
</body>
</html>