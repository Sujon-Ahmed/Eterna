  
<?php
    session_start();
    if(isset($_SESSION['id'])){
        header('location:index.php');
    }
    include 'flash_data.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>SB Admin 2 - Register</title>
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <!-- Custom styles for this template-->
    <link rel="stylesheet" href="css/sb-admin-2.css">
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/toastr.css">
    <script src="js/jquery.js"></script>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/toastr.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    <!-- parsley cdn link -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.9.2/parsley.js" integrity="sha512-Fq/wHuMI7AraoOK+juE5oYILKvSPe6GC5ZWZnvpOO/ZPdtyA29n+a5kVLP4XaLyDy9D1IBPYzdFycO33Ijd0Pg==" crossorigin="anonymous"></script>
    <style>
        .parsley-errors-list li{
            color: red;
            display: block;
            width: 100%;
            
            padding-top: 10px;
        }
    </style>
</head>

<body class="bg-gradient-primary">

    <div class="container">
          <!-- toastr error message -->
          <?php
            if(isset($_SESSION['msg']['error'])){
                ?>
                        <script>
                            toastr.error("<?php echo Flash_data::show_error(); ?>");
                        </script>
                    <?php
                }
            ?>
        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block bg-register-img"></div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                            </div>
                            <form action="create_account.php" method="POST" id="reg" class="user" data-parsley-validate>
                                <div class="form-group">
                                    <input name="name" class="form-control form-control-user" id="inputFirstName" type="text" data-parsley-error-message="Enter Your Valid Name"data-parsley-pattern="[a-zA-Z ]+$" data-parsley-trigger="keyup" required placeholder="Enter your first name" />
                                   
                                </div>
                                <div class="form-group">
                                    <input name="email" class="form-control form-control-user" id="inputEmail" type="email" required data-parsley-type="email" data-parsley-trigger="keyup" required data-parsley-error-message="Enter Your Valid Email" placeholder="name@example.com" />
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input name="password" class="form-control form-control-user" id="inputPassword" required data-parsley-trigger="keyup" data-parsley-minlength="6" type="password" placeholder="Create a password" />
                                    </div>
                                    <div class="col-sm-6">
                                        <input name="con_password" class="form-control form-control-user" data-parsley-trigger="keyup" id="inputPasswordConfirm" type="password" required data-parsley-minlength="6" data-parsley-equalto="#inputPassword"placeholder="Confirm password" >
                                    </div>
                                </div>
                                <input type="submit" name="submit" value="Register Account" class="btn btn-primary btn-user btn-block">
                                <hr>
                            </form>
                            <div class="text-center">
                                <a class="small" href="login.php">Already have an account? Login!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>

    <script>
        $(function(){
            $('#reg').parsley();
        });
    </script>

</body>

</html>