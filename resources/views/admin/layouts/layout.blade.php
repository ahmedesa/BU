
<!DOCTYPE html>
<html dir="rtl">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>  لوحة التحكم| @yield('title')
  </title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  {!!Html::style('admin/bower_components/bootstrap/dist/css/bootstrap.min.css') !!}
  <!-- Font Awesome -->
  {!!Html::style('admin/bower_components/font-awesome/css/font-awesome.min.css') !!}
  <!-- Ionicons -->
  {!!Html::style('admin/bower_components/Ionicons/css/ionicons.min.css') !!}
  <!-- jvectormap -->
  {!!Html::style('admin/bower_components/jvectormap/jquery-jvectormap.css') !!}
  <!-- Theme style -->
  {!!Html::style('admin/dist/css/AdminLTE.min.css') !!}
  <!-- AdminLTE Skins. Choose a skin from the css/skins
   folder instead of downloading all of them to reduce the load. -->
   {!!Html::style('admin/dist/css/skins/_all-skins.min.css') !!}
   <!-- Morris chart -->
   {!!Html::style('admin/bower_components/morris.js/morris.css') !!}
   <!-- jvectormap -->
   {!!Html::style('admin/bower_components/jvectormap/jquery-jvectormap.css') !!}
   <!-- Date Picker -->
   {!!Html::style('admin/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css') !!}
   <!-- Daterange picker -->
   {!!Html::style('admin/bower_components/bootstrap-daterangepicker/daterangepicker.css') !!}
   <!-- bootstrap wysihtml5 - text editor -->
   {!!Html::style('admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css') !!}
   {!!Html::style('cus/css/select2.min.css') !!}
   {!!Html::style('css/extra.css')!!}
   <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
   <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

<!-- Google Font -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
@yield('header')

</head>
<body class="hold-transition skin-blue sidebar-mini">
  <header class="main-header">
    <!-- Logo -->
    <a href="{{url('/adminpanel')}}" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"> التحكم</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>لوحة</b> تحكم الموقع</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          <li class="dropdown messages-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-envelope-o"></i>
              <span class="label label-success">{{countunreadMessage()}}</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">يوجد  {{countunreadMessage()}} رساله غير مقروءة</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  @foreach(unreadMessage() as $m )
                  <li><!-- start message -->
                    <a href="{{url('adminpanel/contact/'.$m->id.'/view')}}">
                      <h4>
                        {{$m->contact_name}}
                        <small><i class="fa fa-clock-o"></i> {{$m->created_at->diffForHumans() }}</small>
                      </h4>
                      <p>{{ str_limit($m->contact_message , 20)}}</p>
                    </a>
                  </li>
                  @endforeach
                </ul>
              </li>
              <li class="footer"><a href="{{url('adminpanel/contact')}}">اظهر كل الرسائل</a></li>
            </ul>
          </li>
          <!-- Notifications: style can be found in dropdown.less -->
          <li class="dropdown notifications-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-bell-o"></i>
              <span class="label label-warning">{{countWattingMessages()}}</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">يوجد {{countWattingMessages()}} عقارات غير مفعله</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
             @foreach(WattingMessages() as $W)
                  <li>
                    <a href="{{url('adminpanel/bu/'.$W->id.'/edit')}}">
                     {{$W->bu_name}}  <i class="fa fa-warning text-yellow"></i> 
                    </a>
                  </li>
             @endforeach 
                </ul>
              </li>
              <li class="footer"><a href="#">اظهار الكل </a></li>
            </ul>
          </li>
      
  <!-- User Account: style can be found in dropdown.less -->
  <li class="dropdown user user-menu">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
     {{ HTML::image('admin/dist/img/user2-160x160.jpg', 'User Image', array('class' => 'user-image')) }}
     <span class="hidden-xs">{{ Auth::user()->name }}</span>
   </a>
   <ul class="dropdown-menu">
    <!-- User image -->
    <li class="user-header">
      {{ HTML::image('admin/dist/img/user2-160x160.jpg', 'User Image', array('class' => 'img-circle')) }}

      <p>
        <small>Member since  {{Auth::User()->created_at}}</small>
      </p>
    </li>
    <!-- Menu Body -->
 
    <!-- Menu Footer-->
    <li class="user-footer">
      <div class="pull-left">
        <a href="{{url('adminpanel/users/'.Auth::user()->id.'/edit')}}" class="btn btn-default btn-flat">الملف الشخصي</a>
      </div>
      <div class="pull-right">
        <a href="{{ route('logout') }}" class="btn btn-default btn-flat" onclick="event.preventDefault();
          document.getElementById('logout-form').submit();"> تسجيل الخروج</a>
       
         <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
          @csrf
        </form>

      </div>
    </li>
  </ul>
