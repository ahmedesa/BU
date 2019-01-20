@extends('admin.layouts.layout')
@section('title')
اضف عقار
@endsection
@section('header')
@endsection

@section('contant')
<section class="content-header">
	<h1>
		اضف عقار
	</h1>
	<ol style="right: 900px" class="breadcrumb">
		<li><a href="{{url('/adminpanel')}}"><i class="fa fa-dashboard"></i> الرئيسية </a></li>
		<li><a href="{{url('/adminpanel/bu')}}">التحكم في العقارات</a></li>
		<li class="active" ><a href="{{url('/adminpanel/bu/create')}}">اضف عقار</a></li>

	</ol>
</section>
<section class="content">
	<div class="row">
		<div class="col-xs-12">
			<div class="box">
				<div class="box-header">
					<h3 class="box-title">اضف عقار جديد</h3>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<h2> اضف عقار جيدي</h2>

<br>
					<br>
					{!! Form::open(['url'=>'/adminpanel/bu' , 'method'=>'POST' , 'files' =>'true']) !!}  

					@include('admin.bu.form')

					{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>
</section>

@endsection
@section('footer')
@endsection