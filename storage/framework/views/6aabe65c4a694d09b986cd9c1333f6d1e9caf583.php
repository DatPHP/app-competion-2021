<title>App Name - <?php echo $__env->yieldContent('title'); ?></title>
<!-- Custom fonts for this template-->
    <link href="<?php echo e(asset('vendor/fontawesome-free/css/all.min.css')); ?>" rel="stylesheet" type="text/css" >
<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
<!-- Custom styles for this template-->
<link href="<?php echo e(asset('css/sb-admin-2.min.css')); ?>" rel="stylesheet" type="text/css" >
<body id="page-top">

    <!-- Page Wrapper -->
         <div id="wrapper">
            <!-- Sidebar -->
               <?php echo $__env->make('admin.layouts.left_menu_navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <!-- End of Sidebar -->

            <!-- Content Wrapper -->
            <div id="content-wrapper" class="d-flex flex-column">

                  <!-- Main Content -->
                  <div id="content">
                     <!-- Topbar -->
                        <?php echo $__env->make('admin.layouts.top_navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                     <!-- End of Topbar -->

                     <!-- Begin Page Content -->
                     <div class="container-fluid">
                        <?php echo $__env->yieldContent('content'); ?>
                     </div>
                     <!-- /.container-fluid -->

                  </div>
                  <!-- End of Main Content -->

                  <!-- Footer -->
                     <?php echo $__env->make('admin.layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                  <!-- End of Footer -->
            </div>
        <!-- End of Content Wrapper -->

    </div>


    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->


    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>


    <!-- Logout Modal-->


     <?php echo $__env->make('admin.layouts.logout_component', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


    <!-- End of Logout Modal -->

    <!-- Bootstrap core JavaScript-->
    <script src="<?php echo e(URL::asset('vendor/jquery/jquery.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('vendor/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
    <!-- Core plugin JavaScript-->
    <script src="<?php echo e(URL::asset('vendor/jquery-easing/jquery.easing.min.js')); ?>"></script>
    <!-- Custom scripts for all pages-->
    <script src="<?php echo e(URL::asset('js/sb-admin-2.min.js')); ?>"></script>
    <!-- Page level plugins -->
    <script src="<?php echo e(URL::asset('vendor/chart.js/Chart.min.js')); ?>"></script>
    <!-- Page level custom scripts -->
    <script src="<?php echo e(URL::asset('js/demo/chart-area-demo.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('js/demo/chart-pie-demo.js')); ?>"></script>

</body>

</html>

  <?php /**PATH /var/www/html/myshop/resources/views/admin/layouts/default.blade.php ENDPATH**/ ?>