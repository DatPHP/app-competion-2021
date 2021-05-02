<?php $__env->startSection('title', 'Admin - Create Product'); ?>

<?php $__env->startSection('content'); ?>
<div class="container">
    <?php if(isset($success)): ?>
    <div class="alert alert-success" role="alert"><?php echo e($success); ?></div>
    <?php endif; ?>
    <?php if(isset($fail)): ?>
    <div class="alert alert-danger" role="alert"><?php echo e($fail); ?></div>
    <?php endif; ?>
    <?php echo Form::open(array('url' => 'admin/product/create', 'class' => 'form-horizontal')); ?>


            <?php echo e(csrf_field()); ?>  
            <?php if(isset($id)): ?>
            <?php echo Form::hidden('id', $id); ?>

            <?php endif; ?>

        <div class="form-group">
            <?php echo Form::label('name', 'Tên sản phẩm', array('class' => 'col-sm-3 control-label')); ?>

            <div class="col-sm-9">
            <?php echo Form::text('name', $product['name'] ?? '', array('class' => 'form-control')); ?>

            </div>
        </div>

        <div class="form-group">
            <?php echo Form::label('price', 'Giá sản phẩm', array('class' => 'col-sm-3 control-label')); ?>

            <div class="col-sm-3">
            <?php echo Form::text('price', $product['price'] ?? '', array('class' => 'form-control')); ?>

            </div>
        </div>

        <div class="form-group">
            <?php echo Form::label('content', 'Nội dung sản phẩm', array('class' => 'col-sm-3 control-label')); ?>

            <div class="col-sm-9">
            <?php echo Form::textarea('content', $product['content'] ?? '', array('class' => 'form-control', 'rows' => 3)); ?>

            </div>
        </div>

        <div class="form-group">
            <?php echo Form::label('active', 'Active', array('class' => 'col-sm-3 control-label')); ?>

            <div class="col-sm-3">
            <?php echo Form::checkbox('active', $product['active'] ?? '', true); ?>

            </div>
        </div>  

        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
            <?php echo Form::submit('Tạo sản phẩm', array('class' => 'btn btn-success')); ?>

            </div>
        </div>
    <?php echo Form::close(); ?>


</div>
<?php $__env->stopSection(); ?>

       
<?php echo $__env->make('admin.layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/myshop/resources/views/admin/product/create.blade.php ENDPATH**/ ?>