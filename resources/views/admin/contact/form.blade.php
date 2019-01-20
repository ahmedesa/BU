
<div class="form-group row">
    <div class="col-md-6">
     {!!Form::text("contact_name" ,null , ['class '=>'form-control' , 'disabled' ]  ) !!}

 </div>
 <label for="name" class="col-md-4 col-form-label text-md-right">الاسم</label>

</div>


<div class="form-group row">

    <div class="col-md-6">
      {!!Form::text("contact_email" ,null , ['class '=>'form-control' , 'disabled' ]) !!}

  </div>
  <label for="email" class="col-md-4 col-form-label text-md-right">البريد الالكتروني</label>

</div>
<div class="form-group row">

    <div class="col-md-6">
      {!!Form::textarea("contact_message" ,null , ['class '=>'form-control' , 'disabled' ]) !!}

  </div>
  <label for="email" class="col-md-4 col-form-label text-md-right">الرساله</label>

</div>
<div class="form-group row">

    <div class="col-md-6">
      {!!Form::text("contact_type" ,null , ['class '=>'form-control' , 'disabled' ]) !!}

  </div>
  <label for="email" class="col-md-4 col-form-label text-md-right">الموضوع</label>

</div>

