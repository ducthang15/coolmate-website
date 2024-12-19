@extends('admin.main')
@section('content')
    <div class="admin-content-main-content-oder-list">
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>ẢNH</th>
                    <th>TÊN</th>
                    <th>GIÁ</th>
                    <th>SỐ LƯỢNG</th>
                    <th>THÀNH TIỀN</th>
                    <th>TUỲ BIẾN</th>
                </tr>
            </thead>
            <tbody>
                 @php
                    $total = 0;
                @endphp 
                @foreach ($products as $product) 
                     @php
                        $price = $product-> price_sale * $order_detail[$product-> id];
                        $total += $price;
                    @endphp 
                    <tr>
                        <td>{{ $product-> id }}</td>
                        <td><img src="{{ asset($product-> image) }}" alt="" style="width: 100px;"></td>
                        <td>{{ $product-> name }}</td>
                        <td>{{ number_format($product-> price_sale) }}</td>
                        <td>{{ $order_detail[$product-> id] }}</td>
                        <td>{{ number_format($price) }}</td> 
                        <td>
                            <a class="delete-class" href="">Xoá</a>
                        </td>
                    </tr>
                @endforeach 

                <tr>
                    <td colspan="5" style="font-weight: bold;">TỔNG ĐƠN:</td>
                    <td style="font-weight: bold;">{{number_format($total)}}</td> <!-- Hiển thị tổng hóa đơn -->
                </tr>
            </tbody>
        </table>
    </div>

@endsection