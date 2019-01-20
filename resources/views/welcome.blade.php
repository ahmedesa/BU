@extends('layouts.app')
@section('title')
الرئيسية
@endsection
@section('header')


{!!Html::style('main/css/style.css') !!}

<style>
.banner{
  background: url("{{ url('images/banner2.jpg')}}") no-repeat center ;

  min-height: 500px;
  width: 100%;
  -webkit-background-size: 100%;
  -moz-background-size: 100%;
  -o-background-size: 100%;
  background-size: 100%;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
  padding-bottom: 100px;
}
</style>
<link rel="stylesheet" href=" {{ Request::root() }}/main/css/reset.css"> <!-- CSS reset -->

<link rel="stylesheet" href=" {{ Request::root() }}/main/css/style.css"> <!-- Resource style -->
<script src="{{ Request::root() }}/main/js/modernizr.js"></script> <!-- Modernizr -->
@endsection
@section('content')
<div class="banner text-center ">
  <div class="container">
    <div class="banner-info">
      <h1>{{ CheckImgExist(getSetting('main_slider_img') ,'/public/images/' , '/images/' )}} </h1>
      <h1> اهلا بك في  {{getSetting()}}</h1>
      <p>
        {!! Form::open(['url' => 'search' ,  'method' => 'get']) !!}
        
      </p>
      <div class="container">
        <div class="row">
          <div class="col">
            {!! Form::text( 'bu_name' ,null , ['class'=>'form-control '   ,'placeholder' =>'ماىالذي تبحث عنة' ] )  !!}
          </div>
          <div class="col">
            {!! Form::select( 'bu_price' , bu_price() , null , ['class'=>'form-control  ','placeholder' =>'سعر العقار' ] )  !!}
          </div>
          <div class="col">
            {!!Form::select("bu_type" ,bu_type() ,null , ['class '=>'form-control  '  ,'placeholder' =>'نوع العقار'  ]) !!}
          </div>
        </div>
        <div class="row">

          <div class="col">
            {!!Form::select("bu_rent" ,bu_rent()  ,null , ['class '=>'form-control  '  ,'placeholder' =>'نوع العملية'  ]) !!}
          </div>
          <div class="col">
            {!!Form::select("bu_place" ,bu_place()  ,null , ['class '=>'form-control select2 '  ,'placeholder' =>'المحافظة'  ]) !!}
          </div>
          <div class="col">
            {!!Form::submit("بحث" ,['class '=>'form-control btn-info  ' ]) !!}
          </div>
        </div>
      </div>
      {!! Form::close() !!}
      <a class="banner_btn" href="{{url('/users/create/bu')}}">اضف عقار</a> 
    </div>

  </div>
</div>
<div class="main">


  <ul class="cd-items cd-container">
    @foreach(\App\Bu::where('bu_status' , 0)->get() as $bu)
    <li  class="cd-item">
      <img  class="effect8" src="{{ CheckImgExist($bu->img) }}" alt="{{$bu->bu_name}}" title="$bu->bu_name">
      <a href="#0" data-id="{{$bu->id}}" title="{{$bu->bu_name}}" class="cd-trigger">مزيد من التفاصيل</a>
    </li> <!-- cd-item -->

    @endforeach
  </ul> <!-- cd-items -->

  <div class="cd-quick-view">
    <div class="cd-slider-wrapper">
      <ul class="cd-slider">
        <li class="selected"><img class="imgbox" src="{{ Request::root() }}/main/img/item-1.jpg" alt="Product 1"></li>
      </ul> <!-- cd-slider -->
    </div> <!-- cd-slider-wrapper -->

    <div class="cd-item-info">
      <h2 class="titlebox"></h2>
      <p class="disbox" >

      </p>

      <ul class="cd-item-action">
        <li><button class="add-to-cart pricebox">Add to cart</button></li>         
        <li><a class="morebox" href="#0">عرض المزيد</a></li>  
      </ul> <!-- cd-item-action -->
    </div> <!-- cd-item-info -->
    <a href="#0" class="cd-close">Close</a>
  </div> <!-- cd-quick-view -->
</div>
@endsection
@section('footer')

<script src="{{ Request::root() }}/main/js/jquery-2.1.1.js"></script>
<script src="{{ Request::root() }}/main/js/velocity.min.js"></script>
<script type="text/javascript">
  function urlHome(){
    return '{{Request::root()}}';
  }
</script>
<script type="text/javascript">
  function noImg(){
    return '{{ getSetting("noimg") }}';
  }
</script>
<script src="{{ Request::root() }}/main/js/main.js"></script>
@endsection