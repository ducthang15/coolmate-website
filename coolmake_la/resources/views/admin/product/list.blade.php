@extends('admin.main')
@section('content')
<div class="admin-content-main-content-product-list">
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>ẢNH SẢN PHẨM</th>
                <th>TÊN SẢN PHẨM</th>
                <th>GIÁ BÁN</th>
                <th>GIÁ GIẢM</th>
                <th>NGÀY ĐĂNG</th>
                <th>TUỲ CHỈNH</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
            <tr>
                <td>{{ $product->id }}</td>
                <td><img src="{{ asset($product->image) }}" style="width: 100px;"></td>
                <td>{{ $product->name }}</td>
                <td>{{ number_format($product->price_nomal) }}</td>
                <td>{{ number_format($product->price_sale) }}</td>
                <td>{{ \Carbon\Carbon::parse($product->created_at)->format('d/m/Y | H:i:s') }}</td>
                <td>
                    <a class="edit-class" href="/admin/product/edit/{{$product->id}}">Sửa</a> |
                    <a onclick="removeRow(product_id = {{$product->id}},url='/admin/product/delete')" class="delete-class" href="#">Xoá</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <!-- Phân trang đơn giản -->
    <div class="pagination">
        {{ $products->links('pagination::bootstrap-4') }} <!-- Dùng Bootstrap 4 nhưng không có SVG -->
    </div>
    
    
</div>
@endsection
@section('footer')
    <script>
        function removeRow(product_id,url){

            if(confirm('Bạn có chắc chắn không?')){
                $.ajax({
                    url:url,
                    data:{product_id},
                    method:'GET',
                    dataType:'JSON',
                    success: function(res){
                        if(res.success==true){
                            location.reload();
                        }
                    }
                })
            }
            }
    </script>
@endsection