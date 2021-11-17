<?php $__env->startSection('title', 'Home'); ?>
<?php $__env->startSection('content'); ?>
      <!-- Start slider -->
      <?php echo $__env->make('customer.home.slider_banner', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <!-- / slider -->
      <!-- Start Promo section -->
      <?php echo $__env->make('customer.home.promo_banner', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <!-- / Promo section -->
      <!-- Products section -->
      <?php echo $__env->make('customer.home.product_session', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <!-- / Products section -->
      <!-- banner section -->
      <?php echo $__env->make('customer.home.banner', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <!-- popular section -->
      <?php echo $__env->make('customer.home.popular_category', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <!-- / popular section -->
      <!-- Support section -->
      <?php echo $__env->make('customer.home.support', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <!-- / Support section -->
      <!-- Testimonial -->
      <?php echo $__env->make('customer.home.testimonial', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <!-- / Testimonial -->

      <!-- Client Brand -->
      <?php echo $__env->make('customer.home.client_brand', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <!-- / Client Brand -->
  <?php $__env->stopSection(); ?>
<?php echo $__env->make('customer.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/myshop/resources/views/customer/home.blade.php ENDPATH**/ ?>