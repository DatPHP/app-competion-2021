<!DOCTYPE html>

<html>

<head>

    <title>laravel 8 image upload example - HDTuto.com.com</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

</head>

    

<body>

<div class="container">

     

    <div class="panel panel-primary">

      <div class="panel-heading"><h2>laravel 8 image upload example - HDTuto.com.com</h2></div>

      <div class="panel-body">

     

        <?php if($message = Session::get('success')): ?>

        <div class="alert alert-success alert-block">

            <button type="button" class="close" data-dismiss="alert">×</button>

                <strong><?php echo e($message); ?></strong>

        </div>

        <img src="<?php echo e(asset('images/'.Session::get('image'))); ?>">


        <?php echo e(Session::get('image')); ?>


        <?php endif; ?>

    

        <?php if(count($errors) > 0): ?>

            <div class="alert alert-danger">

                <strong>Whoops!</strong> There were some problems with your input.

                <ul>

                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                        <li><?php echo e($error); ?></li>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </ul>

            </div>

        <?php endif; ?>

    

        <form action="<?php echo e(route('image.upload.post')); ?>" method="POST" enctype="multipart/form-data">

            <?php echo csrf_field(); ?>

            <div class="row">

    

                <div class="col-md-6">

                    <input type="file" name="image" class="form-control">

                </div>

     

                <div class="col-md-6">

                    <button type="submit" class="btn btn-success">Upload</button>

                </div>

     

            </div>

        </form>

    

      </div>

    </div>

</div>

</body>

  

</html><?php /**PATH /var/www/html/myshop/resources/views/admin/imageUpload.blade.php ENDPATH**/ ?>