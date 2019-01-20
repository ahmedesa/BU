@extends('layouts.app')
@section('title')
اتصل بنا
@endsection
@section('header')

<style type="text/css">


.jumbotron {
    background: #358CCE;
    color: #FFF;
    border-radius: 0px;
}
.jumbotron-sm { padding-top: 24px;
    padding-bottom: 24px; }
    .jumbotron small {
        color: #FFF;
    }
    .a {
        font-size: 15px;
    }

</style>
@endsection

@section('content')
<div class="container a">
    <center>
        <h2>اتصل بنا</h2>
    </center>
    <hr>
    <div class="row">
     <div class="col-md-4">
        <form>
         <center>
            <legend style="font-size: 20px"><i class="fa fa-envelope"></i> مكتبنا </legend>
        </center>
        <address>
            <strong>العنوان</strong><br>
            {{getSetting('address')}}<br>
            <abbr title="Phone">
            ت:</abbr>
            {{getSetting('mobile')}}<br>
        </address>
        <address>
            <strong>بريدنا الالكتروني</strong><br>
            <a href="mailto:#">{{getSetting('email')}} <br></a>
        </address>
    </form>
</div>
<div class="col-md-8">
    <div class="well well-sm">
        {!! Form::open(['url' =>'/contact/store' , 'method' => 'post'])!!}
        @csrf
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="name">
                    الاسم</label>
                    <input type="text" class="form-control" name="contact_name" placeholder="من فضلك ضع اسمك" required="required" />
                    @if ($errors->has('contact_name'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('contact_name') }}</strong>
                    </span>
                    @endif
                </div>
                <div class="form-group">
                    <label for="email">
                    البريد الالكتروني</label>
                    <div class="input-group">
                        <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
                    </span>
                    <input type="email" class="form-control" name="contact_email" placeholder="اخل البريد الالكتروني" required="required" /></div>
                    @if ($errors->has('contact_email'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('contact_email') }}</strong>
                    </span>
                    @endif
                </div>
                <div class="form-group">
                    <label for="subject">
                    العنوان</label>
                    <select id="subject" name="contact_type" class="form-control" required="required">
                        @foreach(contact() as $key => $con)
                        <option value="{{$key}}"> {{$con}}</option>


                        @endforeach
                    </select>
                    @if ($errors->has('contact_type'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('contact_type') }}</strong>
                    </span>
                    @endif
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="name">
                    الرسالة</label>
                    <textarea name="contact_message" id="message" class="form-control" rows="9" cols="25" required="required"></textarea>
                    @if ($errors->has('contact_message'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('contact_message') }}</strong>
                    </span>
                    @endif
                </div>
            </div>
            <div class="col-md-12">
                <button type="submit" class="btn btn-primary pull-right" id="btnContactUs">
                ارسل</button>
            </div>
        </div>
        {!!Form::close()!!}
    </div>
</div>

</div>
</div>
@endsection
@section('footer')
@if(Session::has('flash_message'))
<script type="text/javascript">
    swal({
        title: "{{Session::get('flash_message')}}",
        html: "{{Session::get('flash_message')}}",
        timer: 2000,
        showCancelButton: false,
    });
</script>
@endif

@endsection
