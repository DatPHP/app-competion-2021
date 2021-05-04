<?php $__env->startSection('title', 'Users List'); ?>

<?php $__env->startSection('content'); ?>
<a href="<?php echo e(route('admin.user.create')); ?>" class="btn btn-primary btn-xs pull-right"><b>+</b> Create new Account</a>
<table class="table">
  <thead class="thead-dark">
    <tr>
     
            <th cope="col">ID</th>
            <th cope="col">Username</th>
            <th cope="col">email</th>
            <th cope="col">password</th>
            <th cope="col">website</th>
            <th  cope="col" colspan="4">Action</th>

    </tr>
  </thead>
  <tbody>
  <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <tr>
                <td><?php echo e($item['id']); ?></td>
                <td><?php echo e($item['name']); ?></td>
                <td><?php echo e($item['email']); ?></td>
                <td><?php echo e($item['password']); ?></td>
                <td><?php echo e($item['website']); ?></td>
                <td colspan="4">
                <button type="button" class="btn btn-outline-secondary"><a href="<?php echo e(route('user.edit', $item['id'] )); ?>"> Edit</button>
                <button type="button" class="btn btn-outline-danger"><a href="<?php echo e(route('user.delete', $item['id'] )); ?>"> Delete </a></button>
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </tbody>
</table>
  <?php echo $users->links(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/myshop/resources/views/user/users-list.blade.php ENDPATH**/ ?>