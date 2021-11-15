<?php $__env->startSection('title', 'Admin -Product Edit'); ?>

<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Product</h2>
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

    <form action="<?php echo e(route('admin.product.update', $product->id)); ?>" enctype="multipart/form-data" method="POST">
        <?php echo csrf_field(); ?>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Name:</strong>
                    <input type="text" name="name" value="<?php echo e($product->name); ?>" class="form-control" placeholder="Name">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Description</strong>
                    <textarea class="form-control" style="height:50px" name="description"
                        placeholder="description"><?php echo e($product->description); ?> </textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Price</strong>
                    <input type="number" name="price" class="form-control" placeholder=""
                        value="<?php echo e($product->price); ?>">
                </div>
            </div>


            <div class="col-xs-12 col-sm-12 col-md-12">
                     <div class="form-group">
                        <?php echo Form::label('kind', 'Please choose kind', array('class' => 'col-sm-4 control-label')); ?>

                        <div class="col-sm-10">
                           <?php echo Form::select('kind', array('sport' => 'sport', 'shoes' => 'shoes','bag'=>'bag'), 'shoes'); ?>

                        </div>
                     </div>
            </div>


            <div class="col-xs-12 col-sm-12 col-md-12">
                     <div class="form-group">
                        <?php echo Form::label('gender', 'Please choose gender', array('class' => 'col-sm-4 control-label')); ?>

                        <div class="col-sm-10">
                           <?php echo Form::select('gender', array('men' => 'men', 'women' => 'women','kids'=>'kids'), $product->gender); ?>

                        </div>
                     </div>
            </div>

            <?php if($product->file_path): ?>
                <img src="<?php echo e(URL::asset('images/products/'.$product->file_path)); ?>" width="250" height="200" >
            <?php endif; ?>
                <div class="col-md-6">
                    <input type="file" name="image" class="form-control">
                </div>

            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>

    </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/myshop/resources/views/admin/product/edit.blade.php ENDPATH**/ ?>