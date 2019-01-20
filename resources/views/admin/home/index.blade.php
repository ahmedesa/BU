@extends('admin.layouts.layout')
@section('title')
الرئيسية
@endsection
@section('contant')



<section class="content">
  <!-- Info boxes -->
  <div class="row">
    <div class="col-md-3 col-sm-6 col-xs-12">
      <div class="info-box">
        <span class="info-box-icon bg-aqua"><i class="fa fa-envelope-o"></i></span>

        <div class="info-box-content">
          <span class="info-box-text">الرسائل</span>
          <span class="info-box-number">{{$contactuscount}}</span>
        </div>
        <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
    </div>
  
    <!-- /.col -->
    <div class="col-md-3 col-sm-6 col-xs-12">
      <div class="info-box">
        <span class="info-box-icon bg-red"><i class="fa fa-building"></i></span>

        <div class="info-box-content">
          <span class="info-box-text">العقارات المفعله</span>
          <span class="info-box-number">{{$enablebucount}}</span>
        </div>
        <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
    </div>
    <!-- /.col -->

    <!-- fix for small devices only -->
    <div class="clearfix visible-sm-block"></div>

    <div class="col-md-3 col-sm-6 col-xs-12">
      <div class="info-box">
        <span class="info-box-icon bg-green"><i class="fa fa-building-o"></i></span>

        <div class="info-box-content">
          <span class="info-box-text">العقارات الغير مفعله</span>
          <span class="info-box-number">{{$waitingbucount}}</span>
        </div>
        <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
    </div>
    <!-- /.col -->
    <div class="col-md-3 col-sm-6 col-xs-12">
      <div class="info-box">
        <span class="info-box-icon bg-yellow"><i class="ion ion-ios-people-outline"></i></span>

        <div class="info-box-content">
          <span class="info-box-text">الاعضاء</span>
          <span class="info-box-number">{{$userscount}}</span>
        </div>
        <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
    </div>
    <!-- /.col -->
  </div>
  <!-- /.row -->

  <div class="row">
    <div class="col-md-12">
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">تقرير العقارات المضافة علي مدار السنة</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
            </button>
            <div class="btn-group">
              <button type="button" class="btn btn-box-tool dropdown-toggle" data-toggle="dropdown">
                <i class="fa fa-wrench"></i></button>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="#">Action</a></li>
                  <li><a href="#">Another action</a></li>
                  <li><a href="#">Something else here</a></li>
                  <li class="divider"></li>
                  <li><a href="#">Separated link</a></li>
                </ul>
              </div>
              <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
            </div>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <div class="row">
              <div class="col-md-12">
                <p class="text-center">
                  <strong>رسم بياني يوضح العقارات المضافة علي مدار السنة</strong>
                </p>

                <div class="chart">
                  <!-- Sales Chart Canvas -->
                  <canvas id="salesChart" style="height: 180px;"></canvas>
                </div>
                <!-- /.chart-responsive -->
              </div>
              <!-- /.col -->
          
            </div>
            <!-- /.row -->
          </div>
          <!-- ./box-body -->
        
        </div>
        <!-- /.box -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->

    <!-- Main row -->
    <div class="row">
      <!-- Left col -->
      <div class="col-md-8">
        <!-- MAP & BOX PANE -->
        <div class="box box-success">
          <div class="box-header with-border">
            <h3 class="box-title">اماكن العقارات</h3>

            <div class="box-tools pull-right">
              <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
              </button>
              <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
            </div>
          </div>
          <!-- /.box-header -->
          <div class="box-body no-padding">
            <div class="row">
              <div class="col-md-9 col-sm-8">
                <div class="pad">
                  <!-- Map will be created here -->
                  <div id="world-map-markers" style="height: 325px;"></div>
                </div>
              </div>
              <!-- /.col -->
              <div class="col-md-3 col-sm-4">
                <div class="pad box-pane-right bg-green" style="min-height: 280px">
                  <div class="description-block margin-bottom">
                    <h5 class="description-header">{{$enablebucount}}</h5>
                    <span class="description-text">عقارات مفعله</span>
                  </div>
                  <!-- /.description-block -->
                  <div class="description-block margin-bottom">
                    <h5 class="description-header">{{$waitingbucount}}</h5>
                    <span class="description-text">عقارات غير مفعله</span>
                  </div>
                  <!-- /.description-block -->
                  <div class="description-block">
                    <h5 class="description-header">{{$waitingbucount + $enablebucount}}</h5>
                    <span class="description-text">كل العقارات</span>
                  </div>
                  <!-- /.description-block -->
                </div>
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
        <div class="row">

          <!-- /.col -->

         
          <!-- /.col -->
        </div>
        <!-- /.row -->

   
        <!-- /.box -->
      </div>
      <!-- /.col -->

      <div class="col-md-4">
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title"></h3>
            اخر العقارات المضافة
            <div class="box-tools pull-right">
              <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
              </button>
              <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
            </div>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <ul class="products-list product-list-in-box">
              <!-- /.item -->
              @foreach($lastestbu as $last)
              <li class="item">
                <div class="product-img">
                  <img src="{{CheckImgExist($last->img)}}" alt="Product Image">
                </div>
                <div class="product-info">
                  <a href="{{url('adminpanel/bu/'.$last->id.'/edit')}}" class="product-title">{{$last->bu_name}}
                    <span class="label label-success pull-right">${{$last->bu_price}}</span></a>
                    <span class="product-description">
                      {{$last->bu_small_dis}}
                    </span>
                  </div>
                </li>
                @endforeach
              </ul>
            </div>
            <!-- /.box-body -->
            <div class="box-footer text-center">
              <a href="{{url('adminpanel/bu')}}" class="uppercase">كل العقارات</a>
            </div>
            <!-- /.box-footer -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
      <div class="row">
             <!-- TABLE: LATEST ORDERS -->
             <div class="col-md-8" >
        <div class="box box-info">
          <div class="box-header with-border">
            <h3 class="box-title">اخر رسائل الموقع</h3>

            <div class="box-tools pull-right">
              <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
              </button>
              <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
            </div>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <div class="table-responsive">
              <table class="table no-margin">
                <thead>
                  <tr>
                    <th style="text-align: right;">ID</th>
                    <th style="text-align: right;">اسم الراسل</th>
                    <th style="text-align: right;">البريد الالكتروني</th>
                    <th style="text-align: right;">الموضوع</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($lastestcontact as $last)
                  <tr>
                    <td><a href="{{url('adminpanel/contact/'.$last->id.'/view')}}">{{$last->id}}</td>
                    <td>{{$last->contact_name}}</td>
                    <td>{{$last->contact_email}}</td>
                    <td>
                      <div class="sparkbar" data-color="#00a65a" data-height="20">{{$last->contact_type}}</div>
                    </td>
                  </tr>
                  @endforeach
                  
                </tbody>
              </table>
            </div>
            <!-- /.table-responsive -->
          </div>
          <!-- /.box-body -->
          <div class="box-footer clearfix">
            <a href="{{url('adminpanel/contact')}}" class="btn btn-sm btn-info btn-flat pull-left">جميع الرسائل</a>
          </div>
          <!-- /.box-footer -->
        </div>
      </div>
         <div class="col-md-4">
            <!-- USERS LIST -->
            <div class="box box-danger">
              <div class="box-header with-border">
                <h3 class="box-title">اخر الاعضاء المسجلين</h3>

                <div class="box-tools pull-right">
                  <span class="label label-danger">{{$lastestusersCount}} اعضاء جدد</span>
                  <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i>
                  </button>
                </div>
              </div>
              <!-- /.box-header -->
              <div class="box-body no-padding">
                <ul class="users-list clearfix">
                  @foreach($lastestusers as $last)
                  <li>
                    <img src="admin/dist/img/user1-128x128.jpg" alt="{{$last->name}}">
                    <a class="users-list-name" href="{{url('/adminpanel/users/'.$last->id.'/edit')}}">{{$last->name}}</a>
                    <span class="users-list-date">{{$last->created_at}}</span>
                  </li>
                  @endforeach
                </ul>
                <!-- /.users-list -->
              </div>
              <!-- /.box-body -->
              <div class="box-footer text-center">
                <a href="{{url('adminpanel/users')}}" class="uppercase">كل الاعضاء</a>
              </div>
              <!-- /.box-footer -->
            </div>
            <!--/.box -->
          </div>



      </div>
    </section>







    @endsection
    @section('footer')


    <script type="text/javascript">

                  // -----------------------
  // - MONTHLY SALES CHART -
  // -----------------------

  // Get context with jQuery - using jQuery's .get() method.
  var salesChartCanvas = $('#salesChart').get(0).getContext('2d');
  // This will get the first returned node in the jQuery collection.
  var salesChart       = new Chart(salesChartCanvas);

  var salesChartData = {
    labels  : [
    "يناير     " ,
    "فبراير    " ,
    "مارس      " ,
    "إبريل     " ,
    "مايو      " ,
    "يونيو     " ,
    "يوليه     " ,
    "أغسطس     " ,
    "سبتمبر    " ,
    "أكتوب     " ,
    "نوفرمبر    " ,
    "ديسمبر     " ,
    ],
    datasets: [
    {
      label               : 'Digital Goods',
      fillColor           : 'rgba(60,141,188,0.9)',
      strokeColor         : 'rgba(60,141,188,0.8)',
      pointColor          : '#3b8bba',
      pointStrokeColor    : 'rgba(60,141,188,1)',
      pointHighlightFill  : '#fff',
      pointHighlightStroke: 'rgba(60,141,188,1)',
      data                : 
      [
      @foreach($new as $c )
      @if(is_array($c))
      {{$c['counting']}} ,
      @else
      {{$c}} ,
      @endif
      @endforeach
      ]
    }
    ]
  };

  var salesChartOptions = {
    // Boolean - If we should show the scale at all
    showScale               : true,
    // Boolean - Whether grid lines are shown across the chart
    scaleShowGridLines      : false,
    // String - Colour of the grid lines
    scaleGridLineColor      : 'rgba(0,0,0,.05)',
    // Number - Width of the grid lines
    scaleGridLineWidth      : 1,
    // Boolean - Whether to show horizontal lines (except X axis)
    scaleShowHorizontalLines: true,
    // Boolean - Whether to show vertical lines (except Y axis)
    scaleShowVerticalLines  : true,
    // Boolean - Whether the line is curved between points
    bezierCurve             : true,
    // Number - Tension of the bezier curve between points
    bezierCurveTension      : 0.3,
    // Boolean - Whether to show a dot for each point
    pointDot                : false,
    // Number - Radius of each point dot in pixels
    pointDotRadius          : 4,
    // Number - Pixel width of point dot stroke
    pointDotStrokeWidth     : 1,
    // Number - amount extra to add to the radius to cater for hit detection outside the drawn point
    pointHitDetectionRadius : 20,
    // Boolean - Whether to show a stroke for datasets
    datasetStroke           : true,
    // Number - Pixel width of dataset stroke
    datasetStrokeWidth      : 2,
    // Boolean - Whether to fill the dataset with a color
    datasetFill             : true,
    // String - A legend template
    legendTemplate          : '<ul class=\'<%=name.toLowerCase()%>-legend\'><% for (var i=0; i<datasets.length; i++){%><li><span style=\'background-color:<%=datasets[i].lineColor%>\'></span><%=datasets[i].label%></li><%}%></ul>',
    // Boolean - whether to maintain the starting aspect ratio or not when responsive, if set to false, will take up entire container
    maintainAspectRatio     : true,
    // Boolean - whether to make the chart responsive to window resizing
    responsive              : true
  };

  // Create the line chart
  salesChart.Line(salesChartData, salesChartOptions);

  // ---------------------------
  // - END MONTHLY SALES CHART -
  // ---------------------------


  /* jVector Maps
   * ------------
   * Create a world map with markers
   */
   $('#world-map-markers').vectorMap({
    map              : 'world_mill_en',
    normalizeFunction: 'polynomial',
    hoverOpacity     : 0.7,
    hoverColor       : false,
    backgroundColor  : 'transparent',
    regionStyle      : {
      initial      : {
        fill            : 'rgba(210, 214, 222, 1)',
        'fill-opacity'  : 1,
        stroke          : 'none',
        'stroke-width'  : 0,
        'stroke-opacity': 1
      },
      hover        : {
        'fill-opacity': 0.7,
        cursor        : 'pointer'
      },
      selected     : {
        fill: 'yellow'
      },
      selectedHover: {}
    },
    markerStyle      : {
      initial: {
        fill  : '#00a65a',
        stroke: '#111'
      }
    },
    markers          : [

    @foreach($map as $m)
    { latLng: [{{$m->bu_langtuide}}, {{$m->bu_latitude}}], name: 'Vatican City' },

    @endforeach


    ]
  });
</script>
@endsection