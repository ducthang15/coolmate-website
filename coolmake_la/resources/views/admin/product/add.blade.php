@extends('admin.main')
@section('content')
<form action="/admin/product/add" enctype="multipart/form-data" method="post">
    <div class="admin-content-main-content-product-add">     
        <div class="admin-content-main-content-left">
            <div class="admin-content-main-content-2input">
                <input type="text" value="{{old('name')}}" name="name" placeholder="Tên sản phẩm" style="width: 400px;">
                <input type="text" value="{{old('material')}}"  name="material" placeholder="Chất liệu" style="width: 400px;">
            </div>
            <div class="admin-content-main-content-2input">
                <input type="text" value="{{old('price_nomal')}}" name="price_nomal" placeholder="Giá bán" style="width: 400px;">
                <input type="text" value="{{old('price_sale')}}" name="price_sale" placeholder="Giá giảm" style="width: 400px;">
            </div>
            <textarea class="editer_des"  value="{{old('description')}}" name="description" id="content" placeholder="Nhập nội dung"></textarea>
            <textarea class="editer_content"   value="{{old('content1')}}" name="content" id="content1" placeholder="Mô tả sản phẩm"></textarea>
            <button type="submit" class="main-btn">Thêm sản phẩm</button>
        </div>
        <div class="admin-content-main-content-right">
            <div class="admin-content-main-content-right-image">
                <label for="file">Ảnh đại diện</label>
                <input id="file" type="file">
                <input id="input-file-img-hiden" type="hidden" name="image">
                <div class="image-show" id="input-file-img">

                </div>
            </div>
            <div class="admin-content-main-content-right-images">
                <label for="files">Ảnh sản phẩm</label>
                <input id="files" type="file" multiple>
                <div class="images-show" id="input-file-imgs">
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
