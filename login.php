<?php
    include_once "Model/Handle/HandleLogin.php";
?>
<?php
    $login = new Handle_Login();
    if($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        $username = $_POST['Username'];
        $password = $_POST['Password'];

        $login_check = $login->login($username, $password);

    }
    
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Login DUT-Events</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description">
        <meta content="Coderthemes" name="author">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets\images\favicon.ico">

        <!-- App css -->
        <link href="assets\css\bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="assets\css\icons.min.css" rel="stylesheet" type="text/css">
        <link href="assets\css\app.min.css" rel="stylesheet" type="text/css">

    </head>

    <body>

        <div class="account-pages mt-5 mb-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-5">
                        <div class="card">

                            <div class="card-body p-4">
                                
                                <div class="text-center w-75 m-auto">
                                    <a href="index.html">
                                        <span><img src="assets\images\logo-dark.png" alt="" height="22"></span>
                                    </a>
                                    <p class="text-muted mb-4 mt-3">Enter your email address and password to access webside Event-DUT.</p>
                                </div>

                                <form action="login.php" method="POST">

                                    <div class="form-group mb-3">
                                        <label >Username</label>
                                        <input class="form-control" type="text" name="Username"  placeholder="Enter your email" />
                                    </div>

                                    <div class="form-group mb-3">
                                        <label >Password</label>
                                        <input class="form-control" type="password"  name="Password" placeholder="Enter your password" />
                                    </div>
                                    <span>
                                        <?php
                                            if(isset($login_check))
                                            {
                                                echo $login_check;
                                            }
                                        ?>
                                    </span>
                                    <div class="form-group mb-0 text-center">
                                        <input class="btn btn-primary btn-block" type="submit" value="Log In" /> 
                                    </div>

                                </form>

                            </div> <!-- end card-body -->
                        </div>
                        <!-- end card -->

                        <div class="row mt-3">
                            <div class="col-12 text-center">
                                <p> <a href="pages-recoverpw.html" class="text-muted ml-1">Forgot your password?</a></p>
                                <p class="text-muted">Don't have an account? <a href="pages-register.html" class="text-primary font-weight-medium ml-1">Sign Up</a></p>
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->

                    </div> <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end page -->


        <footer class="footer footer-alt">
            2016 - 2019 &copy; Minton theme by <a href="" class="text-muted">Coderthemes</a> 
        </footer>

        <!-- Vendor js -->
        <script src="assets\js\vendor.min.js"></script>

        <!-- App js -->
        <script src="assets\js\app.min.js"></script>
        
    </body>
</html>