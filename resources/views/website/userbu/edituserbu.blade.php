@extends('layouts.app')
@section('title')
اتلعديل علي  العقار 
@endsection
@section('header')
{!!Html::style('css/bu.css')!!}
{!!Html::style('cus/css/select2.min.css') !!}

@endsection

@section('content')
<div class="container">
    <div class="row profile">
        @include('website.bu.sidebar')

        <div class="col-md-9" style="font-size: 17px;">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item  "><a href="{{url('/home')}}">الرئيسية</a></li>
                    <li class="breadcrumb-item  "><a href="{{url('/user/bu/show')}}">عقاراتي</a></li>
                    <li class="breadcrumb-item active "><a href="#">التعديل علي العقار '{{$bu->bu_name}}'</a></li>
                </ol>
            </nav>
            <div style="background-color: white;" class="row">
                <div class="col-xs-12 useraddbu">
                    <br>
                    <center style =  "font-size: 20px"><strong>  التعديل علي العقار '{{$bu->bu_name}}' </strong></center>
                    <br>
                    {!! Form::model($bu, ['url'=>'user/update/bu/'.$bu->id , 'method'=>'POST'  , 'files' =>'true'  ]) !!}  
                    
                    @include('website.userbu.form' )
                    {!! Form::close() !!}


                </div>
            </div>

        </div>

    </div>
</div>
@endsection
@section('footer')
<script type="text/javascript">
    $(document).ready(function() {
        $('.select2').select2({
            dir: "rtl"

        });
    });
</script>


@endsection
