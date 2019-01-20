<div class="col-md-3">
	<div class="profile-sidebar"> 
		<center>
			خيارات الاعضاء
		</center>
		<div class="profile-usermenu">
			<ul class="nav" style="margin-left: 100px; display: contents;">
				<li class="{{ request()->is('user/editsetting') ? 'active' : '' }}">
					<a href="{{ url('/user/editsetting')}}">
						<center>تعديل علي البيانات الشخصية</center> </a>                            
					</li>
					<li class="{{ request()->is('user/bu/show') ? 'active' : '' }}">
						<a href="{{url('/user/bu/show')}}">
							<center> عقاراتي  <span class="badge">{{CountUserBU()}}</span></center> </a>   
						</li>
						<li class="{{ request()->is('users/create/bu') ? 'active' : '' }}">
							<a href="{{url('/users/create/bu')}}">
								<center>اضف عقار</center> </a>   
							</li>
						</ul>
					</div>
				</div>
				<br>
				<!-- main section -->
				<div class="profile-sidebar"> 
					<center>
						خيارات العقارات
					</center>
					<div class="profile-usermenu">
						<ul class="nav" style="margin-left: 100px; display: contents;">
							<li class="{{ request()->is('showallenable') ? 'active' : '' }}">
								<a href="{{ url('/showallenable')}}">
									<center>كل العقارات</center> </a>                            
								</li>
								<li class="{{ request()->is('forrent') ? 'active' : '' }}">
									<a href="{{ url('/forrent')}}">
										<center>الايجار</center> </a>   
									</li>
									<li class="{{ request()->is('forbuy') ? 'active' : '' }}">
										<a href="{{ url('/forbuy')}}">
											<center>تمليك</center> </a>   
										</li>
										<li class="{{ request()->is('type/0') ? 'active' : '' }}">
											<a href="{{ url('/type/0')}}">
												<center>شقق</center> </a>   
											</li>
											<li class="{{ request()->is('type/1') ? 'active' : '' }}">
												<a href="{{ url('/type/1')}}">
													<center>فلل</center> </a>   
												</li>
												<li class="{{ request()->is('type/2') ? 'active' : '' }}">
													<a href="{{ url('/type/2')}}">
														<center>شاليهات</center> </a>   
													</li>
												</ul>

											</div>
										</div>
										<br>
										<!-- search section -->

										<div class="profile-sidebar">
											<ul >
												<center style ="font-size: 15px" >
													البحث

												</center>

												{!! Form::open(['url' => 'search' ,  'method' => 'get']) !!}
												{!! Form::text( 'bu_name' ,            null , ['class'=>'form-control sear'            ,'placeholder' =>'ماىالذي تبحث عنة' ] )  !!}
												{!! Form::select( 'bu_price' , bu_price() , null , ['class'=>'form-control sear'            ,'placeholder' =>'سعر العقار' ] )  !!}
												{!!Form::select("bu_type" ,bu_type() ,null , ['class '=>'form-control sear '  ,'placeholder' =>'نوع العقار'  ]) !!}
												{!!Form::select("bu_rent" ,bu_rent()  ,null , ['class '=>'form-control sear'  ,'placeholder' =>'نوع العملية'  ]) !!}
												{!!Form::select("bu_place" ,bu_place()  ,null , ['class '=>'form-control select2 sear'  ,'placeholder' =>'المحافظة'  ]) !!}
												{!!Form::submit("بحث" ,['class '=>'form-control btn-info sear ' ]) !!}
												{!! Form::close() !!}
											</ul>
										</div>
									</div>