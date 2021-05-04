<?php $__env->startSection('title', 'Create new user'); ?>

<?php $__env->startSection('content'); ?>
   <?php echo Form::open(array('url' => 'admin/user/create', 'class' => 'form-horizontal')); ?>

   <?php echo e(csrf_field()); ?>


       <?php if(isset($id)): ?>
       <?php echo Form::hidden('id', $id); ?>

       <?php endif; ?>
       <?php echo Form::hidden('level', 1); ?>


      <div class="form-group">
         <?php echo Form::label('name', 'Họ và tên', array('class' => 'col-sm-2 control-label')); ?>

         <div class="col-sm-10">
             <?php echo Form::text('name', $user['name'] ?? '', array('class' => 'form-control', 'placeholder' => 'Nhap Ho Va Ten')); ?>                      
         </div>

      </div>

      <div class="form-group">
         <?php echo Form::label('email', 'Địa chỉ email', array('class' => 'col-sm-2 control-label')); ?>

         <div class="col-sm-10">
            <?php echo Form::email('email', $user['email']?? '', array('class' => 'form-control', 'placeholder' => 'Địa chỉ email thật để nhận phản hồi')); ?>

         </div>
      </div>

      <div class="form-group">
            <?php echo Form::label('password', 'NHap Password', array('class' => 'col-sm-2 control-label')); ?>

            <div class="col-sm-10">

            <?php echo e(Form::input('password', 'password', $user['password']?? '',array('class' => 'form-control','placeholder' => 'Nhap password'))); ?>


           
            </div>
      </div>


      <div class="form-group">
         <?php echo Form::label('gender', 'Please input gender', array('class' => 'col-sm-2 control-label')); ?>

         <div class="col-sm-10">
             <?php echo Form::text('gender', $user['gender']?? '' , array('class' => 'form-control', 'placeholder' => 'Nhap gender')); ?>                      
         </div>
      </div>

      <div class="form-group">
         <?php echo Form::label('phone', 'Please input phone', array('class' => 'col-sm-2 control-label')); ?>

         <div class="col-sm-10">
             <?php echo Form::text('phone', $user['phone']?? '' , array('class' => 'form-control', 'placeholder' => 'Nhap phone')); ?>                      
         </div>
      </div>

      <div class="form-group">
         <?php echo Form::label('address', 'Please input address', array('class' => 'col-sm-2 control-label')); ?>

         <div class="col-sm-10">
             <?php echo Form::text('address', $user['address']?? '' , array('class' => 'form-control', 'placeholder' => 'Nhap address')); ?>                      
         </div>
      </div>

      <div class="form-group">
            <?php echo Form::label('active', 'Active', array('class' => 'col-sm-3 control-label')); ?>

            <div class="col-sm-3">
            <?php echo Form::checkbox('active', $user['status'] ?? ''); ?>

            </div>
        </div>  



      <div class="form-group">
         <div class="col-sm-offset-2 col-sm-10">
            <?php echo Form::submit('Gửi tin nhắn', array('class' => 'btn btn-success')); ?>

         </div>
      </div>

   <?php echo Form::close(); ?>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/myshop/resources/views/user/create.blade.php ENDPATH**/ ?>