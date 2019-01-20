@extends('admin.layouts.layout')
@section('title')
تعديل عضو
@endsection
@section('header')
@endsection

@section('contant')
<section class="content-header">
	<h1>
		
		{{$user->name}}
		تعديل العضو		 

	</h1>
	<ol style="right: 900px" class="breadcrumb">
		<li><a href="{{url('/adminpanel')}}"><i class="fa fa-dashboard"></i> الرئيسية </a></li>
		<li><a href="{{url('/adminpanel/users')}}">التحكم في الاعضاء</a></li>
		<li class="active" ><a href="#">تعديل علي عضو</a></li>

	</ol>
</section>
<section class="content">
	<div class="row">
		<div class="col-md-4">
			<div class="box">
				<div class="box-header">
					<h3 class="box-title">تعديل عضو</h3>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					{!! Form::model($user, ['url'=>'adminpanel/users/'.$user->id , 'method'=>'PATCH']) !!}  
					@include('admin.users.form')
					{!! Form::close() !!}
				</div>
			</div>
		</div>
		<div class="col-md-8">
			<div class="nav-tabs-custom">
				<ul class="nav nav-tabs">
					<li class="active"><a href="#activity" data-toggle="tab">عقارات  مفعله</a></li>
					<li><a href="#timeline" data-toggle="tab">عقارات غير مفعله</a></li>
				</ul>
				<div class="tab-content">
					<div class="active tab-pane" id="activity">
						<div class="box-header with-border">
							<center><h3 class="box-title">عقارات "{{$user->name}}"</h3></center>
						</div>
						<div class="box">

							<!-- /.box-header -->
							<div class="box-body">
								<table class="table table-bordered">
									<tr>
										<th style="width: 10px">#</th>
										<th><center>اسم العقار</center></th>
										<th><center>تاريخ الاضافة</center></th>
									</tr>
									@foreach($buenable as $b1 )
									<tr>
										<td style="widtd: 10px">{{$b1->id}}</td>
										<td><a href="{{url('/adminpanel/bu/'.$b1->id.'/edit')}}">{{$b1->bu_name}}</a></td>
										<td>{{$b1->created_at}}</td>
									</tr>
									@endforeach
								</table>
							</div>
							<!-- /.box-body -->
							<div class="box-footer clearfix">
								<ul class="pagination pagination-sm no-margin pull-right">
									{{ $buenable->appends(Request::input())->links() }}
								</ul>
							</div>
						</div>
						<!-- /.box -->
					</div>
					<!-- /.tab-pane -->
					<div class="tab-pane" id="timeline">
						<div class="box">
							<div class="box-header with-border">
								<center><h3 class="box-title">عقارات "{{$user->name}}"</h3></center>
							</div>
							<!-- /.box-header -->
							<div class="box-body">
								<table class="table table-bordered">
									<tr>
										<th style="width: 10px">#</th>
										<th><center>اسم العقار</center></th>
										<th><center>تاريخ الاضافة</center></th>
										<th><center>حاله العقار </center></th>

									</tr>
									@foreach($buwating as $b1 )
									<tr>
										<td style="widtd: 10px">{{$b1->id}}</td>
										<td><a href="{{url('/adminpanel/bu/'.$b1->id.'/edit')}}">{{$b1->bu_name}}</a></td>
										<td>{{$b1->created_at}}</td>
										<th><a href="{{url('adminpanel/users/'.$b1->id.'/enable')}}"><button class="btn btn-primary" > تفعيل العقار</button> </a></th>

									</tr>
									@endforeach
								</table>
							</div>
							<!-- /.box-body -->
							<div class="box-footer clearfix">
								<ul class="pagination pagination-sm no-margin pull-right">
									{{ $buwating->appends(Request::input())->links() }}

								</ul>
							</div>
						</div>
					</div>
				</div>
				<!-- /.tab-content -->
			</div>
		</div>
	</section>

	@endsection
	@section('footer')
	@endsection