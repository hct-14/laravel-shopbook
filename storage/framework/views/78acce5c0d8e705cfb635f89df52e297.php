<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="<?php echo e(asset("../FE2/js/soanngu.js")); ?>"></script>
    <link rel="stylesheet" href="<?php echo e(asset("../FE2/css/soanngu.css")); ?>">

<style>
    .new-comment-avatar img{
        height: 40px;
        width: 40px;
        border-radius: 50%
    }
    .user-avatar img{
        height: 40px;
        width: 40px;
        border-radius: 50%
    }
    </style>
</head>
<body>
<nav>
    <div class="container">
        <ul>
            <li><a href="#">Nền tảng</a></li>
            <li><a href="#">Trang chủ</a></li>
            <li><a href="#">Quản trị</a></li>
            <li><a href="#">Sản phẩm</a></li>
            <li><a href="#">Giới thiệu</a></li>
            <li><a href="#">Liên hệ</a></li>
            <li>
                <input type="text" placeholder="Tìm kiếm">
                <button class="nut">Tìm kiếm</button>
            </li>
            <li><a href="#">Giỏ hàng</a></li>
            <li><a href="#">Đăng nhập</a></li>
        </ul>
    </div>
</nav>
<main>
    <form action="CheckDienDan" method="POST">

    </form>
    <form action="<?php echo e(url('/diendan')); ?>" method="post" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <?php if(session('UserId')): ?>
            <input type="hidden" name="user_id" value="<?php echo e(session('UserId')); ?>"> 
        <?php endif; ?>
        <div class="new-comment-container">
            <div class="bothanh">
                <div class="new-comment-avatar">
                    <?php if(session('avt')): ?>
                        <img src="<?php echo e(asset('/uploads/avt/' . session('avt'))); ?>" alt="">
                    <?php else: ?>
                        <span>Không có</span>
                    <?php endif; ?>
                </div>
                <div class="bothanh1">
                    <span>
                        <?php if(session('fullName')): ?>
                            <?php echo e(session('fullName')); ?>

                        <?php else: ?>
                            <!-- Add a default avatar image or text here -->
                        <?php endif; ?>
                    </span>
                </div>
            </div>
            <div class="new-comment-input">
                <textarea name="bothanhcmt" id="new-comment-text" placeholder="Add a comment..."></textarea>
            </div>
            <div class="comment-img-">
                <input id="diendan_img" name="diendan_img" type="file" class="form-control">
            </div>
            <button class="new-comment-button" type="submit">Đăng</button>
        </div>
    </form>
    <?php $__currentLoopData = $diendan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dien_pro): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

    
    <div class="comment-container">
            
        <div class="user-avatar">
            <img src="<?php echo e(asset('/uploads/avt/' . session('avt'))); ?>" alt="">

        </div>
        <div class="comment-content">
            <div class="user-name"><?php echo e($dien_pro->user_fullname); ?> </div>
            <div class="comment-text"><?php echo e($dien_pro->diendan_tittle); ?></div>
             <img src="<?php echo e(asset('/uploads/prodcut1/'.$dien_pro->diendan_img)); ?>" alt="Comment Image" class="comment-image">
            <div class="comment-actions">
                <a class="like-icon" id="comment1-like-icon" onclick="toggleLike('comment1')"><i class="fa fa-thumbs-up"></i> Like</a>
                <a class="reply-button" id="comment1-reply-button" onclick="toggleReplyInput('comment1')">Reply</a><br>
                
           
            </div>
            <?php $__currentLoopData = $diendan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dien_pro): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <form action="<?php echo e(url('CheckDienDan')); ?>" method="post" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <div class="reply-input" id="comment<?php echo e($dien_pro->diendan_id); ?>-reply-input">
                    <textarea name="khachtraloi" placeholder="Add a comment..."></textarea>
                    <?php if(session('UserId')): ?>
                    <input type="text" name="re_user" value="<?php echo e(session('UserId')); ?>">
                        <?php else: ?>
                            <!-- Add a default avatar image or text here -->
                        <?php endif; ?>
                    <input type="hidden" name="diendan_id" value="<?php echo e($dien_pro->diendan_id); ?>">
                    <input type="file" name="re_images">

                    <button class="new-comment-button" type="submit">Đăng</button>
                </div>
            </form>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  
            <div class="commenttest">
                <?php $__currentLoopData = $k1_rediendan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k1_pro): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if($k1_pro->diendan_id === $dien_pro->diendan_id): ?>
                    <div class="comment-test-avt">
                        <div class="comment-test-img">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTP6StXVIhVj0fJbB1cyP2kXWFJ_TiHlqzddrhTpnjfrr2LdJc01N-7MOGYm0kz33zJkSI&usqp=CAU" alt="Comment Image" class="comment-image">
                        </div>
                        <div class="comment-test1">
                            <span><?php echo e($k1_pro->user_fullname); ?></span>
                        </div>
                    </div>
                    <div class="commenttest2">
                        <div class="comment-test-text">
                            <span><?php echo e($k1_pro->diendan_tittle); ?></span>
                        </div>
                        <div class="comment-img">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTP6StXVIhVj0fJbB1cyP2kXWFJ_TiHlqzddrhTpnjfrr2LdJc01N-7MOGYm0kz33zJkSI&usqp=CAU" alt="Comment Image" class="comment-image">
                        </div>
                    </div>
                <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            
                

            </div>

        </div>

    </div>

    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    <div class="comment-container">
        <div class="user-avatar"></div>
        <div class="comment-content">
            <div class="user-name">Jane Smith</div>
            <div class="comment-text">Đây là sản phẩn chất lượng</div>
            <div class="comment-actions">
                <a class="like-icon" id="comment2-like-icon" onclick="toggleLike('comment2')"><i class="fa fa-thumbs-up"></i> Like</a>
                <a class "reply-button" id="comment2-reply-button" onclick="toggleReplyInput('comment2')">Reply</a><br>
                
            </div>
            <div class="reply-input" id="comment2-reply-input">
                <textarea placeholder="Add a comment..."></textarea>
                <input type="file" accept="image/*">
                <button>Submit</button>
            </div>
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTP6StXVIhVj0fJbB1cyP2kXWFJ_TiHlqzddrhTpnjfrr2LdJc01N-7MOGYm0kz33zJkSI&usqp=CAU" alt="Comment Image" class="comment-image">
        </div>
    </div>

</main>
<footer>
    <div class="container">
        &copy; 2023 Tên Công Ty - Tất cả quyền đã được bảo lưu.
    </div>
</footer>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\hct-laravel\hoangcongthanh-final\resources\views/user/diendan.blade.php ENDPATH**/ ?>