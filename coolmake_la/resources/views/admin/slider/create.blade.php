
@extends('main') <!-- Layout admin của bạn -->

@section('content')
<br>
<br>
<br>
<br>
<br>
    <h1>Thêm Slider Mới</h1>
    <form action="{{ route('slider.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="image">Upload Slider Image</label>
        <input type="file" name="image" id="image" required>
        <button type="submit">Thêm Slider</button>
    </form>
@endsection
