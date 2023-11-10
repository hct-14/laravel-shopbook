@extends('admin_layout')
@section('admin_content')
<div class="row">
    <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                   Cập Nhập Sản Phẩm
                </header>
                <?php
                $message = Session::get('message');
                if ($message) {
                    echo '<p style="color: red;">' . $message . '</p>';
                    Session::put('message', null);
                }
                ?>
                <div class="panel-body">
                    @foreach($editCategoryProduct as $key => $edit_value)  

    
                    <div class="position-center">
                        <form role="form" action="{{ url('update-category-product/'.$edit_value->product_id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="product_title">Tên Sản Phẩm</label>
                                <input type="text" value="{{$edit_value->product_title}}"  name="product_title" class="form-control" id="product_title" placeholder="Enter product name">
                            </div>
    
                            <div class="form-group">
                                <label for="product_price">Giá</label>
                                <input type="text"  value="{{$edit_value->product_price}}" name="product_price" class="form-control" id="product_price">
                            </div>
    
                            <div class="form-group">
                                <label for="product_image">Hình Ảnh</label>
                                <input type="file"  value="{{$edit_value->product_image}}" name="product_image" class="form-control" id="product_image">
                                {{-- <input type="file" name="product_image" class="form-control" id="product_image"> --}}

                                    <img src="{{ asset('uploads/product/' . $edit_value->product_image) }}" width="100">
                            </div>
    

                            <div class="form-group">
                                <label for="product_description">Nội Dung</label>
                                <textarea style="resize: none;" rows="5" class="form-control" name="product_description" id="product_description" placeholder="Nhập nội dung">{{$edit_value->product_description}}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="product_brand">Thể Loại</label>
                                <select name="product_brand" id="product_brand" class="form-control input-sm m-bot15">
                                    @foreach ($categories as $cate_pro)
                                        <option value="{{ $cate_pro->category_id }}" @if ($cate_pro->category_id == $edit_value->product_brand) selected @endif>{{ $cate_pro->category_name }}</option>
                                    @endforeach
                                </select>
                                
                            </div>
    
                            <div class="form-group">
                                <label for="product_author">Nhà Xuất Bản</label>

                                <input type="text" class="form-control"value="{{$edit_value->product_author}}" name="product_author" id="product_theloai">

                            </div>
    
                            <div class="form-group">
                                <label for="product_status">Hiện Thị</label>
                                <select name="product_status" class="form-control input-sm m-bot15">
                                    <option value="0">Ẩn</option>
                                    <option value="1">Hiện Thị</option>
                                </select>
                            </div>
    
      
                        <button type="submit" name ="add_product" class="btn btn-info">Cập Nhập</button>
                    </form>
                    </div>
                    @endforeach

                </div>
            </section>

    </div>

    </div>
</div>
<div class="row">
    @endsection