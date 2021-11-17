<div class="aa-header-top">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="aa-header-top-area">
              <!-- start header top left -->
              <div class="aa-header-top-left">
                <!-- start language -->
                <div class="aa-language">
                  <div class="dropdown">
                    <a class="btn dropdown-toggle" href="#" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                      <img src="<?php echo e(URL::asset('img/flag/english.jpg')); ?>" alt="english flag">ENGLISH
                      <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                      <li><a href="#"><img src="<?php echo e(URL::asset('img/flag/french.jpg')); ?>" alt="">FRENCH</a></li>
                      <li><a href="#"><img src="<?php echo e(URL::asset('img/flag/english.jpg')); ?>" alt="">ENGLISH</a></li>
                    </ul>
                  </div>
                </div>
                <!-- / language -->

                <!-- start currency -->
                <div class="aa-currency">
                  <div class="dropdown">
                    <a class="btn dropdown-toggle" href="#" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                      <i class="fa fa-usd"></i>USD
                      <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                      <li><a href="#"><i class="fa fa-euro"></i>EURO</a></li>
                      <li><a href="#"><i class="fa fa-jpy"></i>YEN</a></li>
                    </ul>
                  </div>
                </div>
                <!-- / currency -->
                <!-- start cellphone -->
                <div class="cellphone hidden-xs">
                  <p><span class="fa fa-phone"></span>00-62-658-658</p>
                </div>
                <!-- / cellphone -->
              </div>
              <!-- / header top left -->
              <div class="aa-header-top-right">
                <ul class="aa-head-top-nav-right">
                  <li><a href="account.html">
                       <?php if(isset($users)): ?>
                        My Account:  Hello <?php echo e($users ?? ''); ?> </a>
                       <?php endif; ?>
                  </li>
                  <li class="hidden-xs"><a href="wishlist.html">Wishlist</a></li>
                  <li class="hidden-xs"><a href="cart.html">My Cart</a></li>
                  <li class="hidden-xs"><a href="checkout.html">Checkout</a></li>

                      <?php if(Auth::check()): ?>
                        <li><a href="<?php echo e(route('logout')); ?>"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
                      <?php else: ?>
                      <li><a href="" data-toggle="modal" data-target="#login-modal">Login</a></li>
                      <?php endif; ?>

                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div><?php /**PATH /var/www/html/myshop/resources/views/customer/layouts/header_top.blade.php ENDPATH**/ ?>