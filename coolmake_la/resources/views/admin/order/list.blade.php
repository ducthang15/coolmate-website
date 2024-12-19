@extends('admin.main')
@section('content')
<div class="admin-content-main-content-oder-list">
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>TÊN</th>
                <th>SĐT</th>
                <th>EMAIL</th>
                <th>ĐỊA CHỈ</th>
                <th>GHI CHÚ</th>
                <th>CHI TIẾT</th>
                <th>NGÀY</th>
                <th>TRẠNG THÁI</th>
                <th>TUỲ BIẾN</th>
            </tr>
        </thead>
        <tbody>
           @foreach ($orders as $order)
               <tr>
                <td>{{$order->id}}</td>
                <td>{{$order -> name}}</td>
                <td>{{$order -> phone}}</td>
                <td>{{$order -> email}}</td>
                <td>{{$order -> address}},{{$order -> city}}</td>
                <td>{{$order -> note}}</td>
                <td><a href="/admin/order/detail/{{ $order -> order_detail }}" class="edit-class">CHI TIẾT</a>
                </td>
                <td>{{$order -> created_at}}</td>
                <td ><a href="" class="ok-confim-oder">CHỜ XÁC NHẬN</a>
                </td>
                <td>
                    <a class="delete-class" href="">Xoá</a>
                </td>
               </tr>
           @endforeach
        </tbody>
    </table>
   </div>
@endsection