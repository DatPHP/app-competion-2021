

<!-- Custom fonts for this template-->
    <link href="<?php echo e(asset('vendor/fontawesome-free/css/all.min.css')); ?>" rel="stylesheet" type="text/css" >
<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
<!-- Custom styles for this template-->
<link href="<?php echo e(asset('css/sb-admin-2.min.css')); ?>" rel="stylesheet" type="text/css" >

  <title>SB Admin 2 - <?php echo $__env->yieldContent('title'); ?></title>

<!------ Include the above in your HEAD tag ---------->
        <!--===================   Header   =======================-->

      <header class="header">
         <?php echo $__env->make('admin.layouts.top_navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      </header>

      <div class="main">
         <div class="row" id="allocate_dashboard"> 
            <div class="col-2">
               <!------ left menu ------> 

               <?php echo $__env->make('admin.layouts.left_navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            </div>
            <div class="col-10">
                <?php echo $__env->yieldContent('content'); ?>
            </div>
          </div> 
      </div>
 <script type="text/javascript" src="<?php echo e(URL::asset('js/dashboard_home.js')); ?>"></script>
  <?php /**PATH /var/www/html/myshop/resources/views/admin/layouts/default.blade.php ENDPATH**/ ?>