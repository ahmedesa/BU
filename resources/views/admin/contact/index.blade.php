@extends('admin.layouts.layout')
@section('title')
رسائل الموقع
@endsection
@section('header')
{!! Html::style('admin/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') !!}
@endsection

@section('contant')
<section class="content-header">
	<h1>
		رسائل الموقع
	</h1>
	<ol style="right: 900px" class="breadcrumb">
		<li><a href="{{url('/adminpanel')}}"><i class="fa fa-dashboard"></i> الرئيسية </a></li>
		<li class="active" ><a href="{{url('/adminpanel/bu')}}">رسائل الموقع</a></li>
	</ol>
</section>

<!-- Main content -->
<section class="content">
	<div class="row">
		<div class="col-xs-12">
			<div class="box">
				
				<!-- /.box-header -->
				<div class="box-body">
					<table id="example2" class="table table-bordered table-hover">
						<thead>
							<tr>
								<th>#</th>
								<th>الاسم</th>
								<th>الربيد الالكتروني</th>
								<th>ااضيف في</th>
								<th>الموضوع</th>
								<th>الحاله</th>
								<th>التحكم</th>
							</tr>
						</thead>
						@foreach($contact as $con)

						<tbody>
							<tr>
								<td>{{ $con->id }}</td>
								<td>{{ $con->contact_name }}</td>
								<td>{{ $con->contact_email }}</td>
								<td>{{ $con->created_at->toDayDateTimeString() }}</td>
								<td>{{ $con->contact_type }}</td>
								<td>
									@if($con->view == 0)
									<span class="label label-danger">رساله جديدة</span>						
									@else
									<span class="label label-success">تمت المشاهده</span>
									@endif
								</td>

								<td>

									<a   href="{{url('/adminpanel/contact/'.$con->id.'/view')}}" class="btn btn-info">
										<i class="fa fa-eye"></i> مشاهدة
									</a>
									<a  href="{{url('/adminpanel/contact/'.$con->id.'/delete')}}" class="btn btn-info">
										<i class="fa fa-trash"></i> حذف
									</a>
								</td>
							</tr>

							@endforeach

						</tbody>
						<tfoot>
							<tr>
								<th>#</th>
								<th>الاسم</th>
								<th>الربيد الالكتروني</th>
								<th>ااضيف في</th>
								<th>الموضوع</th>
								<th>الحاله</th>
								<th>التحكم</th>

							</tr>
						</tfoot>
					</table>
				</div>
				<!-- /.box-body -->
			</div>
			<!-- /.box -->
		</div>
		<!-- /.col -->
	</div>
	<!-- /.row -->
</section>

@endsection

@section('footer')
{!! Html::script('admin/bower_components/datatables.net/js/jquery.dataTables.min.js') !!}
{!! Html::script('admin/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js') !!}
<script>
	$('#example2').DataTable({
		'paging'      : true,
		'lengthChange': false,
		'searching'   : true,
		'ordering'    : true,
		'info'        : true,
		'autoWidth'   : false
	});
</script>
@endsection