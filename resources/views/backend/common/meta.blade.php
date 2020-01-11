<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<meta name="description" content="Responsive Bootstrap 4 and web Application ui kit.">
<title>Admin Panel | {{ $pageTitle }}</title>
<link rel="icon" href="favicon.ico" type="image/x-icon"> <!-- Favicon-->
<link rel="stylesheet" href="{{asset('backend/plugins/bootstrap/css/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{asset('backend/plugins/jvectormap/jquery-jvectormap-2.0.3.min.css')}}"/>
<link rel="stylesheet" href="{{asset('backend//plugins/charts-c3/plugin.css')}}"/>

<link rel="stylesheet" href="{{asset('backend/plugins/morrisjs/morris.min.css')}}" />
 <!-- bootstrap datepicker -->
  <link rel="stylesheet" href="{!! asset('backend/plugins/datepicker/datepicker3.css') !!}">

<!-- Custom Css -->
<link rel="stylesheet" href="{{asset('backend/css/style.min.css')}}">
@yield('extra-css')
</head>