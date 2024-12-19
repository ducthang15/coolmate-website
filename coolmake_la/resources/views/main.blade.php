<!DOCTYPE html>
<html lang="en">
<head>
    @include('parts.head')
</head>
<body>
<!-------header------>
@include('parts.header')

@yield('content')
<!------san pham hot-------->
@include('parts.hotproduct')
{{-- fôoter --}}
@include('parts.footer')
</body>
</html>