@extends('admin.layouts.layout')
@section('title')
التحكم في العقارات
@endsection
@section('header')
{!! Html::style('admin/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') !!}
@endsection

@section('contant')
<section class="content-header">
	<h1>
		التحكم في العقارات
	</h1>
	<ol style="right: 900px" class="breadcrumb">
		<li><a href="{{url('/adminpanel')}}"><i class="fa fa-dashboard"></i> الرئيسية </a></li>
		<li class="active" ><a href="{{url('/adminpanel/bu')}}">التحكم في العقارات</a></li>
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
								<th class="aaaa" >#</th>
								<th class="aaaa">اسم العقار</th>
								<th class="aaaa">السعر</th>
								<th class="aaaa">النوع</th>
								<th class="aaaa">اسم المستخدم</th>
								<th class="aaaa">اضيف في</th>
								<th class="aaaa">الحالة</th>
								<th class="aaaa">التحكم</th>
							</tr>
						</thead>
						@foreach($bu as $b)


						<tbody>
							<tr>
								<td>{{ $b->id }}</td>
								<td>{{ $b->bu_name }}</td>
								<td>{{ $b->PresentPrice() }}</td>
								<td>{{ $b->bu_type == 1 ? 'ايجار' : 'تمليك' }}</td>
								<td>
									<a href="{{url('/adminpanel/users/'.$b->user_id.'/edit')}}">
										{{ $b->User->name }}
									</a>
								</td>
								<td>{{ $b->created_at->toDayDateTimeString() }}</td>
								<td>

									@if($b->bu_status == 1)
									<span class="label label-danger">غير مفعل</span>						
									@else
									<span class="label label-success">مفعل</span>
									@endif
								</td>
								<td>
									
									
									<a href="{{url('/adminpanel/bu/'.$b->id.'/edit')}}" class="btn btn-info">
										<i class="fa fa-edit"></i> تعديل
									</a>
									<a  href="{{url('/adminpanel/bu/'.$b->id.'/delete')}}" class="btn btn-info">
										<i class="fa fa-trash"></i> حذف
									</a>
								</td>
							</tr>
							@endforeach

						</tbody>
						<tfoot>
							<tr>
								<th class="aaaa">#</th>
								<th class="aaaa">اسم العقار</th>
								<th class="aaaa">السعر</th>
								<th class="aaaa">النوع</th>
								<th class="aaaa">اسم المستخدم</th>


								<th class="aaaa">اضيف في</th>
								<th class="aaaa">الحالة</th>
								<th class="aaaa">التحكم</th>
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