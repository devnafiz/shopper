<!doctype html>
<html class="no-js " lang="en">

@include('backend.common.meta')


<body class="theme-blush">

<!-- Page Loader -->
@include('backend.common.header')

<!-- Left Sidebar -->
@include('backend.common.sidebar')

<!-- Right Sidebar -->
@include('backend.common.rightsidebar')

<!-- Main Content -->

<section class="content">
    <div class="block-header">
        <div class="row">
            <div class="col-lg-7 col-md-6 col-sm-12">
                <h2>Dashboard</h2>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html"><i class="zmdi zmdi-home"></i> Aero</a></li>
                    <li class="breadcrumb-item active">Dashboard 1</li>
                </ul>
                <button class="btn btn-primary btn-icon mobile_menu" type="button"><i class="zmdi zmdi-sort-amount-desc"></i></button>
            </div>
            <div class="col-lg-5 col-md-6 col-sm-12">                
                <button class="btn btn-primary btn-icon float-right right_icon_toggle_btn" type="button"><i class="zmdi zmdi-arrow-right"></i></button>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        @yield('content')
    </div>
</section>


@include('backend.common.script')
@yield('extra-js')
</body>
</html>