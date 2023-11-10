

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
                         
                            <?php if($cart): ?>
                            <?php $__currentLoopData = $cart; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php
                                    $gia = number_format($item['quantity'] * $item['price'], 0, ',', '.');
                                    $total_price += $item['quantity'] * $item['price'];
                                ?>
                                <tr>
                                    <td data-th="Product">
                                        <div class="row">
                                            <div class="col-sm-2 hidden-xs"><img src="<?php echo e(asset($item['image'])); ?>"
                                                    alt="Sản phẩm 1" class="img-responsive" width="100">
                                            </div>
                                            <div class="col-sm-10">
                                                <h4 class="nomargin"><?php echo e($item['name']); ?></h4>
                                                
                                            </div>
                                        </div>
                                    </td>
                                    <td data-th="Price"><?php echo e(number_format($item['price'], 0, ',', '.')); ?></td>
                                    <td data-th="Quantity"><input min="1" max="10" name="quantity"
                                            class="form-control text-center" value="<?php echo e($item['quantity']); ?>" type="number">
                                    </td>
                                    <td data-th="Subtotal" class="text-center"><?php echo e($gia); ?></td>
                                    <td class="actions" data-th="">
                                        
                                        <form action="<?php echo e(url('trang-chu/delete-cart/' . $item['id'])); ?>" method="POST">
                                            <?php echo csrf_field(); ?>
                                            
                                            <button type="submit" class="btn btn-danger">Xóa</button>
                                        </form>
                                    </td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td colspan="3" class="text-right"><strong>Tổng Tiền</strong></td>
                                <td class="text-center"><?php echo e(number_format($total_price, 0, ',', '.')); ?></td>
                                <td></td>
                            </tr>
                        <?php endif; ?>
                         </ul>
                      </div>
                   </div>
                </div>
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
                            <span>339.900đ</span>
                         </div>
                         <div class="d-flex justify-content-between mb-1">
                            <span>Giảm giá</span>
                            <span class="text-success">19.900đ</span>
                         </div>
                         <div class="d-flex justify-content-between mb-1">
                            <span>Thuế VAT</span>
                            <span>16.900đ</span>
                         </div>
                         <div class="d-flex justify-content-between">
                            <span>Phí vận chuyển</span>
                            <span class="text-success">Miễn phí</span>
                         </div>
                         <hr>
                         <div class="d-flex justify-content-between">
                            <span class="text-dark"><strong>Tổng</strong></span>
                            <span class="text-dark"><strong>327.900đ</strong></span>
                         </div>
                         <a id="place-order" href="javascript:void();" class="btn btn-primary d-block mt-3 next">Đặt hàng</a>
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
          <div id="address" class="card-block p-0 col-12">
             <div class="row align-item-center">
                <div class="col-lg-8">
                   <div class="iq-card">
                      <div class="iq-card-header d-flex justify-content-between">
                         <div class="iq-header-title">
                            <h4 class="card-title">Thêm địa chỉ mới</h4>
                         </div>
                      </div>
                      <div class="iq-card-body">
                         <form onsubmit="required()">
                            <div class="row mt-3">
                               <div class="col-md-6">
                                  <div class="form-group">
                                     <label>Họ và tên: *</label> 
                                     <input type="text" class="form-control" name="fname" required="">
                                  </div>
                               </div>
                               <div class="col-md-6">
                                  <div class="form-group"> 
                                     <label>Số điện thoại: *</label> 
                                     <input type="text" class="form-control" name="mno" required="">
                                  </div>
                               </div>
                               <div class="col-md-6">
                                  <div class="form-group"> 
                                     <label>Địa chỉ: *</label> 
                                     <input type="text" class="form-control" name="houseno" required="">
                                  </div>
                               </div>
                               <div class="col-md-6">
                                  <div class="form-group"> 
                                     <label>Tỉnh/thành phố: *</label> 
                                     <input type="text" class="form-control" name="city" required="">
                                  </div>
                               </div>
                               <div class="col-md-6">
                                  <div class="form-group"> 
                                     <label>Phường: *</label> 
                                     <input type="text" class="form-control" name="state" required="">
                                  </div>
                               </div>
                               <div class="col-md-6">
                                  <div class="form-group">
                                     <label for="addtype">Loại địa chỉ</label>
                                     <select class="form-control" id="addtype">
                                        <option>Nhà riêng</option>
                                        <option>Công ty</option>
                                     </select>
                                  </div>
                               </div>
                               <div class="col-md-6">
                                  <button id="savenddeliver" type="submit" class="btn btn-primary">Lưu và giao tại đây</button>
                               </div>
                            </div>
                         </form>
                      </div>
                   </div>
                </div>
                <div class="col-lg-4">
                   <div class="iq-card">
                      <div class="iq-card-body">
                         <h4 class="mb-2">Ông Trần Thuận</h4>
                         <div class="shipping-address">
                            <p class="mb-0">11 Thành Thái</p>
                            <p>Thành phố Đà Nẵng</p>
                            <p>0789-999-999</p>
                         </div>
                         <hr>
                         <a id="deliver-address" href="javascript:void();" class="btn btn-primary d-block mt-1 next">Tiếp tục</a>
                      </div>
                   </div>
                </div>
             </div>
          </div>
          <div id="payment" class="card-block p-0 col-12">
             <div class="row align-item-center">
                <div class="col-lg-8">
                   <div class="iq-card">
                      <div class="iq-card-header d-flex justify-content-between">
                         <div class="iq-header-title">
                            <h4 class="card-title">Lựa chọn thanh toán</h4>
                         </div>
                      </div>
                      <div class="iq-card-body">
                         <form class="mt-3">
                            <div class="d-flex align-items-center">
                               <span>Mã giảm giá: </span>
                               <div class="cvv-input ml-3 mr-3">
                                  <input type="text" class="form-control" required=""> 
                               </div>
                               <button type="submit" class="btn btn-primary">Tiếp tục</button>
                            </div>
                         </form>
                         <hr>
                         <div class="card-lists">
                            <div class="form-group">
                               <div class="custom-control custom-radio">
                                  <input type="radio" id="credit" name="customRadio" class="custom-control-input">
                                  <label class="custom-control-label" for="credit"> Thẻ Tín dụng / Ghi nợ / ATM</label>
                               </div>
                               <div class="custom-control custom-radio">
                                  <input type="radio" id="netbaking" name="customRadio" class="custom-control-input">
                                  <label class="custom-control-label" for="netbaking"> Momo/ZaloPay</label>
                               </div>
                               <div class="custom-control custom-radio">
                                  <input type="radio" id="emi" name="emi" class="custom-control-input">
                                  <label class="custom-control-label" for="emi"> Trả góp</label>
                               </div>
                               <div class="custom-control custom-radio">
                                  <input type="radio" id="cod" name="cod" class="custom-control-input">
                                  <label class="custom-control-label" for="cod"> Thanh toán khi giao hàng                                          </label>
                               </div>
                            </div>
                         </div>
                         <hr>
                         <a id="deliver-address" href="javascript:void();" class="btn btn-primary d-block mt-1 next">Thanh toán</a>

                      </div>
                   </div>
                </div>
                <div class="col-lg-4">
                   <div class="iq-card">
                      <div class="iq-card-body">
                         <h4 class="mb-2">Chi tiết</h4>
                         <div class="d-flex justify-content-between">
                            <span>Giá 3 sản phẩm</span>
                            <span><strong>329.900đ</strong></span>
                         </div>
                         <div class="d-flex justify-content-between">
                            <span>Phí vận chuyển</span>
                            <span class="text-success">Miễn phí</span>
                         </div>
                         <hr>
                         <div class="d-flex justify-content-between">
                            <span>Số tiền phải trả</span>
                            <span><strong>329.900đ</strong></span>
                         </div>
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
   const quantityInput = document.getElementById('quantity');
   const btnMinus = document.getElementById('btn-minus');
   const btnPlus = document.getElementById('btn-plus');

   // Xử lý sự kiện khi nút + được nhấn
   btnPlus.addEventListener('click', () => {
       // Tăng giá trị của trường số lượng lên 1
       quantityInput.value = parseInt(quantityInput.value) + 1;
   });

   // Xử lý sự kiện khi nút - được nhấn
   btnMinus.addEventListener('click', () => {
       // Đảm bảo giá trị không nhỏ hơn 1
       if (parseInt(quantityInput.value) > 1) {
           quantityInput.value = parseInt(quantityInput.value) - 1;
       }
   });
</script>







<?php echo $__env->make('layout2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\hct-laravel\webshopphake\resources\views/category/cart.blade.php ENDPATH**/ ?>