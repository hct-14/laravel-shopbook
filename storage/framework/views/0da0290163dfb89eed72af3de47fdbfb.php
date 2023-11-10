
<?php $__env->startSection('admin_content'); ?>
<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                Cập Nhập Sản Phẩm
            </header>
            <?php
            $message = Session::get('message');
            if ($message) {
                echo '<p style="color: red;">' . $message . '</p>';
                Session::put('message', null);
            }
            ?>
            <div class="panel-body">
                <div class="position-center">
                    <form role="form" action="<?php echo e(url('update-product-1/'.$editProduct_1->product_id)); ?>" method="post" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <div class="form-group">
                            <label for="product_title">Tên Sản Phẩm</label>
                            <input type="text" value="<?php echo e($editProduct_1->product_title); ?>" name="product_title" class="form-control" id="product_title" placeholder="Enter product name">
                        </div>
                        <div class="form-group">
                            <label for="product_price">Giá</label>
                            <input type="text" value="<?php echo e($editProduct_1->product_price); ?>" name="product_price" class="form-control" id="product_price">
                        </div>
                        <div class="form-group">
                            <label for="product_image">Hình Ảnh</label>
                            <input type="file" name="product_image" class="form-control" id="product_image">
                            <img src="<?php echo e(asset('uploads/product/' . $editProduct_1->product_image)); ?>" width="100">
                        </div>
                        <div class="form-group">
                            <label for="product_description">Noi Dung</label>
                            <textarea style="resize: none;" rows="5" class="form-control" name="product_description" id="product_description" placeholder="Mô tả nội dung sản phẩm"><?php echo e($editProduct_1->product_description); ?></textarea>
                        </div>
                        
                        
                        <div class="form-group">
                            <label for="product_author">Nhà Xuất Bản</label>
                            <input type="text" class="form-control" value="<?php echo e($editProduct_1->product_author); ?>" name="product_author" id="product_1_theloai">
                        </div>
                        
                        <button type="submit" name="add_product" class="btn btn-info">Cập Nhập</button>
                    </form>
                </div>
            </div>
        </section>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\hct-laravel\webshopphake\resources\views/admin/edit_product_1.blade.php ENDPATH**/ ?>