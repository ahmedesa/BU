@extends('admin.layouts.layout')
@section('title')
تعديل اعدادات الموقع
@endsection
@section('header')
@endsection

@section('contant')
<section class="content-header">
	<h1>
		تعديل اعدادات الموقع
	</h1>
	<ol style="right: 900px" class="breadcrumb">
		<li><a href="{{url('/adminpanel')}}"><i class="fa fa-dashboard"></i> الرئيسية </a></li>
		<li><a href="{{url('/adminpanel/sitesetting')}}">تعديل اعدادات الموقع</a></li>
	</ol>
</section>
<section class="content">
	<div class="row">
		<div class="col-xs-12">
			<div class="box">
				<!-- /.box-header -->

				<div class="box-body">
					<form action="{{url('/adminpanel/sitesetting')}}" method="POST" enctype="multipart/form-data" >
						@csrf
						@foreach($sitesetting as $s)

						<div class="form-group row">

							<div class="col-md-7">
								@if($s->type == 0)
								{!!Form::text("$s->namesetting" ,$s->value , ['class '=>'form-control']) !!}
								@elseif($s->type == 3)
								{!!Form::file("$s->namesetting" ,null , ['class '=>'form-control']) !!}
								@else
								{!!Form::textarea("$s->namesetting" ,$s->value , ['class '=>'form-control']) !!}
								
								@endif
								@if ($errors->has('$s->namesetting'))
								<span class="invalid-feedback">
									<strong>{{ $errors->first('$s->namesetting') }}</strong>
								</span>
								@endif
							</div>
							<label for="$s->namesetting" class="col-md-3 col-form-label text-md-right">{{ $s->slug }}</label>

						</div>

						@endforeach

						<button class="btn btn-app col-md-11 center-block" type="submit" name="submit" >
							<i class="fa fa-save "></i>
							حفظ اعدادات الموقع

						</button>
					</form>
				</div>

			</div>
		</div>
	</div>
</section>

@endsection
@section('footer')
@endsection