<!DOCTYPE html>
<html lang="vi" class="h-100">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>checkout</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo e(asset("../FE3/vendor/bootstrap/css/bootstrap.min.css")); ?>" type="text/css">
    <!-- Font awesome -->
    <link rel="stylesheet" href="<?php echo e(asset("../FE3/vendor/font-awesome/css/font-awesome.min.css")); ?>" type="text/css">

    <!-- Custom css - Các file css do chúng ta tự viết -->
    <link rel="stylesheet" href="<?php echo e(asset("../FE3/assets/css/app.css")); ?>" type="text/css">
</head>

<body>
    <!-- header -->
    <nav class="navbar navbar-expand-md navbar-dark sticky-top bg-dark">
        <div class="container">
            <a class="navbar-brand" href="https://nentang.vn">Nền tảng</a>
            <div class="navbar-collapse collapse" id="navbarCollapse">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="<?php echo e(asset("/")); ?>">Trang chủ <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="products.html">Sản phẩm</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.html">Giới thiệu</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.html">Liên hệ</a>
                    </li>
                </ul>
                <form class="form-inline mt-2 mt-md-0" method="get" action="search.html">
                    <input class="form-control mr-sm-2" type="text" placeholder="Tìm kiếm" aria-label="Search"
                        name="keyword_tensanpham">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Tìm kiếm</button>
                </form>
            </div>
            <ul class="navbar-nav px-3">
                <li class="nav-item text-nowrap">
                    <a class="nav-link" href="cart.html">Giỏ hàng</a>
                </li>
                <li class="nav-item text-nowrap">
                    <a class="nav-link" href="login.html">Đăng nhập</a>
                </li>
            </ul>
        </div>
    </nav>
    <!-- end header -->

    <main role="main">
        <div class="container mt-4">
            <form class="needs-validation" name="frmthanhtoan" method="post" action="<?php echo e(url('save-checkout')); ?>">
                <input type="hidden" name="kh_tendangnhap" value="dnpcuong">

                <div class="py-5 text-center">
                    <i class="fa fa-credit-card fa-4x" aria-hidden="true"></i>
                    <h2>Thanh toán</h2>
                    <p class="lead">Vui lòng kiểm tra thông tin Khách hàng, thông tin Giỏ hàng trước khi Đặt hàng.</p>
                </div>

                <div class="row">
                    <div class="col-md-4 order-md-2 mb-4">
                        <h4 class="d-flex justify-content-between align-items-center mb-3">
                            <span class="text-muted">Giỏ hàng</span>
                            <span class="badge badge-secondary badge-pill"><?php echo e(count($cart)); ?></span>
                        </h4>
                        <ul class="list-group mb-3">
                            <?php
                            $grandTotal = 0;
                            ?>
                            <?php $__currentLoopData = $cart; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cart_item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php
                                $itemTotal = $cart_item['product_price'] * $cart_item['quantity'];
                                $grandTotal += $itemTotal;
                                ?>
                                <li class="list-group-item d-flex justify-content-between lh-condensed">
                                    <div>
                                        <h6 class="my-0"><?php echo e($cart_item['name']); ?></h6>
                                        <small class="text-muted"><?php echo e($cart_item['product_price']); ?> x <?php echo e($cart_item['quantity']); ?></small>
                                    </div>
                                    <span class="text-muted"><?php echo e($itemTotal); ?></span>
                                </li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <span>Tổng tiền</span>
                            <span class="text-dark"><strong><?php echo e($grandTotal); ?>đ</strong></span>
                            <input type="hidden" name="oder_value" value="<?php echo e($grandTotal); ?>">
                            
                        </ul>
                        <form action="<?php echo e(URL::to("/save-checkout")); ?>" method="post">
                            <?php echo csrf_field(); ?>
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Mã khuyến mãi">
                            <div class="input-group-append">
                                <button type="submit" class="btn btn-secondary">Xác nhận</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8 order-md-1">   
                        <h4 class="mb-3">Kiểm tra lại thông tin</h4>

                        <div class="row">
                            <div class="col-md-12">
                                <?php if(session('fullName')): ?>
                                    <label for="kh_ten">Họ tên</label>
                                    <input type="text" class="form-control" name="kh_ten" id="kh_ten" value="<?php echo e(session('fullName')); ?>">
                                <?php endif; ?>
                            </div>
                            <div class="col-md-12">
                                <?php if(session('address')): ?>
                                    <label for="kh_diachi">Địa chỉ</label>
                                    <input type="text" class="form-control" name="kh_diachi" id="kh_diachi" value="<?php echo e(session('address')); ?>" required>
                                <?php endif; ?>
                            </div>
                            <div class="col-md-12">
                                <?php if(session('phone')): ?>
                                    <label for="kh_dienthoai">Điện thoại</label>
                                    <input type="text" class="form-control" name="kh_dienthoai" id="kh_dienthoai" value="<?php echo e(session('phone')); ?>">
                                <?php endif; ?>
                            </div>
                            <div class="col-md-12">
                                <?php if(session('email')): ?>
                                    <label for="kh_email">Email</label>
                                    <input type="email" class="form-control" name="kh_email" id="kh_email" value="<?php echo e(session('email')); ?>">
                                <?php endif; ?>
                            </div>
                            <div class="col-md-12">
                                <label for="kh_cmnd">Ghi Chú</label>
                                <input type="text" class="form-control" name="kh_cmnd" id="kh_cmnd" required>
                            </div>
                        </div>
                        

                        <h4 class="mb-3">Hình thức thanh toán</h4>
                        <div class="d-block my-3">
                            <div class="custom-control custom-radio">
                                <input id="httt-1" name="httt_ma" type="radio" class="custom-control-input" required=""
                                    value="Tiền mặt">
                                <label class="custom-control-label" for="httt-1">Tiền mặt</label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input id="httt-2" name="httt_ma" type="radio" class="custom-control-input" required=""
                                    value="MoMo">
                                <label class="custom-control-label" for="httt-2">MoMo</label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input id="httt-3" name="httt_ma" type="radio" class="custom-control-input" required=""
                                    value="VNpay">
                                <label class="custom-control-label" for="httt-3">VNpay</label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input id="httt-4" name="httt_ma" type="radio" class="custom-control-input" required=""
                                    value="Ship COD">
                                <label class="custom-control-label" for="httt-4">Ship COD</label>
                            </div>
                        </div>                 
                        <?php if(session('UserId')): ?>
                      <input type="hidden" name="UserId" value="<?php echo e(session('UserId')); ?>">                
                          <?php else: ?>
                        <span>Không có</span>
                             <?php endif; ?>
                        <hr class="mb-4">                  
                        <a href="<?php echo e(asset("/order-finall")); ?>">
                        <button  class="btn btn-primary btn-lg btn-block" type="submit" value="Đặt Hàng" name="btnDatHang">Đặt hàng</button>
                    </a>
                    </div>
                </div>
            </form>


        </div>
    </main>

    <!-- footer -->
    <footer class="footer mt-auto py-3">
        <div class="container">
            <span>Bản quyền © bởi <a href="https://nentang.vn">Nền Tảng</a> - <script>document.write(new Date().getFullYear());</script>.</span>
            <span class="text-muted">Hành trang tới Tương lai</span>

            <p class="float-right">
                <a href="#">Về đầu trang</a>
            </p>
        </div>
    </footer>
    <!-- end footer -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="<?php echo e(asset("../FE3/vendor/jquery/jquery.min.js")); ?>"></script>
    <script src="<?php echo e(asset("../FE2/vendor/popperjs/popper.min.js")); ?>"></script>
    <script src="<?php echo e(asset("../FE3/vendor/bootstrap/js/bootstrap.min.js")); ?>"></script>

    <!-- Custom script - Các file js do mình tự viết -->
    <script src="<?php echo e(asset("../FE3//js/app.js")); ?>"></script>
</body>

</html>
<?php /**PATH C:\xampp\htdocs\hct-laravel\hoangcongthanh-final\resources\views/category/checkout.blade.php ENDPATH**/ ?>