@extends('admin.main')
@section('content')
<form action="" enctype="multipart/form-data" method="post">
    <div class="admin-content-main-content-product-add">     
        <div class="admin-content-main-content-left">
            <div class="admin-content-main-content-2input">
                <input type="text" value="{{$product -> name}}" name="name" placeholder="Tên sản phẩm" style="width: 400px;">
                <input type="text" value="{{$product -> material}}"  name="material" placeholder="Chất liệu" style="width: 400px;">
            </div>
            <div class="admin-content-main-content-2input">
                <input type="text" value="{{$product -> price_nomal}}" name="price_nomal" placeholder="Giá bán" style="width: 400px;">
                <input type="text" value="{{$product -> price_sale}}" name="price_sale" placeholder="Giá giảm" style="width: 400px;">
            </div>
            <textarea class="editer_des" value="" name="description" id="content" placeholder="Nhập nội dung">{{$product -> description}}</textarea>
            <textarea class="editer_content" value="" name="content" id="content1" placeholder="Mô tả sản phẩm">{{$product -> content}}</textarea>
            <button type="submit" class="main-btn">Cập nhật sản phẩm</button>
        </div>
        <div class="admin-content-main-content-right">
            <div class="admin-content-main-content-right-image">
                <label for="file">Ảnh đại diện</label>
                <input id="file" type="file">
                <input id="input-file-img-hiden" type="hidden" name="image" value="{{$product -> image}}">
                    <div class="image-show" id="input-file-img">
                        <img src="{{asset($product -> image)}}" alt="">
                    </div>
            </div>
            <div class="admin-content-main-content-right-images">
                <label for="files">Ảnh sản phẩm</label>
                <input id="files" type="file" multiple>
                    <div class="images-show" id="input-file-imgs">
                        @php
                            $product_images = explode("*",$product -> images);
                        @endphp
                        @foreach ($product_images as $product_image)
                            <img src="{{asset($product_image)}}" alt="">
                            <input type="hidden" name="images[]" value="{{$product_image}}" id="input-file-img-hiden">
                        @endforeach
                    </div>
            </div>
        </div>
    </div>
@csrf
</form>
@endsection
@section('footer')
<script src="https://cdn.ckeditor.com/ckeditor5/36.0.1/classic/ckeditor.js"></script>
<script src="{{asset('backend/asset/js/product_ajax.js')}}"></script> <!-- Use the correct version if different -->
<script>
ClassicEditor
    .create(document.querySelector('#content'))
    .catch(error => {
        console.error(error);
    });
ClassicEditor
    .create(document.querySelector('#content1'))
    .catch(error => {
        console.error(error);
    });
</script>
@endsection
