
<title>Customer- Register</title>
<!-- Custom fonts for this template-->
    <link href="<?php echo e(asset('vendor/fontawesome-free/css/all.min.css')); ?>" rel="stylesheet" type="text/css" >
<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
<!-- Custom styles for this template-->
<link href="<?php echo e(asset('css/sb-admin-2.min.css')); ?>" rel="stylesheet" type="text/css" >

<body class="bg-gradient-primary">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                            </div>

                            <form class="user" method="POST" action="<?php echo e(route('register')); ?>">

                                <?php echo csrf_field(); ?>
                                <div class="form-group">

                                            <input type="name" name="name" class="form-control form-control-user"
                                                id="name" aria-describedby="emailHelp"
                                                placeholder="Enter username..">
                                </div>
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control form-control-user" id="exampleInputEmail"
                                        placeholder="Enter Email Address...">
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="password" name ="password" class="form-control form-control-user"
                                            id="password" placeholder="Password">
                                    </div>

                                    <!-----
                                    <div class="col-sm-6">
                                        <input type="password" class="form-control form-control-user"
                                            id="password" placeholder="Repeat Password">
                                    </div>
                                    ------>
                                </div>
                                <div class="text-center">
                                          <button type="submit" class="btn btn-outline-primary">  Register Account </button>
                                </div>


                                <hr>
                                <a href="index.html" class="btn btn-google btn-user btn-block">
                                    <i class="fab fa-google fa-fw"></i> Register with Google
                                </a>
                                <a href="index.html" class="btn btn-facebook btn-user btn-block">
                                    <i class="fab fa-facebook-f fa-fw"></i> Register with Facebook
                                </a>
                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="forgot-password.html">Forgot Password?</a>
                            </div>
                            <div class="text-center">
                                <a class="small" href="/login">Already have an account? Login!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

     <!-- Bootstrap core JavaScript-->
     <script type="text/javascript" src="<?php echo e(URL::asset('vendor/jquery/jquery.min.js')); ?>"></script>
     <script type="text/javascript" src="<?php echo e(URL::asset('vendor/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
    <!-- Core plugin JavaScript-->
    <script type="text/javascript" src="<?php echo e(URL::asset('vendor/jquery-easing/jquery.easing.min.js')); ?>"></script>
    <!-- Custom scripts for all pages-->
    <script type="text/javascript" src="<?php echo e(URL::asset('js/sb-admin-2.min.js')); ?>"></script>

</body>





<?php /**PATH /var/www/html/myshop/resources/views/user/auth/register.blade.php ENDPATH**/ ?>