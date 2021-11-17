<!DOCTYPE html>
<html>
<head>
  <title>Laravel 8 Uploading Image</title>
 
  <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
 
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
 
</head>
<body>
 
<div class="container mt-5">
 
  <?php if(session('status')): ?>
    <div class="alert alert-success">
        <?php echo e(session('status')); ?>

    </div>
  <?php endif; ?>
 
  <div class="card">
 
    <div class="card-header text-center font-weight-bold">
      <h2>Laravel 8 Upload Image Tutorial</h2>
    </div>
 
    <div class="card-body">
        <form method="POST" enctype="multipart/form-data" id="upload-image" action="<?php echo e(route('image.store')); ?>" >

       
                   
            <div class="row">
 
                <div class="col-md-12">
                    <div class="form-group">
                        <input type="file" name="image" placeholder="Choose image" id="image">
                    <?php $__errorArgs = ['image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <div class="alert alert-danger mt-1 mb-1"><?php echo e($message); ?></div>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                </div>
                   
                <div class="col-md-12">
                    <button type="submit" class="btn btn-primary" id="submit">Submit</button>
                </div>
            </div>     
        </form>
 
    </div>
 
  </div>
 
</div>  
</body>
</html>


<?php /**PATH /var/www/html/myshop/resources/views/admin/image.blade.php ENDPATH**/ ?>