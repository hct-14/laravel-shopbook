
<?php $__env->startSection('admin_content'); ?>
<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                Thêm Danh Mục Sản Phẩm
            </header>
            <div class="panel-body">
                

                <div class="position-center">
                    <form role="form" action="<?php echo e(url('save-category-product')); ?>" method="post" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <div class="form-group">
                            <label for="product_title">Tên Sản Phẩm</label>
                            <input type="text" name="product_title" class="form-control" id="product_title" placeholder="Nhập tên sản phẩm">
                        </div>
                        

                        <div class="form-group">
                            <label for="product_price">Giá</label>
                            <input type="text" name="product_price" class="form-control" id="product_price">
                        </div>
                        <div class="form-group">
                            <label for="product_image">Hình Ảnh</label>
                            <input type="file" name="product_image" class="form-control" id="product_image">
                        </div>
                        
                        <div class="form-group">
                            <label  for="product_description">Nội Dung</label>
                            <textarea style="resize: none;" rows="5" class="form-control" name="product_description" id="product_description" placeholder="Nhập nội dung"></textarea>
                        </div>
                        
                        <div class="form-group">
                            <label for="product_brand">Thể Loại</label>
                            <select name="product_brand" id="product_brand"class="form-control input-sm m-bot15">
                                <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cate_pro): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($cate_pro->category_id); ?>"><?php echo e($cate_pro->category_name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                        
                        <div class="form-group">
                            <label for="product_author">Nhà Xuất Bản</label>
                            <input type="text" class="form-control" name="product_author" id="product_author">
                        </div>
                        
                        <div class="form-group">
                            <label for="product_quantity">Số Lượng</label>
                            <input type="text" class="form-control" name="product_quantity" id="product_quantity">
                        </div>
                        

                        <button type="submit" name="add_product" class="btn btn-info">Thêm</button>
                    </form>
                </div>
            </div>
        </section>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\hct-laravel\webshopphake\resources\views/admin/add_category_product.blade.php ENDPATH**/ ?>