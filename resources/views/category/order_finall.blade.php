<!DOCTYPE html>
<html lang="vi" class="h-100">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>checkout</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset("../FE3/vendor/bootstrap/css/bootstrap.min.css") }}" type="text/css">
    <!-- Font awesome -->
    <link rel="stylesheet" href="{{ asset("../FE3/vendor/font-awesome/css/font-awesome.min.css") }}" type="text/css">

    <!-- Custom css - Các file css do chúng ta tự viết -->
    <link rel="stylesheet" href="{{ asset("../FE3/assets/css/app.css") }}" type="text/css">
    <style>
        .success {
    padding: 100px 0 50px;
    text-align: center;
}
.success-top {
    text-align: center;
    padding-bottom: 12px;
    border-bottom: 2px solid #dddddd;
}
.success-top p {
    font-size: 25px;
    font-family: var(--main-text-font);
    color: #378000;
}
.success-text {
    text-align: center;
    padding: 20px 0;
    font-family: var(--main-text-font);
    font-size: 14px;
}
.success-button {
    text-align: center;
}
.success-button button {
    height: 35px;
    padding: 0 20px;
    cursor: pointer;
}
.success-button button:first-child {
    background-color: #fff;
    border: 2px solid #378000 ;
}
.success-button button:last-child {
    background-color: black;
    color: #FFF;
    border: none;
}
.success > p {
    margin: 30px 0;
}
/* Mã CSS để ẩn cửa sổ modal ban đầu */
.modal {
    display: none;
    position: fixed;
    z-index: 1;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    overflow: auto;
    background-color: rgba(0, 0, 0, 0.4);
}

.modal-content {
    background-color: #fefefe;
    margin: 15% auto;
    padding: 20px;
    border: 1px solid #888;
    width: 80%;
}

.close {
    color: #aaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover {
    color: black;
}

        </style>
</head>

<body>
    <!-- header -->
    <nav class="navbar navbar-expand-md navbar-dark sticky-top bg-dark">
        <div class="container">
            <a class="navbar-brand" href="https://nentang.vn">Nền tảng</a>
            <div class="navbar-collapse collapse" id="navbarCollapse">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ asset("/") }}">Trang chủ <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="products.html">Sản phẩm</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.html">Giới thiệu</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.html">Liên hệ</a>
                    </li>
                </ul>
                <form class="form-inline mt-2 mt-md-0" method="get" action="search.html">
                    <input class="form-control mr-sm-2" type="text" placeholder="Tìm kiếm" aria-label="Search"
                        name="keyword_tensanpham">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Tìm kiếm</button>
                </form>
            </div>
            <ul class="navbar-nav px-3">
                <li class="nav-item text-nowrap">
                    <a class="nav-link" href="cart.html">Giỏ hàng</a>
                </li>
                <li class="nav-item text-nowrap">
                    {{-- <a class="nav-link" href="login.html">Đăng nhập</a> --}}
                </li>
            </ul>
        </div>
    </nav>
    <!-- end header -->
    <section class="success">
        <div class="success-top">
            <p>ĐẶT HÀNG THÀNH CÔNG</p>
        </div>
        <div class="success-text">
            <p>Chào <span  style="font-size: 20px; color: #378000;">
   
                @if(session('fullName'))
                {{ session('fullName')}}
            @else
                <span>Không có</span>
            @endif

            
            </span>, đơn hàng của bạn với mã <a  style="font-size: 20px; color: #378000;" href="">IVM3272290</a> đã được đặt thành công. <br>
                Đơn hàng của bạn đã được xác nhận tự động. <br>
                <span style="font-weight: bold;">Hiện tại do đang trong Chương trình Sale lớn, đơn hàng của quý khách sẽ gửi chậm hơn so với thời gian dự kiến từ 5-10 ngày. Rất mong quý khách thông cảm vì sự bất tiện này!</span><br>
                {{-- <span style="color: red;">(Lưu ý: Nhóm chúng tôi sẽ không gọi xác nhận đơn hàng, đơn hàng đươc xử lý tự động và sẽ giao cho bạn trong thời sớm nhất)</span><br> --}}
                Cám ơn <span  style="font-size: 20px; color: #378000;">
                    @if(session('fullName'))
                    {{ session('fullName') }}
                @else
                    <span>Không có</span>
                @endif
    
                </span>đã tin dùng sản phẩm của chúng tôi.</p>
        </div>
        <div class="success-button">
            <button id="openModalBtn">XEM CHI TIẾT ĐƠN HÀNG</button>

            <!-- Cửa sổ modal -->
            <div id="myModal" class="modal">
                <div class="modal-content">
                    <span id="closeModalBtn" class="close">&times;</span>
                    <p>

                        <table>
                            <tr>
                                <th>Họ và tên</th>
                                <th>Tên sp</th>
                                <th>giá</th>
                                <th>ngày đặt hàng</th>

                            </tr>
                            @foreach ($checkthongtin as $item)                             
                            <tr>
                                <td>{{$item->user_fullname}} </td>
                                <td>{{$item->product_title}} </td>
                                <td>{{$item->order_value}} </td>
                                <td>{{$item->order_created_time}} </td>

                            </tr>
                            @endforeach
                        </table>


                    </p>
                
                </div>
        </div>
        <button>TIẾP TỤC MUA SẮM</button>
            </div>          
        </div>
        <p>Mọi thắc mắc quý khách vui lòng liên hệ hotline <span  style="font-size: 20px; color: red;">0246 662 3434 </span> hoặc chat với kênh hỗ trợ trên website để được hỗ trợ nhanh nhất.</p>
</section>

    <!-- footer -->
    <footer class="footer mt-auto py-3">
        <div class="container">
            <span>Bản quyền © bởi <a href="https://nentang.vn">Nền Tảng</a> - <script>document.write(new Date().getFullYear());</script>.</span>
            <span class="text-muted">Hành trang tới Tương lai</span>

            <p class="float-right">
                <a href="#">Về đầu trang</a>
            </p>
        </div>
    </footer>
    <!-- end footer -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{ asset("../FE3/vendor/jquery/jquery.min.js") }}"></script>
    <script src="{{ asset("../FE2/vendor/popperjs/popper.min.js") }}"></script>
    <script src="{{ asset("../FE3/vendor/bootstrap/js/bootstrap.min.js") }}"></script>

    <!-- Custom script - Các file js do mình tự viết -->
    <script src="{{ asset("../FE3/assets/js/app.js") }}"></script>
</body>
<script>
 // JavaScript để hiển thị và ẩn cửa sổ modal
var modal = document.getElementById("myModal");
var openModalBtn = document.getElementById("openModalBtn");
var closeModalBtn = document.getElementById("closeModalBtn");

openModalBtn.onclick = function() {
    modal.style.display = "block";
}

closeModalBtn.onclick = function() {
    modal.style.display = "none";
}

window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

</script>

</html>
