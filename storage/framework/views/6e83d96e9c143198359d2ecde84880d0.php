
<?php $__env->startSection('admin_content'); ?>
<div class="row">
    <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    Thêm Danh Mục Sản Phẩm
                </header>
                <div class="panel-body">
                        <?php
                        $message = Session::get('message');
                        if ($message) {
                            echo '<p style="color: red;">' . $message . '</p>';
                            Session::put('message', null);
                        }
                        ?>
                    
                    <div class="position-center">
                        <form role="form" action="<?php echo e(url('save-category-product')); ?>" method="post">
                            <?php echo csrf_field(); ?>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Tên Danh Mục</label>
                            <input type="text"  name ="category_product_name" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                        </div>
                        <div class="form-group">
                            <label for="category_product_desc">Mô Tả Danh Mục</label>
                            <textarea style="resize: none;" rows="5" class="form-control" name="category_product_desc" id="category_product_desc" placeholder="Mô Tả Danh Mục"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="category_product_theloai"> Thể loại</label>
                            <input type="text" class="form-control" name="category_product_theloai" id="category_product_desc" placeholder="Mô Tả Danh Mục"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Hiện Thị</label>
                            <select name="category_product_status" class="form-control input-sm m-bot15">
                                <option value = "0">Ẩn  </option>
                                <option value ="1">Hiện Thị</option>
                            </select>
                        </div>
      
                        <button type="submit" name ="add_category_product" class="btn btn-info">Thêm</button>
                    </form>
                    </div>

                </div>
            </section>

    </div>
    
<div class="row">
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('admin_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\hoang\OneDrive\Máy tính\webshopphake\resources\views/admin/add_category_product.blade.php ENDPATH**/ ?>