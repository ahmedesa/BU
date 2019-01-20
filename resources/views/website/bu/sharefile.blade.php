@if(count($buall)>0)
@foreach($buall as $b)
<div class="col-md-4">
  <div class="product-item">
    <div class="pi-img-wrapper">
      <img src="{{CheckImgExist($b->img)}}" class="img-responsive" alt="صورة العقار" >
      <div>
        <a href="{{url('/ShowBild/' .$b->id ) }}" class="btn">View</a>
      </div>
    </div>
    <br>
    <strong  ><h3 style="font-size: 19px;">{{str_limit($b->bu_name , 16 ) }}</h3></strong>
    <h1>{{str_limit($b->bu_small_dis , 40 ) }}</h1>
    <div class="pi-price">{{$b->PresentPrice()}}</div>
    @if($b->bu_status == 1)
    <a href="{{url('/ShowBild/' .$b->id ) }}" class="btn add2cart btn-danger">اظهر التفاصيل(عقار غير مفعل)</a>
    <a href="{{url('/user/edit/bu/' .$b->id ) }}" class="btn add2cart btn-primary"><i style="color: white" class="fa fa-edit"></i >التعديل</a>
    @else
    <br>
    <a href="{{url('/ShowBild/' .$b->id ) }}" class="btn add2cart btn-primary">اظهر التفاصيل</a>

    @endif
  </div>
</div>
@endforeach
@else
<div style="width: 100%; font-size: 20px;" class="alert alert-danger" ><center> لا يوجد عقارات حاليا</center></div>
@endif