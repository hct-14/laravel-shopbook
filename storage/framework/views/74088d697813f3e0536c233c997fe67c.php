
<?php if(session('success')): ?>
    <div class="alert alert-success">
        <?php echo e(session('success')); ?>

    </div>
<?php endif; ?>

<div id="content-page" class="content-page">
    <div class="container-fluid">
       <div class="row">
          <div class="col-sm-12">
             <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                <div class="iq-card-header d-flex justify-content-between align-items-center">
                   <h4 class="card-title mb-0">Thông tin</h4>
                </div>


          <div class="iq-card-body pb-0">

            <?php $__currentLoopData = $product_detail; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $by_pro): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>


            <div class="description-contents align-items-top row">
               
                <div class="col-md-6">
                    <div class="iq-card-transparent iq-card-block iq-card-stretch iq-card-height">
                        <div class="iq-card-body p-0">
                            <div class="row align-items-center">
                                <div class="col-3">
                                </div>
                                <div class="col-9">
                                    <ul id="description-slider" class="list-inline p-0 m-0  d-flex align-items-center">
                                        <li>
                                            <a href="javascript:void(0);">
                                                <img src="<?php echo e(asset('/uploads/product/'. $by_pro->product_image)); ?>" class="img-fluid w-100 rounded" alt="">
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                  

                     <div class="iq-card-transparent iq-card-block iq-card-stretch iq-card-height">
                        <div class="iq-card-body p-0">
                            <h3 class="mb-3"><?php echo e($by_pro->product_title); ?></h3>
                            <div class="price d-flex align-items-center font-weight-500 mb-2">
                                <span class="font-size-20 pr-2 old-price">350.000 ₫</span>
                                <span class="font-size-24 text-dark"><?php echo e($by_pro->product_price); ?> vnd</span>
                            </div>
                            <div class="mb-3 d-block">
                                <span class="font-size-20 text-warning">
                                    <i class="fa fa-star mr-1"></i>
                                    <i class="fa fa-star mr-1"></i>
                                    <i class="fa fa-star mr-1"></i>
                                    <i class="fa fa-star mr-1"></i>
                                    <i class="fa fa-star"></i>
                                </span>
                            </div>
                            <?php echo e($by_pro->product_description); ?>

                            <div class="text-primary mb-4">Tác giả: <span class="text-body"><?php echo e($by_pro->product_author); ?></span></div>

                            <div class="product-count">
                                <label for="size">Quantity</label>
                                <form action="<?php echo e(url('show-cart')); ?>" method="POST" class="display-flex mb-3">
                                        <?php echo csrf_field(); ?>
                                            <input type="hidden" name="product_id" value="<?php echo e($by_pro->product_id); ?>">
                                            <input type="hidden" name="quantity" value="1">
                                    
                                            <div class="tru">-</div>
                                            <input type="text" name="quantity" value="1" class="qty">
                                            <div class="cong">+</div> 

                                        <button type="submit" class="btn btn-primary">Thêm vào giỏ hàng</button>  
                                </form>
                              
                                <a href="<?php echo e(url('trang-chu/thanh-toan')); ?>" class="btn btn-success">Mua Ngay</a>
                                <style>
                                    .datgold:hover{
                                        background-color: #f7442e!important ;
                                    }
                                </style>
                            </div>
                            
                            
                              

                              
                              
                              

                              

                                
                                
                            </div>
                            
                            <div class="iq-social d-flex align-items-center">
                                <h5 class="mr-2">Chia sẻ:</h5>
                                <ul class="list-inline d-flex p-0 mb-0 align-items-center">
                                    <li>
                                        <a href="#" class="avatar-40 rounded-circle bg-primary mr-2 facebook">
                                            <i class="fa fa-facebook" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="avatar-40 rounded-circle bg-primary mr-2 twitter">
                                            <i class="fa fa-twitter" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="avatar-40 rounded-circle bg-primary mr-2 youtube">
                                            <i class="fa fa-youtube-play" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="avatar-40 rounded-circle bg-primary pinterest">
                                            <i class="fa fa-pinterest-p" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
               

            </div>
        </div>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

             </div>
          </div>
          <div class="col-lg-12">
             <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                <div class="iq-card-header d-flex justify-content-between align-items-center position-relative">
                   <div class="iq-header-title">
                      <h4 class="card-title mb-0">Sản phẩm tương tự</h4>
                   </div>
                   <div class="iq-card-header-toolbar d-flex align-items-center">
                      <a href="category.html" class="btn btn-sm btn-primary view-more">Xem thêm</a>
                   </div>
                </div>
                <div class="iq-card-body single-similar-contens">
                   <ul id="single-similar-slider" class="list-inline p-0 mb-0 row">
     
          
                     <?php $__currentLoopData = $related_product; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rela_pro): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                      <li class="col-md-3">
                         <div class="row align-items-center">
                            <div class="col-5">
                               <div class="position-relative image-overlap-shadow">
                                  <a href="javascript:void();"><img class="img-fluid rounded w-100" src="<?php echo e(asset('/uploads/product/'. $rela_pro->product_image)); ?>" alt=""></a>
                                  <div class="view-book">rela
                                     <a href="book-page.html" class="btn btn-sm btn-white">Xem sách</a>
                                  </div>
                               </div>
                            </div>
                            <div class="col-7 pl-0">
                               <h6 class="mb-2">Từ Tốt Đến Vĩ Đại.</h6>
                               <p class="text-body"><?php echo e($rela_pro->product_author); ?></p>
                               <a href="#" class="text-dark" tabindex="-1">Đọc ngay<i class="ri-arrow-right-s-line"></i></a>
                            </div>
                         </div>
                      </li>
                   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                   </ul>
                </div>
             </div>
          </div>

       </div>
    </div>
 </div>

 
<?php echo $__env->make('layout2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\hct-laravel\hoangcongthanh\resources\views/category/book_page_1.blade.php ENDPATH**/ ?>