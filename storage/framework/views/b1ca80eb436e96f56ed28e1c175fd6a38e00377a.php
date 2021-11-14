<?php $__env->startSection('title', 'Admin -Product List'); ?>


<?php $__env->startSection('content'); ?>

<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Laravel 8 CRUD Example </h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="<?php echo e(route('admin.product.create')); ?>" title="Create a product"> <i class="fas fa-plus-circle"></i>
                    </a>
            </div>
        </div>
    </div>

    <?php if($message = Session::get('success')): ?>
        <div class="alert alert-success">
            <p><?php echo e($message); ?></p>
        </div>
    <?php endif; ?>

    <table class="table table-bordered table-responsive-lg">
        <tr>
            <th>No</th>
            <th>Image</th>
            <th>Name</th>
            <th>description</th>
            <th>Price</th>
            <th>Date Created</th>
            <th>Actions</th>
        </tr>
        <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($product->id); ?></td>
                <td>
                     <?php if($product->file_path): ?>
                      <img src="<?php echo e(URL::asset('images/products/'.$product->file_path)); ?>" width="250" height="200" alt="<?php echo e($product->name); ?>" >
                     <?php endif; ?>
                </td>
                <td><?php echo e($product->name); ?></td>
                <td><?php echo e($product->description); ?></td>
                <td><?php echo e($product->price); ?></td>
                <td><?php echo e($product->created_at); ?></td>
                <td>
                    <form action="" method="POST">

                        <a href="<?php echo e(route('admin.product.show',$product->id)); ?>" title="show">
                            <i class="fas fa-eye text-success  fa-lg"></i>
                        </a>

                        <a href="<?php echo e(route('admin.product.edit',$product->id)); ?>">
                            <i class="fas fa-edit  fa-lg"></i>
                        </a>

                        <?php echo csrf_field(); ?>
                        <button type="button" title="delete" style="border: none; background-color:transparent;">
                        <a href="<?php echo e(route('admin.product.delete', $product->id )); ?>">  <i class="fas fa-trash fa-lg text-danger"></i></a>
                        </button>

                    </form>
                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>

    <?php echo $products->links(); ?>


<?php $__env->stopSection(); ?>



     
<?php echo $__env->make('admin.layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/myshop/resources/views/admin/product/index.blade.php ENDPATH**/ ?>