<head>	
	@if(empty($result['commonContent']['setting'][18]->value))
    <title>@lang('website.Ecommerce') | {{ $pageTitle }}</title>
    @else
    <title><?=stripslashes($result['commonContent']['setting'][18]->value)?></title>
    @endif
	<meta charset="utf-8">
	
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<meta name="msapplication-TileImage" content="icons/cropped-favicon-270x270.png" />
	
	<!-- FAVICONS -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="icons/apple-touch-icon-144-precomposed.png" />
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="icons/apple-touch-icon-114-precomposed.png" />
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="icons/apple-touch-icon-72-precomposed.png" />
    <link rel="apple-touch-icon-precomposed" href="icons/apple-touch-icon-57-precomposed.png" />
    <link rel="shortcut icon" href="icons/favicon.png" />
	
	<!-- GOOGLE WEB FONTS -->
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:100,400,500,700,900&ver=1.0.0" type="text/css" media="all" />
	
	<!-- BOOTSTRAP 3.3.7 CSS -->
	<link rel="stylesheet" href="{{asset('frontend/css/theme/bootstrap.min.css')}}" />
	
	<!-- OPEN LIBS CSS -->
	<link rel="stylesheet" href="{{asset('frontend/css/theme/font-awesome.min.css')}}" />
	<link rel="stylesheet" href="{{asset('frontend/css/owl-carousel/owl.carousel.min.css')}}" />
	
	<link rel="stylesheet" href="{{asset('frontend/css/js_composer/js_composer.min.css')}}" />
	
	<!-- YT CSS -->
	<link rel="stylesheet" href="{{asset('frontend/css/colorbox/colorbox.css')}}" />
	<link rel="stylesheet" href="{{asset('frontend/css/sw_core/jquery.fancybox.css')}}" />
	<link rel="stylesheet" href="{{asset('frontend/css/sw_woocommerce/slider.css')}}" />
	<link rel="stylesheet" href="{{asset('frontend/css/woocommerce/woocommerce-layout.css')}}" />
	<link rel="stylesheet" href="{{asset('frontend/css/woocommerce/woocommerce-smallscreen.css')}}" />
	<link rel="stylesheet" href="{{asset('frontend/css/woocommerce/woocommerce.css')}}" />
	<link rel="stylesheet" href="{{asset('frontend/css/theme/wishtlist.css')}}" />
	<link rel="stylesheet" href="{{asset('frontend/css/theme/app-blue.min.css')}}" id="theme" />
	<link rel="stylesheet" href="{{asset('frontend/css/theme/app-responsive.min.css')}}" />
	<link rel="stylesheet" href="{{asset('frontend/css/theme/flexslider.min.css')}}" />
	<link rel="stylesheet" href="{{asset('frontend/css/theme/custom-blue.min.css')}}" />
	<link rel="stylesheet" href="{{asset('frontend/css/theme/home-style-1.min.css')}}" />
	@yield('extra-css')
	
</head>
