

<div id="content-page" class="content-page">
    <div class="container-fluid checkout-content">
        <div class="row">
            <div id="cart" class="card-block show p-0 col-12">
                <div class="row align-item-center">
                    <div class="col-lg-8">
                        <div class="iq-card">
                            <div class="iq-card-header d-flex justify-content-between iq-border-bottom mb-0">
                                <div class="iq-header-title">
                                    <h4 class="card-title">Giỏ hàng</h4>
                                </div>
                            </div>
                            <div class="iq-card-body">
                                <ul class="list-inline p-0 m-0">
                                <?php $__currentLoopData = $cart; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cart_item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li class="checkout-product">
                                        <div class="row align-items-center">
                                            <div class="col-sm-2">
                                                <span class="checkout-product-img">
                                                    <a href="javascript:void();"><img class="img-fluid rounded" src="<?php echo e(asset('/uploads/product/'. $cart_item['image'])); ?>" alt=""></a>
                                                </span>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="checkout-product-details">
                                                    <h5><?php echo e($cart_item['name']); ?></h5>

                                                    <p class="text-success">Còn hàng</p>
                                                    
                                                    <div class="price">
                                                        <h5><?php echo e($cart_item['product_price']); ?></h5>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="row">
                                                    <div class="col-sm-10">
                                                        <div class="row align-items-center mt-2">
                                                         <div class="col-sm-7 col-md-6">
                                                            <button type="button" class="fa fa-minus qty-btn" id="btn-minus">-</button>
                                                            <input type="number" name="quantity" min="1" value="<?php echo e($cart_item['quantity']); ?>" class="quantity-input" style="width: 50px;"> <!-- Thay đổi giá trị của width ở đây -->
                                                            <button type="button" class="fa fa-plus qty-btn" id="btn-plus">+</button>
                                                        </div>
                                                        
                                                            <div class="col-sm-5 col-md-6">
                                                                <div class="col-md-12">
                                                                    <p class="text-success"><strong>Tổng: <span class="item-total"><?php echo e($cart_item['product_price'] * $cart_item['quantity']); ?></span>đ</strong></p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-2">
                                                        <a href="<?php echo e(URL::to('/delete-cart/'. $cart_item['id'])); ?>" class="text-dark font-size-20"><i class="ri-delete-bin-7-fill"></i></a>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <?php
                     $totalProducts = 0; // Khởi tạo biến tổng số sản phẩm
                           ?>
                                             <?php $__currentLoopData = $cart; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cart_item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <?php
                                                $totalProducts += $cart_item['quantity']; // Tăng tổng số sản phẩm
                                    ?>
                                       <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    <div class="col-lg-4">
                        <div class="iq-card">
                            <div class="iq-card-body">
                                <p>Tùy chọn</p>
                                <div class="d-flex justify-content-between">
                                    <span>Phiếu giảm giá</span>
                                    <span><a href="#"><strong>Áp dụng</strong></a></span>
                                </div>
                                <hr>
                                <p><b>Chi tiết</b></p>
                                <div class="d-flex justify-content-between mb-1">
                                    <span>Tổng</span>
                                    <p class="text-success"><strong>Tổng: <?php echo e($totalProducts); ?> sản phẩm</strong></p>
                                 </div>
                                <div class="d-flex justify-content-between mb-1">
                                    <span>tính cho tôi thuế Thuế VAT bằng 5%</span>
                                    <span>16.900đ</span>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <span>Phí vận chuyển</span>
                                    <span class="text-success">Miễn phí</span>
                                </div>
                                <hr>
                                <div class="d-flex justify-content-between">
                                    <span class="text-dark"><strong>Tính tổng tất cả tiền trong giỏ hàng</strong></span>
                                    <span class="text-dark"><strong id="grand-total">0đ</strong></span>
                                </div>
                                <?php if(session('UserId')): ?>
                                <a id="place-order" href="<?php echo e(URL::to("/checkout")); ?>" class="btn btn-primary d-block mt-3 next">Đặt hàng</a>
                                 <?php else: ?>
                                 <a id="place-order" href="<?php echo e(URL::to("/user-login-hct")); ?>" class="btn btn-primary d-block mt-3 next">Đặt hàng</a>
                                 <?php endif; ?>

                                </div>
                        </div>
                        <div class="iq-card ">
                            <div class="card-body iq-card-body p-0 iq-checkout-policy">
                                <ul class="p-0 m-0">
                                    <li class="d-flex align-items-center">
                                        <div class="iq-checkout-icon">
                                            <i class="ri-checkbox-line"></i>
                                        </div>
                                        <h6>Chính sách bảo mật (Thanh toán an toàn và bảo mật.)</h6>
                                    </li>
                                    <li class="d-flex align-items-center">
                                        <div class="iq-checkout-icon">
                                            <i class="ri-truck-line"></i>
                                        </div>
                                        <h6>Chính sách giao hàng (Giao hàng tận nhà.)</h6>
                                    </li>
                                    <li class="d-flex align-items-center">
                                        <div class="iq-checkout-icon">
                                            <i class="ri-arrow-go-back-line"></i>
                                        </div>
                                        <h6>Chính sách hoàn trả</h6>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</div>

