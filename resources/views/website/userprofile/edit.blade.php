@extends('layouts.app')
@section('title')
التعديل علي الملف الشخصي
@endsection
@section('header')
{!!Html::style('css/bu.css')!!}
{!!Html::style('cus/css/select2.min.css') !!}

@endsection

@section('content')
<div class="container">
    <div class="row profile">
        @include('website.bu.sidebar')

        <div class="col-md-9" style="font-size: 17px;" >
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active "><a href="{{url('/home')}}">الرئيسية</a></li>
                    <li class="breadcrumb-item"><a href="#">تعديل الملف الشخصي للعضو "                    {{$user->name}}
                    "</a></li>
                </ol>
            </nav>
            <div class="row">
                <div class="col-xs-12 useraddbu">
                     <br>
                    <center style =  "font-size: 20px"><strong>  التعديل علي اسم المستخدم و البريد الالكتروني </strong></center>
                    <br>
                    {!! Form::model($user, ['url'=>'/user/editsetting' , 'method'=>'PATCH']) !!}  
                    @include('admin.users.form')
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
