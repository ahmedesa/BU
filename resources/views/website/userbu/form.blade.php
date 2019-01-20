@csrf

<div class="form-group row">
  <label for="bu_name" class="col-md-3 col-form-label text-md-right">العنوان </label>

  <div class="col-md-7">
   {!!Form::text("bu_name" ,null , ['class '=>'form-control']) !!}

   @if ($errors->has('bu_name'))
   <span class="invalid-feedback">
    <strong>{{ $errors->first('bu_name') }}</strong>
  </span>
  @endif
</div>

</div>
<div class="form-group row">
  <label for="bu_status" class="col-md-3 col-form-label text-md-right">المحافظة</label>

  <div class="col-md-7" >
   {!!Form::select("bu_place" ,bu_place(),null , ['class '=>'form-control select2']) !!}

   @if ($errors->has('bu_place'))
   <span class="invalid-feedback">
    <strong>{{ $errors->first('bu_place') }}</strong>
  </span>
  @endif


</div>

</div>
<div class="form-group row">
  <label for="name" class="col-md-3 col-form-label text-md-right">سعر العقار </label>

  <div class="col-md-7">
   {!!Form::text("bu_price" ,null , ['class '=>'form-control']) !!}

   @if ($errors->has('bu_price'))
   <span class="invalid-feedback">
    <strong>{{ $errors->first('bu_price') }}</strong>
  </span>
  @endif
</div>

</div>

<div class="form-group row">
  <label for="name" class="col-md-3 col-form-label text-md-right">عدد الغرف </label>

  <div class="col-md-7">

    {!!Form::text("bu_rooms" ,null , ['class '=>'form-control']) !!}

    @if ($errors->has('bu_rooms'))
    <span class="invalid-feedback">
      <strong>{{ $errors->first('bu_rooms') }}</strong>
    </span>
    @endif
  </div>

</div>


<div class="form-group row">
  <label for="name" class="col-md-3 col-form-label text-md-right">نوع العملية </label>

  <div class="col-md-7">
    {!!Form::select("bu_rent" ,bu_rent() , null , ['class'=>'form-control']) !!}

    @if ($errors->has('bu_rent'))
    <span class="invalid-feedback">
      <strong>{{ $errors->first('bu_rent') }}</strong>
    </span>
    @endif
  </div>

</div>
<div class="form-group row">
  <label for="name" class="col-md-3 col-form-label text-md-right">مساحة العقار </label>

  <div class="col-md-7">
    {!!Form::text("bu_square" ,null , ['class '=>'form-control']) !!}

    @if ($errors->has('bu_square'))
    <span class="invalid-feedback">
      <strong>{{ $errors->first('bu_square') }}</strong>
    </span>
    @endif
  </div>

</div>
<div class="form-group row">
  <label for="name" class="col-md-3 col-form-label text-md-right">نوع العقار </label>

  <div class="col-md-7">
   {!!Form::select("bu_type" ,bu_type() ,null , ['class '=>'form-control']) !!}

   @if ($errors->has('bu_type'))
   <span class="invalid-feedback">
    <strong>{{ $errors->first('bu_type') }}</strong>
  </span>
  @endif
</div>

</div>
<div class="form-group row">
  <label for="name" class="col-md-3 col-form-label text-md-right">الكلمات الدلائلية </label>

  <div class="col-md-7">
   {!!Form::text("bu_meta" ,null , ['class '=>'form-control']) !!}

   @if ($errors->has('bu_meta'))
   <span class="invalid-feedback">
    <strong>{{ $errors->first('bu_meta') }}</strong>
  </span>
  @endif
</div>

</div>
<div class="form-group row">
  <label for="name" class="col-md-3 col-form-label text-md-right">وصف العقار لمحركات البحث </label>

  <div class="col-md-7">
   {!!Form::textarea("bu_small_dis" ,null , ['class '=>'form-control' , 'rows' => '4']  ) !!}
   @if ($errors->has('bu_small_dis'))
   <span class="invalid-feedback">
    <strong>{{ $errors->first('bu_small_dis') }}</strong>
  </span>
  @endif
  <div class="alert alert-warning" > لا يمكن ادخال اكثر من 160 حرف حسب معايير جوجل</div>

</div>

</div>


<div class="form-group row">
  <label for="bu_langtuide" class="col-md-3 col-form-label text-md-right">خط الطول </label>

  <div class="col-md-7">
   {!!Form::text("bu_langtuide" ,null , ['class '=>'form-control']) !!}

   @if ($errors->has('bu_langtuide'))
   <span class="invalid-feedback">
    <strong>{{ $errors->first('bu_langtuide') }}</strong>
  </span>
  @endif
</div>

</div>
<div class="form-group row">
  <label for="bu_latitude" class="col-md-3 col-form-label text-md-right">خط العرض </label>

  <div class="col-md-7">
   {!!Form::text("bu_latitude" ,null , ['class '=>'form-control']) !!}

   @if ($errors->has('bu_latitude'))
   <span class="invalid-feedback">
    <strong>{{ $errors->first('bu_latitude') }}</strong>
  </span>
  @endif
</div>

</div>
<div class="form-group row">
  <label for="bu_large_dis" class="col-md-3 col-form-label text-md-right">وصف مطول للعقار </label>

  <div class="col-md-7">
   {!!Form::textarea("bu_large_dis" ,null , ['class '=>'form-control']) !!}

   @if ($errors->has('bu_large_dis'))
   <span class="invalid-feedback">
    <strong>{{ $errors->first('bu_large_dis') }}</strong>
  </span>
  @endif
</div>

</div>

<div class="form-group row">
  <label for="phone" class="col-md-3 col-form-label text-md-right">رقم الهاتف</label>

  <div class="col-md-7">
   {!!Form::text("phone" ,null , ['class '=>'form-control']) !!}

   @if ($errors->has('phone'))
   <span class="invalid-feedback">
    <strong>{{ $errors->first('phone') }}</strong>
  </span>
  @endif
</div>

</div>

















<div class="form-group row">
  <label for="img" class="col-md-3 col-form-label text-md-right">صور للعقار </label>

  <div class="col-md-7">
   @if(isset($bu))
   @if($bu->img != '')
   <img src="{{Request::root().'/images/'.$bu->img}}" width="300" >
   @endif
   @endif
   {!!Form::file("img" ,null , ['class '=>'form-control']) !!}
   @if ($errors->has('img'))
   <span class="invalid-feedback">
    <strong>{{ $errors->first('img') }}</strong>
  </span>
  @endif
</div>

</div>

<div class="form-group row mb-0" >
  <div class="col-md-7 offset-md-4">
    {!! Form::submit('تنفيذ', ['class' =>  'btn btn-primary']) !!}
  </div>
</div>
