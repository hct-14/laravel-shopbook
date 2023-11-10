
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
             
                    <?php if(session('error')): ?>
                    <div class="alert alert-danger">
                        <?php echo e(session('error')); ?>

                    </div>
                <?php endif; ?>
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
                                <label for="size"><?php echo e($by_pro->product_quantity); ?> sản phẩm có sẵn </label>
                                <form action="<?php echo e(url('show-cart')); ?>" method="POST" class="display-flex mb-3">
                                    <?php echo csrf_field(); ?>
                                    <input type="hidden" name="product_id" value="<?php echo e($by_pro->product_id); ?>">
                                    <input type="hidden" name="quantity" value="1">
                                    <div class="tru">-</div>
                                    <input type="text" name="quantity" value="1" class="qty">
                                    <div class="cong">+</div>
                            
                                    <?php if($by_pro->product_quantity < 1): ?>
                                        <button type="button" class="btn btn-primary" disabled>Thêm vào giỏ hàng</button>
                                        <div class="alert alert-danger mt-2">Không còn sản phẩm trong kho!</div>
                                    <?php elseif(1 <= $by_pro->product_quantity): ?>
                                        <button type="submit" class="btn btn-primary">Thêm vào giỏ hàng</button>
                                    <?php endif; ?>
                                </form>
                                <a href="<?php echo e(url('trang-chu/thanh-toan')); ?>" class="btn btn-success">Mua Ngay</a>
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
                       <h4 class="card-title mb-0">Đánh giá sản phẩm</h4>
                    </div>
                    <div class="iq-card-header-toolbar d-flex align-items-center">
                    </div>
                 </div>

                 <form action="<?php echo e(url('process-data')); ?>" method="post" enctype="multipart/form-data">
                    <?php if(session('UserId')): ?>
                    <input type="hidden" name="user_id" value="<?php echo e(session('UserId')); ?>"> 
                <?php endif; ?>
                    
                <input type="hidden" name="product_id" value="<?php echo e($by_pro->product_id); ?>">
                    <?php echo csrf_field(); ?>
                    <div class="khachhang1">
                        <div class="avtkhach">
                            <?php if(session('avt')): ?>
                                <img src="<?php echo e(asset('/uploads/avt/' . session('avt'))); ?>" alt="">
                            <?php else: ?>
                                <span>Không có</span>
                            <?php endif; ?>
                        </div>
                        <div class="tenkhach">
                            <span>
                                <?php if(session('fullName')): ?>
                                    <?php echo e(session('fullName')); ?>

                                <?php else: ?>
                                    
                                <?php endif; ?>
                            </span>     
                        </div>
                    </div>
                    
                    <div class="khachcmt">
                        <div class="col-md-12">
                            <label for="user_comment">Viết bình luận</label>
                            <textarea class="form-control" name="user_comment" id="user_comment"></textarea>
                        </div>
                        <div class="col-md-12">
                            <input type="file" class="form-control" name="comment_images" id="comment_images" placeholder="Thêm ảnh">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Thêm bình luận</button>

                    
                </form>
                
                
                    
                <?php $__currentLoopData = $checkcomment; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $check_pro): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                 <div class="comment">

                    <div class="khachhang1">

                        <div class="avtkhach">
                            <?php if($check_pro->user_avt): ?>
                                <img src="<?php echo e(asset('/uploads/avt/'. $check_pro->user_avt)); ?>" alt="">
                            <?php endif; ?>
                        </div>   
                        <div class="tenkhach">
                           <span>
                            <?php echo e($check_pro->user_fullname); ?>

                                       </span>
                        </div>      
                                           
                        </div>  
                        

                        <div class="col-md-12">
                            <div class="khachcomment">
                                <span>
                                    <?php echo e($check_pro->comment_content); ?>

                                </span>
                            </div>
                            <div class="khachimg">
                                <?php if($check_pro->comment_images): ?>
                                    <img src="<?php echo e(asset('/uploads/avt/'. $check_pro->comment_images)); ?>" class="clickable-image" alt="" width="40" height="60px">
                                <?php endif; ?>
                            </div>
                            
                        </div>
                        
                 </div>
                 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </div>

          </div>
          <div class="image-modal" id="imageModal">
            <span class="close" onclick="closeModal()">&times;</span>
            <img  id="modalImage" src="" alt="">
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
<style>
    .khachhang1{
        display: flex;
        margin-top: 30px;
        margin-left: 20px;  
    }
    .avtkhach img{
        border-radius: 100%;
        width: 50px;
        height: 50px;
    }
    .tenkhach{
        height: 50px;
        display: flex;
        justify-content: center;
        align-items: center;
        margin-left: 30px;
        
    }
    .tenkhach span{
        font-style:initial;
        font-size: 18px;
        font-weight: 600;
        justify-content: center;
        align-content:center;
    }
    .comment{
        margin-top: 10px;
        box-shadow: 3px 3px 3px 3px rgba(0, 0, 0, 0.1); /* Đổ bóng với độ mờ nhẹ */
    padding: 10px; /* Tạo khoảng cách xung quanh nội dung để đổ bóng không bám sát */
    }
    .clickable-image {
        cursor: pointer;
        transition: 0.3s;
    }

    .clickable-image:hover {
        transform: scale(1.1);
    }

    .image-modal {
        display: none;
        position: fixed;
        z-index: 999;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.9);
        text-align: center;
        justify-content: center
    }

    .image-modal img {
        margin: 15% auto;
        max-width: 70%;
        max-height: 70%;
        display: block;
    }
    </style>
 

<?php echo $__env->make('layout2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\hct-laravel\hoangcongthanh-final\resources\views/category/book_page_1.blade.php ENDPATH**/ ?>