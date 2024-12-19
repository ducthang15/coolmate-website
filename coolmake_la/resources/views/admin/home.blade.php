<!DOCTYPE html>
<html lang="en">
<head>
   @include('admin/part/head')
</head>
<body>
    <section class="admin">
        <div class="row-grid">
            <div class="admin-sidebar">
                <div class="admin-sidebar-top">
                    <a href="/admin" title="Trang quản trị">
                        <img src="{{asset('backend/asset/images/logonew.png')}}" alt="Logo trang quản trị">
                    </a>
                </div>
                
                <div class="admin-sidebar-content">
                    @include('admin.part.sidebar')
                </div>
            </div>
            <div class="admin-content">
                <div class="admin-content-top">
                    @include('admin/part/headerbar')
                </div>
                <div class="admin-content-main">
                    <div class="admin-content-main-title">
                        <h1>DASHBOARD</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
<footer>
    @include('admin.part.footer')
</footer>
</body>
</html>