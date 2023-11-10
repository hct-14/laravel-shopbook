@extends('layout2')
@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<div id="content-page" class="content-page">
    <div class="container-fluid">
       <div class="row">
          <div class="col-sm-12">
             <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                <div class="iq-card-header d-flex justify-content-between align-items-center">
                   <h4 class="card-title mb-0">Thông tin</h4>
                </div>


          <div class="iq-card-body pb-0">

            @foreach ($product_detail as $by_pro)

   
            <div class="description-contents align-items-top row">
               
                <div class="col-md-6">
                    <div class="iq-card-transparent iq-card-block iq-card-stretch iq-card-height">
                        <div class="iq-card-body p-0">
                            <div class="row align-items-center">
                                <div class="col-3">
                                </div>
                                <div class="col-9">
                                    <ul id="description-slider" class="list-inline p-0 m-0  d-flex align-items-center">
                                        <li>
                                            <a href="javascript:void(0);">
                                                <img src="{{ asset('/uploads/product/'. $by_pro->product_image) }}" class="img-fluid w-100 rounded" alt="">
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
             
                    @if(session('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                @endif
                     <div class="iq-card-transparent iq-card-block iq-card-stretch iq-card-height">
                        <div class="iq-card-body p-0">
                            <h3 class="mb-3">{{ $by_pro->product_title }}</h3>
                            <div class="price d-flex align-items-center font-weight-500 mb-2">
                                <span class="font-size-20 pr-2 old-price">350.000 ₫</span>
                                <span class="font-size-24 text-dark">{{ $by_pro->product_price }} vnd</span>
                            </div>
                            <div class="mb-3 d-block">
                                <span class="font-size-20 text-warning">
                                    <i class="fa fa-star mr-1"></i>
                                    <i class="fa fa-star mr-1"></i>
                                    <i class="fa fa-star mr-1"></i>
                                    <i class="fa fa-star mr-1"></i>
                                    <i class="fa fa-star"></i>
                                </span>
                            </div>
                            {{ $by_pro->product_description }}
                            <div class="text-primary mb-4">Tác giả: <span class="text-body">{{ $by_pro->product_author }}</span></div>

                            <div class="product-count">
                                <label for="size">{{$by_pro->product_quantity}} sản phẩm có sẵn </label>
                                <form action="{{url('show-cart')}}" method="POST" class="display-flex mb-3">
                                    @csrf
                                    <input type="hidden" name="product_id" value="{{$by_pro->product_id}}">
                                    <input type="hidden" name="quantity" value="1">
                                    <div class="tru">-</div>
                                    <input type="text" name="quantity" value="1" class="qty">
                                    <div class="cong">+</div>
                            
                                    @if ($by_pro->product_quantity < 1)
                                        <button type="button" class="btn btn-primary" disabled>Thêm vào giỏ hàng</button>
                                        <div class="alert alert-danger mt-2">Không còn sản phẩm trong kho!</div>
                                    @elseif (1 <= $by_pro->product_quantity)
                                        <button type="submit" class="btn btn-primary">Thêm vào giỏ hàng</button>
                                    @endif
                                </form>
                                <a href="{{url('trang-chu/thanh-toan')}}" class="btn btn-success">Mua Ngay</a>
                            </div>
                            
                      
                            </div>
         
                            <div class="iq-social d-flex align-items-center">
                                <h5 class="mr-2">Chia sẻ:</h5>
                                <ul class="list-inline d-flex p-0 mb-0 align-items-center">
                                    <li>
                                        <a href="#" class="avatar-40 rounded-circle bg-primary mr-2 facebook">
                                            <i class="fa fa-facebook" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="avatar-40 rounded-circle bg-primary mr-2 twitter">
                                            <i class="fa fa-twitter" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="avatar-40 rounded-circle bg-primary mr-2 youtube">
                                            <i class="fa fa-youtube-play" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="avatar-40 rounded-circle bg-primary pinterest">
                                            <i class="fa fa-pinterest-p" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
               {{-- </form> --}}
             
            
              
            </div>
        </div>

                @endforeach


             </div>
          </div>

          <div class="col-lg-12">

            <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                <div class="iq-card-header d-flex justify-content-between align-items-center position-relative">
                    <div class="iq-header-title">
                       <h4 class="card-title mb-0">Đánh giá sản phẩm</h4>
                    </div>
                    <div class="iq-card-header-toolbar d-flex align-items-center">
                    </div>
                 </div>

                 <form action="{{ url('process-data') }}" method="post" enctype="multipart/form-data">
                    @if (session('UserId'))
                    <input type="hidden" name="user_id" value="{{ session('UserId')}}"> 
                @endif
                    
                <input type="hidden" name="product_id" value="{{$by_pro->product_id}}">
                    @csrf
                    <div class="khachhang1">
                        <div class="avtkhach">
                            @if (session('avt'))
                                <img src="{{ asset('/uploads/avt/' . session('avt')) }}" alt="">
                            @else
                                <span>Không có</span>
                            @endif
                        </div>
                        <div class="tenkhach">
                            <span>
                                @if (session('fullName'))
                                    {{ session('fullName') }}
                                @else
                                    {{-- <img src="https://inkythuatso.com/uploads/thumbnails/800/2023/03/9-anh-dai-dien-trang-inkythuatso-03-15-27-03.jpg" alt=""> --}}
                                @endif
                            </span>     
                        </div>
                    </div>
                    {{--  khachhang1 --}}
                    <div class="khachcmt">
                        <div class="col-md-12">
                            <label for="user_comment">Viết bình luận</label>
                            <textarea class="form-control" name="user_comment" id="user_comment"></textarea>
                        </div>
                        <div class="col-md-12">
                            <input type="file" class="form-control" name="comment_images" id="comment_images" placeholder="Thêm ảnh">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Thêm bình luận</button>

                    {{-- <input class="btn btn-primary d-block mt-3 next" type="submit" value="Thêm bình luận"> --}}
                </form>
                
                
                    
                @foreach ($checkcomment as $check_pro)
                 <div class="comment">

                    <div class="khachhang1">

                        <div class="avtkhach">
                            @if ($check_pro->user_avt)
                                <img src="{{ asset('/uploads/avt/'. $check_pro->user_avt) }}" alt="">
                            @endif
                        </div>   
                        <div class="tenkhach">
                           <span>
                            {{$check_pro->user_fullname}}
                                       </span>
                        </div>      
                                           
                        </div>  
                        {{--  khachhang1 --}}

                        <div class="col-md-12">
                            <div class="khachcomment">
                                <span>
                                    {{$check_pro->comment_content}}
                                </span>
                            </div>
                            <div class="khachimg">
                                @if($check_pro->comment_images)
                                    <img src="{{ asset('/uploads/avt/'. $check_pro->comment_images) }}" class="clickable-image" alt="" width="40" height="60px">
                                @endif
                            </div>
                            
                        </div>
                        
                 </div>
                 @endforeach

                </div>

          </div>
          <div class="image-modal" id="imageModal">
            <span class="close" onclick="closeModal()">&times;</span>
            <img  id="modalImage" src="" alt="">
        </div>
                {{-- ------------------------------------------------ --}}

          <div class="col-lg-12">
             <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                <div class="iq-card-header d-flex justify-content-between align-items-center position-relative">
                   <div class="iq-header-title">
                      <h4 class="card-title mb-0">Sản phẩm tương tự</h4>
                   </div>
                   <div class="iq-card-header-toolbar d-flex align-items-center">
                      <a href="category.html" class="btn btn-sm btn-primary view-more">Xem thêm</a>
                   </div>
                </div>
                <div class="iq-card-body single-similar-contens">
                   <ul id="single-similar-slider" class="list-inline p-0 mb-0 row">
     
          
                     @foreach ($related_product as $rela_pro)

                      <li class="col-md-3">
                         <div class="row align-items-center">
                            <div class="col-5">
                               <div class="position-relative image-overlap-shadow">
                                  <a href="javascript:void();"><img class="img-fluid rounded w-100" src="{{ asset('/uploads/product/'. $rela_pro->product_image) }}" alt=""></a>
                                  <div class="view-book">rela
                                     <a href="book-page.html" class="btn btn-sm btn-white">Xem sách</a>
                                  </div>
                               </div>
                            </div>
                            <div class="col-7 pl-0">
                               <h6 class="mb-2">Từ Tốt Đến Vĩ Đại.</h6>
                               <p class="text-body">{{$rela_pro->product_author}}</p>
                               <a href="#" class="text-dark" tabindex="-1">Đọc ngay<i class="ri-arrow-right-s-line"></i></a>
                            </div>
                         </div>
                      </li>
                   @endforeach
                   </ul>
                </div>
             </div>
          </div>

       </div>
    </div>
 </div>
<style>
    .khachhang1{
        display: flex;
        margin-top: 30px;
        margin-left: 20px;  
    }
    .avtkhach img{
        border-radius: 100%;
        width: 50px;
        height: 50px;
    }
    .tenkhach{
        height: 50px;
        display: flex;
        justify-content: center;
        align-items: center;
        margin-left: 30px;
        
    }
    .tenkhach span{
        font-style:initial;
        font-size: 18px;
        font-weight: 600;
        justify-content: center;
        align-content:center;
    }
    .comment{
        margin-top: 10px;
        box-shadow: 3px 3px 3px 3px rgba(0, 0, 0, 0.1); /* Đổ bóng với độ mờ nhẹ */
    padding: 10px; /* Tạo khoảng cách xung quanh nội dung để đổ bóng không bám sát */
    }
    .clickable-image {
        cursor: pointer;
        transition: 0.3s;
    }

    .clickable-image:hover {
        transform: scale(1.1);
    }

    .image-modal {
        display: none;
        position: fixed;
        z-index: 999;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.9);
        text-align: center;
        justify-content: center
    }

    .image-modal img {
        margin: 15% auto;
        max-width: 70%;
        max-height: 70%;
        display: block;
    }
    </style>
 {{-- <script>
    var modal = document.getElementById("imageModal");
    var modalImg = document.getElementById("modalImage");

    var images = document.querySelectorAll(".clickable-image");

    images.forEach(function(image) {
        image.addEventListener("click", function() {
            modal.style.display = "block";
            modalImg.src = this.src;
        });
    });

    modal.onclick = function() {
        closeModal();
    };

    function closeModal() {
        modal.style.display = "none";
    }
</script> --}}
