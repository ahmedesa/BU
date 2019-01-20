@extends('layouts.app')
@section('title')
عرض العقارات
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
                    <li class="breadcrumb-item active "><a href="#">الرئيسية</a></li>
                    <li class="breadcrumb-item"><a href="#">عرض العقارات</a></li>
                </ol>
            </nav>
            <div class="row">
                @include("website.bu.sharefile" , ['buall' =>$buall])
            </div>

            <div style="font-size: 20px;" class="text-center" >
                {{ $buall->appends(Request::input())->links() }}
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
