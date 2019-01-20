@extends('layouts.app')
@section('title')
اضافة عقار جديد
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
                    <li class="breadcrumb-item active "><a href="{{url('/home')}}">الرئيسية</a></li>
                    <li class="breadcrumb-item"><a href="{{url('/users/create/bu')}}">اضافة عقار</a></li>
                </ol>
            </nav>
            <div class="row">
                <div style ="font-size: 30px;" >
                    <center >
                        <div class="alert-danger" > هذا العقار بانتظار موافقة الادارة   
                            <strong>
                                سيتم نشر العقار بعد اقل من 24 ساعه
                            </strong>
                        </div>
                    </center>
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
