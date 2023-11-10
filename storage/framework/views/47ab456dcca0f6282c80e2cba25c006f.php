
<?php $__env->startSection('admin_content'); ?>
<div class="row">
    <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    Thêm Thương Danh Mục Sản Phẩm
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
                        <form role="form" action="<?php echo e(url('save-brand-product')); ?>" method="post">
                            <?php echo csrf_field(); ?>
                        <div class="form-group">
                            <label for="category_desc"> Thể loại</label>
                            <input type="text" class="form-control" name="category_desc" id="category_desc" placeholder="Mô Tả Danh Mục"></textarea>
                        </div>
                        <button type="submit" name ="add_brand_product" class="btn btn-info">Thêm</button>
                    </form>
                    </div>

                </div>
            </section>

    </div>
 
<div class="row">
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('admin_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\hct-laravel\webshopphake\resources\views/admin/add_brand_product.blade.php ENDPATH**/ ?>