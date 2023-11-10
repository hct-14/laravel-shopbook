
<?php $__env->startSection('admin_content'); ?>

<div class="table-agile-info">
    <div class="panel panel-default">
      <div class="panel-heading">
        Liệt kê danh mục sản phẩm
      </div>
      <div class="row w3-res-tb">
        <div class="col-sm-5 m-b-xs">
          <select class="input-sm form-control w-sm inline v-middle">
            <option value="0">Bulk action</option>
            <option value="1">Delete selected</option>
            <option value="2">Bulk edit</option>
            <option value="3">Export</option>
          </select>
          <button class="btn btn-sm btn-default">Apply</button>
        </div>
        <div class="col-sm-4">
        </div>
        <div class="col-sm-3">
          <div class="input-group">
            <input type="text" class="input-sm form-control" placeholder="Search">
            <span class="input-group-btn">
              <button class="btn btn-sm btn-default" type="button">Go!</button>
            </span>
          </div>
        </div>
      </div>
      <div class="table-responsive">
        <?php
        $message = Session::get('message');
        if ($message) {
            echo '<p style="color: red;">' . $message . '</p>';
            Session::put('message', null);
        }
        ?>
        <table class="table table-striped b-t b-light">
          <thead>
            <tr>
              <th style="width:20px;">
                <label class="i-checks m-b-none">
                  <input type="checkbox"><i></i>
                </label>
              </th>
              <th>Tên Sản Phẩm</th>
              <th>Giá</th>
              <th>Hình Ảnh</th>
              <th>Nội Dung</th>
              
              <th>Nhà Xuất Bản</th>
              <th>Hiện Thị</th>
              <th style="width:30px;"></th>
            </tr>
          </thead>
          <tbody>
            <?php $__currentLoopData = $brand_product; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cate_pro): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
              <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label></td>
              <td><?php echo e($cate_pro->product_title); ?></td>
              <td><?php echo e($cate_pro->product_price); ?></td>
              <td><img src="<?php echo e(asset('/uploads/product/' . $cate_pro->product_image)); ?>" width="100"></td>
              <td><?php echo e($cate_pro->product_description); ?></td>
              
              <td><?php echo e($cate_pro->product_author); ?></td>
              <td>

              </td>
              <td><span class="text-ellipsis">
                <a href="<?php echo e(URL::to('/edit-product-1/'.$cate_pro->product_id)); ?>" class="active styling-edit" ui-toggle-class="">
                  <i class="fa fa-pencil-square-o text-success text-active"></i>
                </a>
                <a href="<?php echo e(URL::to('/delete-product-1/'.$cate_pro->product_id)); ?>" class="active styling-edit" ui-toggle-class="">
                  <i class="fa fa-times text-danger text"></i>
                </a>
              </span></td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </tbody>
        </table>
      </div>
      <footer class="panel-footer">
        <div class="row">
          <div class="col-sm-5 text-center">
            <small class="text-muted inline m-t-sm m-b-sm">showing 20-30 of 50 items</small>
          </div>
          <div class="col-sm-7 text-right text-center-xs">
            <ul class="pagination pagination-sm m-t-none m-b-none">
              <li><a href=""><i class="fa fa-chevron-left"></i></a></li>
              <li><a href="">1</a></li>
              <li><a href="">2</a></li>
              <li><a href="">3</a></li>
              <li><a href="">4</a></li>
              <li><a href=""><i class="fa fa-chevron-right"></i></a></li>
            </ul>
          </div>
        </div>
      </footer>
    </div>
  </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\hct-laravel\webshopphake\resources\views/admin/all_product_1.blade.php ENDPATH**/ ?>