
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
                    <?php $__currentLoopData = $editCategoryProduct; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $edit_value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>  

    
                    <div class="position-center">
                        <form role="form" action="<?php echo e(url('update-category-product/'.$edit_value->product_id)); ?>" method="post" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <div class="form-group">
                                <label for="product_title">Tên Sản Phẩm</label>
                                <input type="text" value="<?php echo e($edit_value->product_title); ?>"  name="product_title" class="form-control" id="product_title" placeholder="Enter product name">
                            </div>
    
                            <div class="form-group">
                                <label for="product_price">Giá</label>
                                <input type="text"  value="<?php echo e($edit_value->product_price); ?>" name="product_price" class="form-control" id="product_price">
                            </div>
    
                            <div class="form-group">
                                <label for="product_image">Hình Ảnh</label>
                                <input type="file"  value="<?php echo e($edit_value->product_image); ?>" name="product_image" class="form-control" id="product_image">
                                

                                    <img src="<?php echo e(asset('uploads/product/' . $edit_value->product_image)); ?>" width="100">
                            </div>
    

                            <div class="form-group">
                                <label for="product_description">Nội Dung</label>
                                <textarea style="resize: none;" rows="5" class="form-control" name="product_description" id="product_description" placeholder="Nhập nội dung"><?php echo e($edit_value->product_description); ?></textarea>
                            </div>
                            <div class="form-group">
                                <label for="product_brand">Thể Loại</label>
                                <select name="product_brand" id="product_brand" class="form-control input-sm m-bot15">
                                    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cate_pro): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($cate_pro->category_id); ?>" <?php if($cate_pro->category_id == $edit_value->product_brand): ?> selected <?php endif; ?>><?php echo e($cate_pro->category_name); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                                
                            </div>
    
                            <div class="form-group">
                                <label for="product_author">Nhà Xuất Bản</label>

                                <input type="text" class="form-control"value="<?php echo e($edit_value->product_author); ?>" name="product_author" id="product_theloai">

                            </div>
    
                            <div class="form-group">
                                <label for="product_status">Hiện Thị</label>
                                <select name="product_status" class="form-control input-sm m-bot15">
                                    <option value="0">Ẩn</option>
                                    <option value="1">Hiện Thị</option>
                                </select>
                            </div>
    
      
                        <button type="submit" name ="add_product" class="btn btn-info">Cập Nhập</button>
                    </form>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </div>
            </section>

    </div>

    </div>
</div>
<div class="row">
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('admin_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\hct-laravel\webshopphake\resources\views/admin/edit_category_product.blade.php ENDPATH**/ ?>