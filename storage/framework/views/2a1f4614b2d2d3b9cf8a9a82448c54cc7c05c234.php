<?php $__env->startSection('title', 'Admin -Product List'); ?>
<?php $__env->startSection('content'); ?>
<a href="<?php echo e(route('admin.product.create')); ?>" class="btn btn-primary btn-xs pull-right"><b>+</b> Create new Account</a>

    <table class="table table-bordered">
        <tr class="success">
            <th>ID</th>
            <th>Tên sản phẩm</th>
            <th>Giá sản phẩm</th>
            <th>Nội dung</th>
            <!-----
            <th>Ảnh sản phẩm</th>
            -------> 
            <th>Giới tính</th>
            <th>Đăng bán</th>
            <th>Action</th>
        </tr>
        <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($p->id); ?></td>
            <td><?php echo e($p->name); ?></td>
            <td class="text-right"><?php echo e(number_format($p->price)); ?></td>
            <td><?php echo e($p->content); ?></td>
            <td><?php echo e($p->gender); ?></td>
            <!------
            <td>
                <img src="<?php echo e(Asset($p->image_path)); ?>" alt="<?php echo e($p->name); ?>" width="120" height="120">
            </td>
            ------>
            <td>
                <?php if($p->active == 1): ?>
                    <span class="text-success glyphicon glyphicon-ok">x</span>
                <?php else: ?>
                    <span class="text-danger glyphicon glyphicon-remove"></span>
                <?php endif; ?>
            </td>
            <td>
                <a href="<?php echo e($p->id . '/edit'); ?>"><span class="glyphicon glyphicon-pencil">Edit</span></a>
                <a href="<?php echo e('delete/'.$p->id); ?>"><span class="glyphicon glyphicon-trash">Delete</span></a>
            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>

    <?php echo $products->links(); ?>

<?php $__env->stopSection(); ?>



     
<?php echo $__env->make('admin.layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/myshop/resources/views/admin/product/list.blade.php ENDPATH**/ ?>