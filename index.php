<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Login</title>
<meta name="viewport" content="width=device-width, minimum-scale=1, maximum-scale=1"/>
<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" />
<link rel="stylesheet" href="css/login.css" type="text/css" />
<link href="https://fonts.googleapis.com/css?family=Poppins:500,700&display=swap" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body>
<div class="login-temp">
    <div class="card">
        <div class="card-header p-0 mx-auto">
            <nav class="login-nav">
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                    <a class="nav-item nav-link active p-0" id="nav-login-tab" data-toggle="tab" href="#nav-login" role="tab" aria-controls="nav-login" aria-selected="true">Login</a>
                    <a class="nav-item nav-link p-0" id="nav-register-tab" data-toggle="tab" href="#nav-register" role="tab" aria-controls="nav-register" aria-selected="false">Register</a>
                </div>
            </nav>
        </div>
        <!-- end card header -->
        <div class="card-body p-0">
            <div class="tab-content" id="nav-tabContent">
                <!-- start login -->
                <div class="tab-pane fade show active" id="nav-login" role="tabpanel" aria-labelledby="nav-login-tab">
                    <form action="validation.php" method="post">    
                        <div class="form-input">
                            <label for="name" class="text-muted">Name</label>
                            <input type="text" id="name" class="login-input" name="user" required>
                            <label for="password" class="text-muted">Password</label>
                            <input type="password" id="password" class="login-input" name="password" required>
                            <div class="text-center">
                                <input type="submit" value="Login" class="login-btn">
                            </div>
                        </div>
                    </form>
                </div>
                <!-- end login -->
                <!-- start register -->
                <div class="tab-pane fade" id="nav-register" role="tabpanel" aria-labelledby="nav-register-tab">
                    <form action="registration.php" method="post">    
                        <div class="form-input">
                            <label for="user1" class="text-muted">Name</label>
                            <input type="text" id="user1" class="login-input" name="user" required>
                            <label for="pass1" class="text-muted">Password</label>
                            <input type="password" id="pass1" class="login-input" name="password" required>
                            <div class="text-center">
                                <input type="submit" value="Register" class="login-btn">
                            </div>
                        </div>
                    </form>
                </div>
                <!-- end register -->
            </div> 
        </div>
        <!-- end card body -->
    </div>
</div>

</body>
</html>