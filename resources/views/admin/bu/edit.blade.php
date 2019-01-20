@extends('admin.layouts.layout')
@section('title')
تعديل عقار
@endsection
@section('header')
@endsection

@section('contant')
<section class="content-header">
	<h1>
		 تعديل العقار 

		 '{{$bu->bu_name}}'
	</h1>
	<ol style="right: 900px" class="breadcrumb">
		<li><a href="{{url('/adminpanel')}}"><i class="fa fa-dashboard"></i> الرئيسية </a></li>
		<li><a href="{{url('/adminpanel/bu')}}">التحكم في العقارات</a></li>

	</ol>
</section>
<section class="content">
	<div class="row">
		<div class="col-xs-12">
			<div class="box">
				<div class="box-header">
					<h3 class="box-title">تعديل عقار</h3>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					{!! Form::model($bu, ['url'=>'adminpanel/bu/'.$bu->id , 'method'=>'PATCH'  , 'files' =>'true'  ]) !!}  
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