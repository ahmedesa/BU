<li><a href="{{url('/adminpanel')}}"><i class="fa fa-home"></i> <span>الرئيسية</span></a></li>

<li class=" treeview">
  <a href="#">
    <span class="pull-left-container">
      <i class="fa fa-angle-left pull-left"></i>
    </span>
    <i class="fa fa-users"></i> <span>الاعضاء</span>
  </a>
  <ul class="treeview-menu">
    <li class="active"><a href="{{url('adminpanel/users/create')}}"><i class="fa fa-circle-o"></i> اضف عضو</a></li>
    <li><a href="{{url('adminpanel/users')}}"><i class="fa fa-circle-o"></i> كل الاعضائ</a></li>
  </ul>
</li>
<li class=" treeview">
  <a href="#">
    <span class="pull-left-container">
      <i class="fa fa-angle-left pull-left"></i>
    </span>
    <i class="fa fa-building"></i> <span>العقارات</span>
  </a>
  <ul class="treeview-menu">
    <li class="active"><a href="{{url('adminpanel/bu/create')}}"><i class="fa fa-circle-o"></i> اضف عقار</a></li>
    <li><a href="{{url('adminpanel/bu')}}"><i class="fa fa-circle-o"></i> كل العقارات</a></li>
  </ul>
</li>
<li class=" treeview">
  <a href="#">
    <span class="pull-left-container">
      <i class="fa fa-angle-left pull-left"></i>
    </span>
    <i class="fa fa-envelope"></i> <span>رسائل الموقع</span>
  </a>
  <ul class="treeview-menu">
    <li class="active"><a href="{{url('adminpanel/contact')}}"><i class="fa fa-circle-o"></i> الرسائل</a></li>
  </ul>
</li>
<li><a href="{{url('/adminpanel/sitesetting')}}"><i class="fa fa-cog"></i> 
<span>اعدادات الموقع</span>
</a></li>


