<!DOCTYPE html>
<html dir="rtl">
  <meta charset="utf-8">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  {!!Html::style('css/bootstrap.min.css') !!}
  {!!Html::style('css/flexslider.css') !!}
  {!!Html::style('css/font-awesome.min.css') !!}
  {!!Html::style('css/style.css') !!}
  {!!Html::style('css/bootstrap.min.css') !!}
  {!!Html::style('cus/css/select2.min.css') !!}
  {!!Html::style('main/css/style.css') !!}
  <!-- Scripts -->
  <script src="{{ asset('js/app.js') }}" defer></script>
  <!-- Styles -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
  <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900' rel='stylesheet' type='text/css'>
  <title>
  {{ getSetting()}} | @yield('title')
  </title>
  @yield('header')
</head>
<body onload="myMap()">
  <div class="header">
    <div class="container"> <a class="navbar-brand" href="#"><i class="fa fa-paper-plane"></i> ONE</a>
    <div class="menu"> <a class="toggleMenu" href="#"><img src="images/nav_icon.png" alt="" /> </a>
    <ul style="font-size: 18px;" class="nav" id="nav">
      <li class="current"><a href="{{url('/')}}">الرئيسية</a></li>
      <li><a href="{{url('/showallenable')}}">كل العقارات</a></li>
      <li class="nav-item dropdown">
        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
          تمليك
        </a>
        <div style="font-size: 15px; " class="dropdown-menu" aria-labelledby="navbarDropdown">
          @foreach(bu_type() as $key => $type)
          <a  class="dropdown-item" href="{{ url('search?bu_rent=1&bu_type='.$key) }}">
            {{$type}}
          </a>
          @endforeach
        </div>
      </li>
      <li class="nav-item dropdown">
        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
          ايجار
        </a>
        <div style="font-size: 15px; " class="dropdown-menu" aria-labelledby="navbarDropdown">
          @foreach(bu_type() as $key => $type)
          <a class="dropdown-item" href="{{ url('search?bu_rent=1&bu_type='.$key) }}">
            {{$type}}
          </a>
          @endforeach
        </div>
      </li>
      <li><a href="{{ url('/contact') }}">اتصل بنا</a></li>
      <div class="clear"></div>
      <!-- Authentication Links -->
      @guest
      <li><a class="nav-link" href="{{ route('login') }}">تسجيل الدخول</a></li>
      <li><a class="nav-link" href="{{ route('register') }}">تسجيل حساب جديد</a></li>
      @else
      <li class="nav-item dropdown">
        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
          {{ Auth::user()->name }}
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          @if(Auth::user()->admin == 1)
          <a class="dropdown-item" href="{{url('/adminpanel')}}">لوحة التحكم  <i class="fa fa-tachometer" aria-hidden="true"></i> </a>
          @endif
          <a class="dropdown-item" href="{{ url('/user/editsetting')}}">
          تعديل علي البيانات الشخصية    <i class="fa fa-pencil-square-o" aria-hidden="true"></i>       </a>
          <a class="dropdown-item" href="{{url('/user/bu/show')}}">
          عقاراتي          <i class="fa fa-building-o" aria-hidden="true"></i>  </a>
          <a class="dropdown-item" href="{{url('/users/create/bu')}}">
          اضف عقار   <i class="fa fa-plus" aria-hidden="true"></i>       </a>
          <a class="dropdown-item" href="{{ route('logout') }}"
            onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
          تسجيل الخروج      <i class="fa fa-sign-out" aria-hidden="true"></i>          </a>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
          </form>
        </div>
      </li>
      @endguest
    </ul>
    <script type="text/javascript" src="js/responsive-nav.js"></script>
  </div>
</div>
</div>
<div id="app">
<main class="py-4">
  @include('layouts.message')
  @yield('content')
</main>
</div>
<div class="footer">
<div class="footer_bottom">
  <div class="follow-us">
    <a class="fa fa-facebook social-icon" href="{{getSetting('facebook')}}"></a>
    <a class="fa fa-twitter social-icon" href="{{getSetting('twitter')}}"></a>
    <a class="fa fa-youtube social-icon" href="{{getSetting('youtube')}}"></a>
  </div>
  <div style="    color: black;" class="copyright-text ">
    <center> <p> © {{date('Y')}} {{ getSetting('copyrights')}} </p> </center>
  </div>
</div>
</div>
{!!Html::script('admin/bower_components/jquery/dist/jquery.min.js') !!}
<!-- jQuery UI 1.11.4 -->
{!!Html::script('admin/bower_components/jquery-ui/jquery-ui.min.js') !!}
{!!Html::script('js/jquery.flexslider.js') !!}
{!!Html::script('/cus/js/select2.min.js') !!}
@include('/admin/layouts/fmessage')
@yield('footer')
</body>
</html>