
@extends('layout2')

<div id="content-page" class="content-page">
   <div class="container-fluid">
      <div class="row">
        
         <div class="col-lg-12">
            <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
               <div class="iq-card-header d-flex justify-content-between align-items-center position-relative">
                  <div class="iq-header-title">
                     <h4 class="card-title mb-0">Kết quả tìm kiếm</h4>
                  </div>
                  <div class="iq-card-header-toolbar d-flex align-items-center">                              
                     <a href="category.html" class="btn btn-sm btn-primary view-more">Xem Thêm</a>
                  </div>
               </div> 
               <div class="iq-card-body">  
                  <div class="row">
                   @foreach ($seach_item as $cate_pro)
                     <div class="col-sm-6 col-md-4 col-lg-3">

                        <div class="iq-card iq-card-block iq-card-stretch iq-card-height browse-bookcontent">
                           <div class="iq-card-body p-0">
                              <div class="d-flex align-items-center">
                                 <div class="col-6 p-0 position-relative image-overlap-shadow">
                                    <a href="javascript:void();"><img class="img-fluid rounded w-100" src="{{ asset('/uploads/product/' . $cate_pro->product_image) }}" alt=""></a>
                                    <div class="view-book">
                                       <a href="{{ URL::to("/chi-tiet-book/".$cate_pro->product_id) }}" class="btn btn-sm btn-white">Mua Ngay</a>
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
            </div>
         </div>
        
         <div class="col-lg-12">
            <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
               <div class="iq-card-header d-flex justify-content-between align-items-center position-relative">
                  <div class="iq-header-title">
                     <h4 class="card-title mb-0">Sách yêu thích</h4>
                  </div>
                  <div class="iq-card-header-toolbar d-flex align-items-center">
                     <a href="category.html" class="btn btn-sm btn-primary view-more">Xem thêm</a>
                  </div>
               </div>                         
               <div class="iq-card-body favorites-contens">
                  <ul id="favorites-slider" class="list-inline p-0 mb-0 row">
                     <li class="col-md-4">
                        <div class="d-flex align-items-center">
                           <div class="col-5 p-0 position-relative">
                              <a href="javascript:void();">
                                 <img src="{{asset("../FE2/images/favorite/01.jpg")}}" class="img-fluid rounded w-100" alt="">
                              </a>                                
                           </div>
                           <div class="col-7">
                              <h5 class="mb-2">D. Trump - Nghệ Thuật Đàm Phán</h5>
                              <p class="mb-2">Tác giả : Pedro Araez</p>                                          
                              <div class="d-flex justify-content-between align-items-center text-dark font-size-13">
                                 <span>Đã bán</span>
                                 <span class="mr-4">69</span>
                              </div>
                              <div class="iq-progress-bar-linear d-inline-block w-100">
                                 <div class="iq-progress-bar iq-bg-primary">
                                    <span class="bg-primary" data-percent="65"></span>
                                 </div>
                              </div>
                              <a href="#" class="text-dark">Đọc ngay<i class="ri-arrow-right-s-line"></i></a>
                           </div>
                        </div>
                     </li>
                     <li class="col-md-4">
                        <div class="d-flex align-items-center">
                           <div class="col-5 p-0 position-relative">
                              <a href="javascript:void();">
                                 <img src="{{asset("../FE2/images/favorite/02.jpg")}}" class="img-fluid rounded w-100" alt="">
                              </a>                                
                           </div>
                           <div class="col-7">
                              <h5 class="mb-2">Một Đời Quản Trị</h5>
                              <p class="mb-2">Tác giả : Michael klock</p>                                          
                              <div class="d-flex justify-content-between align-items-center text-dark font-size-13">
                                 <span>Đã bán</span>
                                 <span class="mr-4">450</span>
                              </div>
                              <div class="iq-progress-bar-linear d-inline-block w-100">
                                 <div class="iq-progress-bar iq-bg-danger">
                                    <span class="bg-danger" data-percent="45"></span>
                                 </div>
                              </div>
                              <a href="#" class="text-dark">Đọc ngay<i class="ri-arrow-right-s-line"></i></a>
                           </div>
                        </div>
                     </li>
                     <li class="col-md-4">
                        <div class="d-flex align-items-center">
                           <div class="col-5 p-0 position-relative">
                              <a href="javascript:void();">
                                 <img src="{{asset("../FE2/images/favorite/03.jpg")}}" class="img-fluid rounded w-100" alt="">
                              </a>                                
                           </div>
                           <div class="col-7">
                              <h5 class="mb-2">Người Bán Hàng Vĩ Đại Nhất Thế Giới</h5>
                              <p class="mb-2">Tác giả : Daniel Ace</p>                                          
                              <div class="d-flex justify-content-between align-items-center text-dark font-size-13">
                                 <span>Đã bán</span>
                                 <span class="mr-4">79</span>
                              </div>
                              <div class="iq-progress-bar-linear d-inline-block w-100">
                                 <div class="iq-progress-bar iq-bg-info">
                                    <span class="bg-info" data-percent="78"></span>
                                 </div>
                              </div>
                              <a href="#" class="text-dark">Đọc ngay<i class="ri-arrow-right-s-line"></i></a>
                           </div>
                        </div>
                     </li>
                     <li class="col-md-4">
                        <div class="d-flex align-items-center">
                           <div class="col-5 p-0 position-relative">
                              <a href="javascript:void();">
                                 <img src="{{asset("../FE2/images/favorite/04.jp")}}g" class="img-fluid rounded w-100" alt="">
                              </a>                                
                           </div>
                           <div class="col-7">
                              <h5 class="mb-2">Economix- Các Nền Kinh Tế Vận Hành</h5>
                              <p class="mb-2">Tác giả : Luka Afton</p>                                          
                              <div class="d-flex justify-content-between align-items-center text-dark font-size-13">
                                 <span>Đã bán</span>
                                 <span class="mr-4">900</span>
                              </div>
                              <div class="iq-progress-bar-linear d-inline-block w-100">
                                 <div class="iq-progress-bar iq-bg-success">
                                    <span class="bg-success" data-percent="90"></span>
                                 </div>
                              </div>
                              <a href="#" class="text-dark">Đọc ngay<i class="ri-arrow-right-s-line"></i></a>
                           </div>
                        </div>
                     </li>
                  </ul>
               </div>
            </div>
         </div>
      </div>
   </div> 
   <script>
		$(function() {
    alert('Nội dung bạn muốn hiển thị');
});
  </script> 
</div>
</div>

