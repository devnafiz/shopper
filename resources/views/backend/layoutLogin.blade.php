<!doctype html>
<html class="no-js " lang="en">
@include('backend.common.meta')

<body class="theme-blush">

<div class="authentication">    
    <div class="container">
        @yield('content')
    </div>
</div>


<!-- Jquery Core Js -->
@include('backend.common.script')
</body>
</html>