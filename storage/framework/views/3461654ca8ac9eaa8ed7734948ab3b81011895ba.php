<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row">
            <div class="col-12 text-center pt-5">
                <h1 class="display-one mt-5"><?php echo e(config('app.name')); ?></h1>
                <p>This awesome blog has many articles, click the button below to see them</p>
                <br>
                <a href="/blog" class="btn btn-outline-primary">Show Blog</a>
            </div>
        </div>
    </div>
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('customer.BlogPost.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/myshop/resources/views/customer/BlogPost/list.blade.php ENDPATH**/ ?>