
<?php $__env->startSection('admin_content'); ?>
<div class="row">
    <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                Cập nhập danh mục Sản Phẩm
                </header>

                        <?php
                        $message = Session::get('message');
                        if ($message) {
                            echo '<p style="color: red;">' . $message . '</p>';
                            Session::put('message', null);
                        }
                        ?>     
                 <div class="panel-body"> 
                    <?php $__currentLoopData = $edit_category_product; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $edit_value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>  
                    <div class="position-center">
                        <form role="form" action="<?php echo e(url('update-category-product')); ?>" method="post">
                            <?php echo csrf_field(); ?>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Tên Danh Mục</label>
                            <input type="text" value="<?php echo e($edit_value->category_name); ?>"  name ="category_product_name" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
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

                        <button type="submit" name ="add_category_product" class="btn btn-info">Cập nhập</button>
                    </form>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </section>

    </div>
    
<div class="row">
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('admin_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\hct-laravel\webshopphake\resources\views/admin/edit_category.blade.php ENDPATH**/ ?>