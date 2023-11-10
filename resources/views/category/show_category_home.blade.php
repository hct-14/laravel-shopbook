<!doctype html>
<html lang="en">
   <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>NHASACHTV - Nhà sách trực tuyến</title>
      <!-- Favicon -->
      <link rel="shortcut icon" href="{{asset("../FE2/images/favicon.ico")}}" />
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="{{asset("../FE2/css/bootstrap.min.css")}}">
      <!-- Typography CSS -->
      <link rel="stylesheet" href="{{asset("../FE2/css/typography.css")}}">
      <!-- Style CSS -->
      <link rel="stylesheet" href="{{asset("../FE2/css/style.css")}}">
      <!-- Responsive CSS -->  
      <link rel="stylesheet" href="{{asset("..FE2/css/responsive.css")}}">
   </head>
   <body>
      <!-- Wrapper Start -->
      <div class="wrapper">
         <!-- Sidebar  -->
         <div class="iq-sidebar">
            <div class="iq-sidebar-logo d-flex justify-content-between">
               <a href="{{asset("/trang chu")}}" class="header-logo">
                  <img src="{{asset("../FE2/images/logo.png")}}" class="img-fluid rounded-normal" alt="">
                  <div class="logo-title">
                     <span class="text-primary text-uppercase">NHASACHTV</span>
                  </div>
               </a>
            </div>
            <div id="sidebar-scrollbar">
               <nav class="iq-sidebar-menu">
                  <ul id="iq-sidebar-toggle" class="iq-menu">
                     <li class="active active-menu">
                        <a href="#dashboard" class="iq-waves-effect" data-toggle="collapse" aria-expanded="true"><span class="ripple rippleEffect"></span><i class="las la-home iq-arrow-left"></i><span>Trang Chủ</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                        <ul id="dashboard" class="iq-submenu collapse show" data-parent="#iq-sidebar-toggle">
                        </ul>
                     </li>
                     <li>
                        <a href="#ui-elements" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="lab la-elementor iq-arrow-left"></i><span>Danh mục sản phẩm</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                        <ul id="ui-elements" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                           {{-- @foreach ($brand_product as $cate_pro)
                           <li class="elements">
                             <a href="{{ URL::to("/danh-muc-san-pham/". $cate_pro->brand_id) }}" class="iq-waves-effect">
                               <i class="ri-play-circle-line"></i>
                               <span>{{ $cate_pro->brand_desc }} </span>
                               <i class="ri-arrow-right-s-line iq-arrow-right"></i>
                             </a>
                           </li>
                         @endforeach --}}
                     
                        </ul>
                     </li>
                     <li>
                        <a href="#pages" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="las la-file-alt iq-arrow-left"></i><span>Admin Dashboard</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                        <ul id="pages" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                           <li><a href="admin-dashboard.html"><i class="ri-question-answer-line"></i>Dashboard</a></li>

                           <li>
                              <a href="#extra-pages" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="ri-pantone-line"></i><span>Extra Pages</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                              <ul id="extra-pages" class="iq-submenu collapse" data-parent="#pages">
                                 <li><a href="pages-invoice.html"><i class="ri-question-answer-line"></i>Invoice</a></li>
                                 <li><a href="pages-comingsoon.html"><i class="ri-mastercard-line"></i>Login</a></li>
                                 <li><a href="pages-faq.html"><i class="ri-compasses-line"></i>Register</a></li>
                              </ul>
                           </li>
                        </ul>
                     </li>
                     <li><a href="book-page.html"><i class="ri-book-line"></i>Yêu Thích</a></li>
                     <li><a href="book-pdf.html"><i class="ri-book-line"></i>Sách PDF</a></li>
                     <li><a href="sign-in.html"><i class="ri-book-line"></i>Logout</a></li>

                  </ul>
               </nav>
            </div>
         </div>
         <!-- TOP Nav Bar -->
         <div class="iq-top-navbar">
            <div class="iq-navbar-custom">
               <nav class="navbar navbar-expand-lg navbar-light p-0">
                  <div class="iq-menu-bt d-flex align-items-center">
                     <div class="wrapper-menu">
                        <div class="main-circle"><i class="las la-bars"></i></div>
                     </div>
                     <div class="iq-navbar-logo d-flex justify-content-between">
                        <a href="index.html" class="header-logo">
                           <img src="{{asset("../FE2/images/logo.png")}}" class="img-fluid rounded-normal" alt="">
                           <div class="logo-title">
                              <span class="text-primary text-uppercase">img01</span>
                           </div>
                        </a>
                     </div>
                  </div>
                  <div class="navbar-breadcrumb">
                     <h5 class="mb-0">Trang Chủ</h5>
                  </div>
                  <div class="iq-search-bar">
                     <form action="#" class="searchbox">
                        <input type="text" class="text search-input" placeholder="Tìm kiếm sản phẩm...">
                        <a class="search-link" href="#"><i class="ri-search-line"></i></a>
                     </form>
                  </div>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"  aria-label="Toggle navigation">
                  <i class="ri-menu-3-line"></i>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                     <ul class="navbar-nav ml-auto navbar-list">
                        <li class="nav-item nav-icon search-content">
                           <a href="#" class="search-toggle iq-waves-effect text-gray rounded">
                              <i class="ri-search-line"></i>
                           </a>
                           <form action="#" class="search-box p-0">
                              <input type="text" class="text search-input" placeholder="Type here to search...">
                              <a class="search-link" href="#"><i class="ri-search-line"></i></a>
                           </form>
                        </li>
                        <li class="nav-item nav-icon">
                           <a href="#" class="search-toggle iq-waves-effect text-gray rounded">
                           <i class="ri-notification-2-line"></i>
                           <span class="bg-primary dots"></span>
                           </a>
                           <div class="iq-sub-dropdown">
                              <div class="iq-card shadow-none m-0">
                                 <div class="iq-card-body p-0">
                                    <div class="bg-primary p-3">
                                       <h5 class="mb-0 text-white">Thông Báo<small class="badge  badge-light float-right pt-1">4</small></h5>
                                    </div>
                                    <a href="#" class="iq-sub-card" >
                                       <div class="media align-items-center">
                                          <div class="">
                                             <img class="avatar-40 rounded" src="images/user/1.jpg" alt="">
                                          </div>
                                          <div class="media-body ml-3">
                                             <h6 class="mb-0 ">Đơn hàng giao thành công</h6>
                                             <small class="float-right font-size-12">Just Now</small>
                                             <p class="mb-0">95.000đ</p>
                                          </div>
                                       </div>
                                    </a>
                                    <a href="#" class="iq-sub-card" >
                                       <div class="media align-items-center">
                                          <div class="">
                                             <img class="avatar-40 rounded" src="images/user/02.jpg" alt="">
                                          </div>
                                          <div class="media-body ml-3">
                                             <h6 class="mb-0 ">Đơn hàng giao thành công</h6>
                                             <small class="float-right font-size-12">5 days ago</small>
                                             <p class="mb-0">255.000đ</p>
                                          </div>
                                       </div>
                                    </a>
                                    <a href="#" class="iq-sub-card" >
                                       <div class="media align-items-center">
                                          <div class="">
                                             <img class="avatar-40 rounded" src="images/user/03.jpg" alt="">
                                          </div>
                                          <div class="media-body ml-3">
                                             <h6 class="mb-0 ">Đơn hàng giao thành công</h6>
                                             <small class="float-right font-size-12">2 days ago</small>
                                             <p class="mb-0">79.000đ</p>
                                          </div>
                                       </div>
                                    </a>
                                    <a href="#" class="iq-sub-card" >
                                       <div class="media align-items-center">
                                          <div class="">
                                             <img class="avatar-40 rounded" src="images/user/04.jpg" alt="">
                                          </div>
                                          <div class="media-body ml-3">
                                             <h6 class="mb-0 ">Đơn hàng #7979 giao không thành công</h6>
                                             <small class="float-right font-size-12">3 days ago</small>
                                             <p class="mb-0">100.000đ</p>
                                          </div>
                                       </div>
                                    </a>
                                 </div>
                              </div>
                           </div>
                        </li>
                        <li class="nav-item nav-icon dropdown">
                           <a href="#" class="search-toggle iq-waves-effect text-gray rounded">
                           <i class="ri-mail-line"></i>
                           <span class="bg-primary dots"></span>
                           </a>
                           <div class="iq-sub-dropdown">
                              <div class="iq-card shadow-none m-0">
                                 <div class="iq-card-body p-0 ">
                                    <div class="bg-primary p-3">
                                       <h5 class="mb-0 text-white">Tin Nhắn<small class="badge  badge-light float-right pt-1">5</small></h5>
                                    </div>
                                    <a href="#" class="iq-sub-card">
                                       <div class="media align-items-center">
                                          <div class="">
                                             <img class="avatar-40 rounded" src="images/user/01.jpg" alt="">
                                          </div>
                                          <div class="media-body ml-3">
                                             <h6 class="mb-0 ">QT Shop</h6>
                                             <small class="float-left font-size-12">13 Jun</small>
                                          </div>
                                       </div>
                                    </a>
                                    <a href="#" class="iq-sub-card">
                                       <div class="media align-items-center">
                                          <div class="">
                                             <img class="avatar-40 rounded" src="images/user/02.jpg" alt="">
                                          </div>
                                          <div class="media-body ml-3">
                                             <h6 class="mb-0 ">Tran Thuan Store</h6>
                                             <small class="float-left font-size-12">20 Apr</small>
                                          </div>
                                       </div>
                                    </a>
                                    <a href="#" class="iq-sub-card">
                                       <div class="media align-items-center">
                                          <div class="">
                                             <img class="avatar-40 rounded" src="images/user/03.jpg" alt="">
                                          </div>
                                          <div class="media-body ml-3">
                                             <h6 class="mb-0 ">Hoang Vu Book</h6>
                                             <small class="float-left font-size-12">30 Jun</small>
                                          </div>
                                       </div>
                                    </a>
                                    <a href="#" class="iq-sub-card">
                                       <div class="media align-items-center">
                                          <div class="">
                                             <img class="avatar-40 rounded" src="images/user/04.jpg" alt="">
                                          </div>
                                          <div class="media-body ml-3">
                                             <h6 class="mb-0 ">Quang Minh Book</h6>
                                             <small class="float-left font-size-12">12 Sep</small>
                                          </div>
                                       </div>
                                    </a>
                                    <a href="#" class="iq-sub-card">
                                       <div class="media align-items-center">
                                          <div class="">
                                             <img class="avatar-40 rounded" src="images/user/05.jpg" alt="">
                                          </div>
                                          <div class="media-body ml-3">
                                             <h6 class="mb-0 ">TV Team</h6>
                                             <small class="float-left font-size-12">5 Dec</small>
                                          </div>
                                       </div>
                                    </a>
                                 </div>
                              </div>
                           </div>
                        </li>
                        <li class="nav-item nav-icon dropdown">
                           <a href="#" class="search-toggle iq-waves-effect text-gray rounded">
                           <i class="ri-shopping-cart-2-line"></i>
                           <span class="badge badge-danger count-cart rounded-circle">2</span>
                           </a>
                           <div class="iq-sub-dropdown">
                              <div class="iq-card shadow-none m-0">
                                 <div class="iq-card-body p-0 toggle-cart-info">
                                    <div class="bg-primary p-3">
                                       <h5 class="mb-0 text-white">Giỏ Hàng<small class="badge  badge-light float-right pt-1">2</small></h5>
                                    </div>
                                    <a href="#" class="iq-sub-card">
                                       <div class="media align-items-center">
                                          <div class="">
                                             <img class="rounded" src="images/cart/01.jpg" alt="">
                                          </div>
                                          <div class="media-body ml-3">
                                             <h6 class="mb-0 ">Night People book</h6>
                                             <p class="mb-0">$32</p>
                                          </div>
                                          <div class="float-right font-size-24 text-danger"><i class="ri-close-fill"></i></div>
                                       </div>
                                    </a>
                                    <a href="#" class="iq-sub-card">
                                       <div class="media align-items-center">
                                          <div class="">
                                             <img class="rounded" src="images/cart/02.jpg" alt="">
                                          </div>
                                          <div class="media-body ml-3">
                                             <h6 class="mb-0 ">The Sin Eater Book</h6>
                                             <p class="mb-0">$40</p>
                                          </div>
                                          <div class="float-right font-size-24 text-danger"><i class="ri-close-fill"></i></div>
                                       </div>
                                    </a>
                                    <div class="d-flex align-items-center text-center p-3">
                                       <a class="btn btn-primary mr-2 iq-sign-btn" href="checkout.html" role="button">Giỏ Hàng</a>
                                       <a class="btn btn-primary iq-sign-btn" href="checkout.html" role="button">Thanh Toán</a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </li>
                        <li class="line-height pt-3">
                           <a href="#" class="search-toggle iq-waves-effect d-flex align-items-center">
                              <img src="{{asset("../FE2/images/user/1.jpg")}}" class="img-fluid rounded-circle mr-3" alt="user">
                              <div class="caption">
                                 <h6 class="mb-1 line-height">Ông Trần Thuận</h6>
                                 <p class="mb-0 text-primary">Tài Khoản</p>
                              </div>
                           </a>
                           <div class="iq-sub-dropdown iq-user-dropdown">
                              <div class="iq-card shadow-none m-0">
                                 <div class="iq-card-body p-0 ">
                                    <div class="bg-primary p-3">
                                       <h5 class="mb-0 text-white line-height">Xin Chào Ông Trần Thuận</h5>
                                    </div>
                                    <a href="profile-edit.html" class="iq-sub-card iq-bg-primary-hover">
                                       <div class="media align-items-center">
                                          <div class="rounded iq-card-icon iq-bg-primary">
                                             <i class="ri-file-user-line"></i>
                                          </div>
                                          <div class="media-body ml-3">
                                             <h6 class="mb-0 ">Tài khoản của tôi</h6>
                                          </div>
                                       </div>
                                    </a>
                                    <a href="profile-edit.html" class="iq-sub-card iq-bg-primary-hover">
                                       <div class="media align-items-center">
                                          <div class="rounded iq-card-icon iq-bg-primary">
                                             <i class="ri-profile-line"></i>
                                          </div>
                                          <div class="media-body ml-3">
                                             <h6 class="mb-0 ">Sổ địa chỉ</h6>
                                          </div>
                                       </div>
                                    </a>
                                    <a href="#" class="iq-sub-card iq-bg-primary-hover">
                                       <div class="media align-items-center">
                                          <div class="rounded iq-card-icon iq-bg-primary">
                                             <i class="ri-account-box-line"></i>
                                          </div>
                                          <div class="media-body ml-3">
                                             <h6 class="mb-0 ">Đơn hàng của tôi</h6>
                                          </div>
                                       </div>
                                    </a>
                                    <a href="#" class="iq-sub-card iq-bg-primary-hover">
                                       <div class="media align-items-center">
                                          <div class="rounded iq-card-icon iq-bg-primary">
                                             <i class="ri-heart-line"></i>
                                          </div>
                                          <div class="media-body ml-3">
                                             <h6 class="mb-0 ">Yêu Thích</h6>
                                          </div>
                                       </div>
                                    </a>
                                    <div class="d-inline-block w-100 text-center p-3">
                                       <a class="bg-primary iq-sign-btn" href="sign-in.html" role="button">Sign out<i class="ri-login-box-line ml-2"></i></a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </li>
                     </ul>
                  </div>
               </nav>
            </div>
         </div>
         <!-- TOP Nav Bar END -->
         <!-- Page Content  -->
         <div id="content-page" class="content-page">
            <div class="container-fluid">
               <div class="row">

                     <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                        <div class="iq-card-header d-flex justify-content-between align-items-center position-relative">
                           <div class="iq-header-title">
                              <h4 class="card-title mb-0">Gợi ý cho bạn</h4>
                           </div>
                           <div class="iq-card-header-toolbar d-flex align-items-center">                              
                              <a href="category.html" class="btn btn-sm btn-primary view-more">Xem Thêm</a>
                           </div>
                        </div> 

                        <div class="iq-card-body">  
                           <div class="row">
                              @foreach ($all_category_product as $cate_pro)
                              <div class="col-sm-6 col-md-4 col-lg-3">
                                  <div class="iq-card iq-card-block iq-card-stretch iq-card-height browse-bookcontent">
                                      <div class="iq-card-body p-0">
                                          <div class="d-flex align-items-center">
                                              <div class="col-6 p-0 position-relative image-overlap-shadow">
                                                  <a href="javascript:void();">
                                                      <img class="img-fluid rounded w-100" src="{{ asset('uploads/product/' . $cate_pro->product_image) }}" alt="">
                                                  </a>
                                                  <div class="view-book">
                                                      <a href="book-page.html" class="btn btn-sm btn-white">Mua Ngay</a>
                                                  </div>
                                              </div>
                                              <div class="col-6">
                                                  <div class="mb-2">
                                                      <h6 class="mb-1"> {{ $cate_pro->product_title }}</h6>
                                                      <p class="font-size-13 line-height mb-1">{{ $cate_pro->product_author }}</p>
                                                      <div class="d-block line-height">
                                                          <span class="font-size-11 text-warning">
                                                              <i class="fa fa-star"></i>
                                                              <i class="fa fa-star"></i>
                                                              <i class="fa fa-star"></i>
                                                              <i class="fa fa-star"></i>
                                                              <i class="fa fa-star"></i>
                                                          </span>
                                                      </div>
                                                  </div>
                                                  <div class="price d-flex align-items-center">
                                                      <h6><b>{{ $cate_pro->product_price }}</b></h6>
                                                  </div>
                                                  <div class="iq-product-action">
                                                      <a href="javascript:void();"><i class="ri-shopping-cart-2-fill text-primary"></i></a>
                                                      <a href="javascript:void();" class="ml-2"><i class="ri-heart-fill text-danger"></i></a>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          @endforeach
                          

                           </div>
                        </div>
    
      <!-- Wrapper END -->
      <!-- Footer -->
      <footer class="iq-footer">
         <div class="container-fluid">
            <div class="row">
               <div class="col-lg-6">
                  <ul class="list-inline mb-0">
                     <li class="list-inline-item"><a href="privacy-policy.html">Privacy Policy</a></li>
                     <li class="list-inline-item"><a href="terms-of-service.html">Terms of Use</a></li>
                  </ul>
               </div>
               <div class="col-lg-6 text-right">
                  Copyright 2020 <a href="#">NHASACHTV</a> All Rights Reserved.
               </div>
            </div>
         </div>
      </footer>
      <!-- Footer END -->
      <!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="{{asset("../FE2/js/jquery.min.js")}}"></script>
      <script src="{{asset("../FE2/js/popper.min.js")}}"></script>
      <script src="{{asset("../FE2/js/bootstrap.min.js")}}"></script>
      <!-- Appear JavaScript -->
      <script src="{{asset("../FE2/js/jquery.appear.js")}}"></script>
      <!-- Countdown JavaScript -->
      <script src="{{asset("../FE2/js/countdown.min.js")}}"></script>
      <!-- Counterup JavaScript -->
      <script src="{{asset("../FE2/js/waypoints.min.js")}}"></script>
      <script src="{{asset("..FE2/js/jquery.counterup.min.js")}}"></script>
      <!-- Wow JavaScript -->
      <script src="{{asset("../FE2/js/wow.min.js")}}"></script>
      <!-- Apexcharts JavaScript -->
      <script src="{{asset("../FE2/js/apexcharts.js")}}"></script>
      <!-- Slick JavaScript -->
      <script src="{{asset("../FE2/js/slick.min.js")}}"></script>
      <!-- Select2 JavaScript -->
      <script src="{{asset("../FE2/js/select2.min.js")}}"></script>
      <!-- Owl Carousel JavaScript -->
      <script src="{{asset("../FE2/js/owl.carousel.min.js")}}"></script>
      <!-- Magnific Popup JavaScript -->
      <script src="{{asset("../FE2/js/jquery.magnific-popup.min.js")}}"></script>
      <!-- Smooth Scrollbar JavaScript -->
      <script src="{{asset("../FE2/js/smooth-scrollbar.js")}}"></script>
      <!-- lottie JavaScript -->
      <script src="{{asset("../FE2/js/lottie.js")}}"></script>
      <!-- am core JavaScript -->
      <script src="{{asset("../FE2/js/core.js")}}"></script>
      <!-- am charts JavaScript -->
      <script src="{{asset("../FE2/js/charts.js")}}"></script>
      <!-- am animated JavaScript -->
      <script src="{{asset("../FEjs/animated.js")}}"></script>
      <!-- am kelly JavaScript -->
      <script src="{{asset("../FE2/js/kelly.j")}}s"></script>
      <!-- am maps JavaScript -->
      <script src="{{asset("../FE2/js/maps.js")}}"></script>
      <!-- am worldLow JavaScript -->
      <script src="{{asset("../FE2/js/worldLow.js")}}"></script>
      <!-- Raphael-min JavaScript -->
      <script src="{{asset("../FE2/js/raphael-min.js")}}"></script>
      <!-- Morris JavaScript -->
      <script src="{{asset("../FE2/js/morris.js")}}"></script>
      <!-- Morris min JavaScript -->
      <script src="{{asset("../FE2/js/morris.min.js")}}"></script>
      <!-- Flatpicker Js -->
      <script src="{{asset("../FE2/js/flatpickr.js")}}"></script>
      <!-- Style Customizer -->
      <script src="{{asset("../FE2/js/style-customizer.js")}}"></script>
      <!-- Chart Custom JavaScript -->
      <script src="{{asset("../FE2/js/chart-custom.js")}}"></script>
      <!-- Custom JavaScript -->
      <script src="{{asset("../FE2/js/custom.js")}}"></script>
   </body>
</html>