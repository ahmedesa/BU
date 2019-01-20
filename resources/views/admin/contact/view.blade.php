@extends('admin.layouts.layout')
@section('title')
مشاهدة الرساله
@endsection
@section('header')
@endsection

@section('contant')
<section class="content-header">
	<h1>
		مشاهدة رساله من
		'{{$contact->contact_name}}'
	</h1>
	<ol style="right: 900px" class="breadcrumb">
		<li><a href="{{url('/adminpanel')}}"><i class="fa fa-dashboard"></i> الرئيسية </a></li>
		<li><a href="{{url('/adminpanel/contact')}}">الرسائل</a></li>

	</ol>
</section>
<section class="content">
	<div class="row">
		<div class="col-xs-12">
			<div class="box">
				<div class="box-header">
					<h3 class="box-title">مشاهدة رساله</h3>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					{!! Form::model($contact) !!}  
					@include('admin.contact.form')
					{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>
</section>

@endsection
@section('footer')
@endsection