@extends('admin.layouts.layout')
@section('title')
التحكم في الاعضاء
@endsection
@section('header')
{!! Html::style('admin/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') !!}
@endsection

@section('contant')
<section class="content-header">
	<h1>
		التحكم في الاعضاء
	</h1>
	<ol style="right: 900px" class="breadcrumb">
		<li><a href="{{url('/adminpanel')}}"><i class="fa fa-dashboard"></i> الرئيسية </a></li>
		<li class="active" ><a href="{{url('/adminpanel/users')}}">التحكم في الاعضاء</a></li>
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
								<th   class="aaaa" >#</th>
								<th   class="aaaa" >اسم المستخدم</th>
								<th   class="aaaa" >البريد الالكتروني</th>
								<th   class="aaaa" >تاريخ الاضافة</th>
								<th   class="aaaa" >الصلاحيات</th>
								<th   class="aaaa" >التحكم</th>

							</tr>
						</thead>
						<tbody>
							@foreach($user as $u)
							<tr>
								<td>{{ $u->id }}</td>
								<td><a href="{{url('/adminpanel/users/'.$u->id.'/edit')}}" >{{$u->name}}</a></td>
								<td>{{$u->email}}</td>
								<td>{{$u->created_at->toDayDateTimeString()}}</td>
								<td>{{$u->admin == 1 ? 'مدير' : 'عضو' }}</td>
								<td>
									<a  href="{{url('/adminpanel/users/'.$u->id.'/edit')}}" class="btn btn-info">
										<i class="fa fa-edit"></i> تعديل
									</a>
									<a  href="{{url('/adminpanel/users/'.$u->id.'/delete')}}" class="btn btn-info">
										<i class="fa fa-trash"></i> حذف
									</a>
								</td>
							</tr>
							@endforeach
						</tbody>
						<tfoot>
							<tr>
								<th   class="aaaa" >#</th>
								<th   class="aaaa" >اسم المستخدم</th>
								<th   class="aaaa" >البريد الالكتروني</th>
								<th   class="aaaa" >تاريخ الاضافة</th>
								<th   class="aaaa" >الصلاحيات</th>
								<th   class="aaaa" >التحكم</th>
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