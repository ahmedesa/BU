@extends('admin.layouts.layout')
@section('title')
خطا
@endsection
@section('header')
@endsection

@section('contant')
<section class="content">
      <div class="error-page">
        <h2 class="headline text-yellow"> 404</h2>

        <div class="error-content">
          <h3><i class="fa fa-warning text-yellow"></i> الصفحة غير موجودة !!!!</h3>

          <p>
           الصفحة غير موجودة  <a href="{{url('adminpanel')}}">العودة الي الرئيسية</a> 
          </p>

      
        </div>
        <!-- /.error-content -->
      </div>
      <!-- /.error-page -->
    </section>

@endsection
@section('footer')
@endsection