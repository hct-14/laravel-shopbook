<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Đăng ký</title>
    <script src="<?php echo e(asset("../FE2/js/login-hct.js")); ?>"></script>
    <link rel="stylesheet" href="<?php echo e(asset("../FE2/css/user.login-hct.css")); ?>">
</head>
<body>
  <form action="<?php echo e(url('user-res')); ?>" method="POST" class="form" id="form-1" enctype="multipart/form-data">
    <?php echo csrf_field(); ?> 

    <h3 class="heading">Thành viên đăng ký</h3>

    <?php if($message = Session::get('message')): ?>
        <p class="text-danger"><?php echo e($message); ?></p>
    <?php endif; ?>

    <div class="spacer"></div>

    <div class="form-group">
        <label for="user_fullname" class="form-label">Tên đầy đủ</label>
        <input id="user_fullname" name="user_fullname" type="text" placeholder="VD: Hoadsd" class="form-control">
        <span class="form-message"></span>
    </div>

    <div class="form-group">
        <label for="user_email" class "form-label">Email</label>
        <input id="user_email" name="user_email" type="email" placeholder="VD: email@gmail.com" class="form-control">
        <span class="form-message"></span>
    </div>
    
    <div class="form-group">
        <label for="user_loginname" class="form-label">Tên Đăng Nhập</label>
        <input id="user_loginname" name="user_loginname" type="text" placeholder="VD: Hoadsd" class="form-control">
        <span class="form-message"></span>
    </div>
    
    <div class="form-group">
        <label for="user_password" class="form-label">Mật khẩu</label>
        <input id="user_password" name="user_password" type="password" placeholder="Nhập mật khẩu" class="form-control">
        <span class="form-message"></span>
    </div>

    <div class="form-group">
        <label for="user_phone" class="form-label">Số điện thoại</label>
        <input id="user_phone" name="user_phone" type="tel" placeholder="0123456" class="form-control">
        <span class="form-message"></span>
    </div>
    
    <div class="form-group">
        <label for="user_avt" class="form-label">Thêm ảnh đại diện</label>
        <input id="user_avt" name="user_avt" type="file"  class="form-control">
        <span class="form-message"></span>
    </div>

    <div class="form-group">
        <label for="user_address" class="form-label">Địa chỉ</label>
        <input id="user_address" name="user_address" type="text" placeholder="Hà Nội" class="form-control">
        <span class="form-message"></span>
    </div>

    <button type="submit" name="add_user" class="form-submit">Đăng ký</button>
</form>

</body>
</html>
<?php /**PATH C:\xampp\htdocs\hct-laravel\hoangcongthanh-final\resources\views/user/register.blade.php ENDPATH**/ ?>