<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home | E-Shopper</title>
    <link href="{{asset('css/front/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/front/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/front/prettyPhoto.css')}}" rel="stylesheet">
    <link href="{{asset('css/front/price-range.css')}}" rel="stylesheet">
    <link href="{{asset('css/front/animate.css')}}" rel="stylesheet">
    <link href="{{asset('css/front/main.css')}}" rel="stylesheet">
    <link href="{{asset('css/front/responsive.css')}}" rel="stylesheet">
    <!--[if lt IE 9]>
    <!--<script src="js/html5shiv.js"></script>-->
    {{--<script src="js/respond.min.js"></script>--}}
    {{--<![endif]-->--}}
    <link rel="shortcut icon" href="{{asset('images/front/ico/favicon.ico')}}">
    <link rel="apple-touch-icon-precomposed" sizes="144x144"
          href="{{asset('images/front/ico/apple-touch-icon-144-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" sizes="114x114"
          href="{{asset('images/front/ico/apple-touch-icon-114-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" sizes="72x72"
          href="{{asset('images/front/ico/apple-touch-icon-72-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" href="{{asset('images/front/ico/apple-touch-icon-57-precomposed.png')}}">
</head><!--/head-->

<body>

@include('front.layouts.header')
@yield('content')
@include('front.layouts.footer')

<script src="{{asset('js/front/jquery.js')}}"></script>
<script src="{{asset('js/front/bootstrap.min.js')}}"></script>
<script src="{{asset('js/front/jquery.scrollUp.min.js')}}"></script>
<script src="{{asset('js/front/price-range.js')}}"></script>
<script src="{{asset('js/front/jquery.prettyPhoto.js')}}"></script>
<script src="{{asset('js/front/main.js')}}"></script>
</body>
</html>
