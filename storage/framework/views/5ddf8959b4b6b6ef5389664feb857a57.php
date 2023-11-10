<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="<?php echo e(asset("../FE2/js/login-hct.js")); ?>"></script>
    <link rel="stylesheet" href="<?php echo e(asset("../FE2/css/user.login-hct.css")); ?>">

</head>
<body>
    <div class="main">
      <form action="/user-login" method="POST" class="form" id="form-2">
        <?php echo csrf_field(); ?>

        <?php if(Session::has('message')): ?>
            <p style="color: red;"><?php echo e(Session::get('message')); ?></p>
        <?php endif; ?>
        <h3 class="heading">Đăng nhập</h3>

        <div class="spacer"></div>

        <div class="form-group">
            <label for="user_loginname" class="form-label">Tài Khoản</label>
            <input id="user_loginname" name="user_loginname" 
            type="text" placeholder="thanh1" class="form-control"required="">
            <span class="form-message"></span>
        </div>

        <div class="form-group">
            <label for="user_password" class="form-label">Mật khẩu</label>
            <input id="user_password" name="user_password" 
            type="password" placeholder="Nhập mật khẩu" class="form-control"required="">
            <span class="form-message"></span>
        </div>

        <button type="submit" class="form-submit">Đăng nhập</button>
    </form>
</div>
      


</body>
</html><?php /**PATH C:\xampp\htdocs\hct-laravel\hoangcongthanh\resources\views/user/login.blade.php ENDPATH**/ ?>