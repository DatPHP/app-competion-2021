<?php $__env->startSection('title', 'Admin -Product Create'); ?>

<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Add New Product</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="<?php echo e(route('admin.product.list')); ?>" title="Go back"> <i class="fas fa-backward "></i> </a>
            </div>
        </div>
    </div>

    <?php if($errors->any()): ?>
        <div class="alert alert-danger">
            <strong>Error!</strong> 
            <ul>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    <?php endif; ?>
    <form action="<?php echo e(route('admin.product.store')); ?>" method="POST"  enctype="multipart/form-data" >
        <?php echo csrf_field(); ?>

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Name:</strong>
                    <input type="text" name="name" class="form-control" placeholder="Name">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Description:</strong>
                    <textarea class="form-control" style="height:50px" name="description"
                        placeholder="description"></textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Price:</strong>
                    <input type="number" name="price" class="form-control" placeholder="Put the price">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                     <div class="form-group">
                        <?php echo Form::label('kind', 'Please choose kind', array('class' => 'col-sm-4 control-label')); ?>

                        <div class="col-sm-10">
                           <?php echo Form::select('kind', $categories, '2'); ?>

                        </div>
                     </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                     <div class="form-group">
                        <?php echo Form::label('gender', 'Please choose gender', array('class' => 'col-sm-4 control-label')); ?>

                        <div class="col-sm-10">
                           <?php echo Form::select('gender', array('other' => 'other','men' => 'men', 'woman' => 'woman','kids'=>'kids'), 'other'); ?>

                        </div>
                     </div>
            </div>

       



            <div class="col-md-6">
                    <input type="file" name="image" class="form-control">
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>

        </div>

    </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/myshop/resources/views/admin/product/create.blade.php ENDPATH**/ ?>