<script>
   // Lấy thẻ input và nút +/- bằng cách sử dụng id
   const quantityInputs = document.querySelectorAll('.quantity-input');
   const btnMinus = document.getElementById('btn-minus');
   const btnPlus = document.getElementById('btn-plus');

   // Xử lý sự kiện khi nút + được nhấn
   btnPlus.addEventListener('click', () => {
       quantityInputs.forEach(quantityInput => {
           // Tăng giá trị của trường số lượng lên 1
           quantityInput.value = parseInt(quantityInput.value) + 1;
           // Cập nhật tổng tiền cho mục sản phẩm
           updateItemTotal(quantityInput);
       });
       updateGrandTotal();
   });

   // Xử lý sự kiện khi nút - được nhấn
   btnMinus.addEventListener('click', () => {
       quantityInputs.forEach(quantityInput => {
           // Đảm bảo giá trị không nhỏ hơn 1
           if (parseInt(quantityInput.value) > 1) {
               quantityInput.value = parseInt(quantityInput.value) - 1;
               // Cập nhật tổng tiền cho mục sản phẩm
               updateItemTotal(quantityInput);
           }
       });
       updateGrandTotal();
   });

   // Hàm cập nhật tổng tiền cho một mục sản phẩm dựa trên số lượng
   function updateItemTotal(quantityInput) {
       const itemTotal = quantityInput.parentElement.nextElementSibling.querySelector('.item-total');
       const productPrice = parseFloat(quantityInput.closest('.checkout-product').querySelector('.price h5').textContent);
       const quantity = parseInt(quantityInput.value);
       itemTotal.textContent = (productPrice * quantity) + 'đ';
   }

   // Hàm cập nhật tổng tiền toàn bộ giỏ hàng
   function updateGrandTotal() {
       const itemTotals = document.querySelectorAll('.item-total');
       let grandTotal = 0;
       itemTotals.forEach(itemTotal => {
           grandTotal += parseFloat(itemTotal.textContent);
       });
       document.getElementById('grand-total').textContent = grandTotal + 'đ';
   }

   // Gọi hàm cập nhật tổng tiền lúc khởi động trang
   updateGrandTotal();
   // Hàm cập nhật tổng tiền cho một mục sản phẩm dựa trên số lượng
function updateItemTotal(quantityInput) {
    const itemTotal = quantityInput.closest('.checkout-product').querySelector('.item-total');
    const productPrice = parseFloat(quantityInput.closest('.checkout-product').querySelector('.price h5').textContent);
    const quantity = parseInt(quantityInput.value);
    itemTotal.textContent = (productPrice * quantity) + 'đ';
    updateGrandTotal(); // Gọi lại hàm cập nhật tổng tiền toàn bộ giỏ hàng sau khi cập nhật mục hàng
}

</script>

<?php echo $__env->make('layout2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\hct-laravel\hoangcongthanh-final\resources\views/category/cart.blade.php ENDPATH**/ ?>