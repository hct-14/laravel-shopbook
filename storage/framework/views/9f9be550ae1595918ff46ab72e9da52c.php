
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
              <th>Người đặt hàng</th>
              <th>Tên sản phẩm</th>
              <th>Giá</th>

              <th>Email</th>
              <th>Số điện thoại</th>
              <th>Tổng tiền</th>
              
              <th>Ghi Chú</th>
              <th>Duyệt</th>
              <th style="width:30px;"></th>
            </tr>
          </thead>
          <tbody>
            <?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $oder_pro): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
              <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label></td>
              <td><?php echo e($oder_pro->order_receiver); ?></td>
              <td><?php echo e($oder_pro->product_title); ?> </td>
              
              <td><?php echo e($oder_pro->order_value); ?> </td>

              
              <td><?php echo e($oder_pro->oder_email); ?></td>
              <td><?php echo e($oder_pro->order_phone); ?></td>
              <td><?php echo e($oder_pro->order_value); ?></td>

              
              <td><?php echo e($oder_pro->order_notes); ?></td>

              <td>
                <span class="text-ellipsis">
                  <?php
                  if ($oder_pro->oder_status == 0) {
                  ?>
                    <a href="<?php echo e(URL::to('/unactive/' . $oder_pro->order_id)); ?>">
                      <span class="fa-thumb-styling fa fa-thumbs-up" style="font-size: 40px; color: green;"></span>
                    </a>
                  <?php
                  } else {
                  ?>
                    <a href="<?php echo e(URL::to('/active/' . $oder_pro->order_id)); ?>">
                      <span class="fa-thumb-styling fa fa-thumbs-down" style="font-size: 40px; color: red;"></span>
                    </a>
                  <?php
                  }
                  ?>
                </span>
              </td>
              
              
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

<?php echo $__env->make('admin_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\hct-laravel\hoangcongthanh-final\resources\views/admin/all_order.blade.php ENDPATH**/ ?>