<ul class="nav nav-tabs aa-products-tab">
    <li class="active" id="kind_01"><a href="#men" onclick="ProductbyGender('men')" data-toggle="tab">Men</a></li>
    <li><a href="#women" id="kind_02" onclick="ProductbyGender('women')" data-toggle="tab">Women</a></li>
    <li><a href="#shoes" id="kind_03" onclick="ProductbyKind('shoes')" data-toggle="tab">Shoes</a></li>
    <li><a href="#bag" id="kind_04" onclick="ProductbyKind('bag')" data-toggle="tab">Bag</a></li>
 </ul>


<!-- Tab panes -->
<div class="tab-content">
<!-- Start men product category -->
<div class="tab-pane fade in active" id="men">
    
</div>
<!-- / men product category -->
<!-- start women product category -->

<div class="tab-pane fade" id="women">
  
</div>
<!-- / women product category -->
<!-- start sports product category -->
<div class="tab-pane fade" id="shoes">
      
</div>
<!-- / sports product category -->
<!-- start electronic product category -->
<div class="tab-pane fade" id="bag">
    <ul class="aa-product-catg">
    <!-- start single product item -->
    <li> 
        <figure>
        <a class="aa-product-img" href="#"><img src="img/electronics/electronic-1.png" alt="polo shirt img"></a>
        <a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
        <figcaption>
            <h4 class="aa-product-title"><a href="#">This is Title</a></h4>
            <span class="aa-product-price">$45.50</span><span class="aa-product-price"><del>$65.50</del></span>
        </figcaption>
        </figure>                         
        <div class="aa-product-hvr-content">
        <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
        <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><span class="fa fa-exchange"></span></a>
        <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>                            
        </div>
        <!-- product badge -->
        <span class="aa-badge aa-sale" href="#">SALE!</span>
    </li>
    <!-- start single product item -->
    <li>
        <figure>
        <a class="aa-product-img" href="#"><img src="img/electronics/electronic-2.png" alt="polo shirt img"></a>
        <a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
        <figcaption>
            <h4 class="aa-product-title"><a href="#">Lorem ipsum doller</a></h4>
            <span class="aa-product-price">$45.50</span>
        </figcaption>
        </figure>                         
        <div class="aa-product-hvr-content">
        <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
        <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><span class="fa fa-exchange"></span></a>
        <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
        </div>
        <!-- product badge -->
        <span class="aa-badge aa-sold-out" href="#">Sold Out!</span>
    </li>
    <!-- start single product item -->
    <li>
        <figure>
        <a class="aa-product-img" href="#"><img src="img/electronics/electronic-3.png" alt="polo shirt img"></a>
        <a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
        <figcaption>
            <h4 class="aa-product-title"><a href="#">Lorem ipsum doller</a></h4>
            <span class="aa-product-price">$45.50</span><span class="aa-product-price"><del>$65.50</del></span>
        </figcaption>
        </figure>                          
        <div class="aa-product-hvr-content">
        <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
        <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><span class="fa fa-exchange"></span></a>
        <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
        </div>
    </li>
    <!-- start single product item -->
   
    
    </ul>
    <a class="aa-browse-btn" href="#">Browse all Product <span class="fa fa-long-arrow-right"></span></a>
</div>
<!-- / electronic product category -->
</div>
<?php /**PATH /var/www/html/myshop/resources/views/customer/home/product_sesion_base_category.blade.php ENDPATH**/ ?>