</li>
<!-- Control Sidebar Toggle Button -->
</ul>
</div>
</nav>
</header>
<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
        {{ HTML::image('admin/dist/img/user2-160x160.jpg', 'User Image', array('class' => 'img-circle')) }}
      </div>
      <div style="margin-left: 30px;" class="pull-left info">
        <p>{{ Auth::user()->name }}</p>
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>
    <!-- search form -->
    <form action="#" method="get" class="sidebar-form">
      <div class="input-group">
        <input type="text" name="q" class="form-control" placeholder="Search...">
        <span class="input-group-btn">
          <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
          </button>
        </span>
      </div>
    </form>
    <!-- /.search form -->
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu" data-widget="tree">
      <li class="header">الرئيسية</li>

      @include('/admin/layouts/nav')

    </ul>
  </section>
  <!-- /.sidebar -->
</aside>


<div class="content-wrapper">
  @include('/admin/layouts/message')

  @yield('contant')

</div>

{!!Html::script('admin/bower_components/jquery/dist/jquery.min.js') !!}


<!-- jQuery UI 1.11.4 -->
{!!Html::script('admin/bower_components/jquery-ui/jquery-ui.min.js') !!}

<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
{!!Html::script('admin/bower_components/bootstrap/dist/js/bootstrap.min.js') !!}

<!-- Morris.js charts -->
{!!Html::script('admin/bower_components/raphael/raphael.min.js') !!}
{!!Html::script('admin/bower_components/morris.js/morris.min.js') !!}

<!-- Sparkline -->
{!!Html::script('admin/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js') !!}
<!-- jvectormap -->
{!!Html::script('admin/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') !!}
{!!Html::script('admin/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') !!}
<!-- jQuery Knob Chart -->
{!!Html::script('admin/bower_components/jquery-knob/dist/jquery.knob.min.js') !!}
<!-- ChartJS -->
{!!Html::script('admin/bower_components/chart.js/Chart.js') !!}
<!-- daterangepicker -->
{!!Html::script('admin/bower_components/moment/min/moment.min.js') !!}
{!!Html::script('admin/bower_components/bootstrap-daterangepicker/daterangepicker.js') !!}

<!-- datepicker -->
{!!Html::script('admin/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js') !!}
<!-- Bootstrap WYSIHTML5 -->
{!!Html::script('admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') !!}
<!-- Slimscroll -->
{!!Html::script('admin/bower_components/jquery-slimscroll/jquery.slimscroll.min.js') !!}
<!-- FastClick -->
{!!Html::script('admin/bower_components/fastclick/lib/fastclick.js') !!}
<!-- AdminLTE App -->
{!!Html::script('admin/dist/js/adminlte.min.js') !!}
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
{!!Html::script('admin/dist/js/pages/dashboard2.js') !!}

<!-- AdminLTE for demo purposes -->
{!!Html::script('admin/dist/js/demo.js') !!}
{!!Html::script('cus/sweetalert.min.js') !!}
{!!Html::script('/cus/js/select2.min.js') !!}

@include('/admin/layouts/fmessage')
<script type="text/javascript">
  GetTimeOut(function(){
    $('mes').hide('blind',{},500)

  });



</script>
<script type="text/javascript">
  $(document).ready(function() {
    $('.select2').select2({
      dir: "rtl"

    });
  });
</script>


@yield('footer')


</body>
</html>