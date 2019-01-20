    <center>
        <h4 style="font-size: 30px">{{ $bu->bu_name }}
            <br>
            <small style="margin-left: 66%; font-size: 15px;">  تم اضافة الاعلان في {{$bu->created_at->toDayDateTimeString()}}</small>
        </h4>
        <hr>
    </center> 
    <button type="button" class="btn btn-outline-primary  buinfo">نوع العقار : {{bu_type()[$bu->bu_type]}}</button>
    <button type="button" class="btn btn-outline-primary  buinfo">نوع العملية : {{bu_rent()[$bu->bu_rent]}}  </button>
    <button type="button" class="btn btn-outline-primary  buinfo" >عدد الغرف :{{ $bu->bu_place }} </button>
    <button type="button" class="btn btn-outline-primary  buinfo">المنطقة : {{bu_place()[$bu->bu_place]}} </button>
    <button type="button" class="btn btn-outline-primary  buinfo">المساحة : {{ $bu->bu_square }}  </button>
    <button type="button" class="btn btn-outline-primary  buinfo">السعر : {{ $bu->PresentPrice() }}  </button>
    <hr>
    <div class="row">
        <!-- Description -->
        <div class="col-12">
            <div class="card border-light mb-3">
                <div class="card-header text-center bg-primary text-white text-uppercase"><i class="fa fa-align-justify"></i> الوصف</div>
                <div class="card-body">
                    <p class="card-text">
                        <img style="margin: 0 auto;" src="{{CheckImgExist($bu->img)}}" class="img-responsive" alt="صورة العقار" >
                        <br>
                        <hr>
                        <div style="font-size: 15px;"  >
                            {{$bu->bu_large_dis}}
                            <br>
                            <center style ="font-size: 20px "><button class="btn btn-success" ><a style=" color:#FFF ; " href="tel:1234567">Call {{$bu->phone}}</a> <i class="fa fa-phone" aria-hidden="true"></i> </button></center>
                        </div>
                        <hr>
                    </p>
                    <div id="map" style="height:250px"></div>

                </div>
            </div>
            <!-- Go to www.addthis.com/dashboard to customize your tools -->
            <div class="addthis_inline_share_toolbox"></div>
            
        </div>
        <div class="col-12">
            <div class="card border-light mb-3">
                <div class="card-header text-center bg-primary text-white text-uppercase"><i class="fa fa-align-justify"></i> عقارات مشابهه</div>
                <div class="card-body">
                    @foreach($relatedbu as $b)
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
                    <div class="pi-price">${{$b->bu_price}}</div>
                    <a href="{{url('/ShowBild/' .$b->id ) }}" class="btn add2cart  btn-primary">اظهر التفاصيل</a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
</div>

