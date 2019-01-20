@extends('layouts.app')
@section('title')
عرض العقارات
@endsection
@section('header')
{!!Html::style('css/bu.css')!!}
{!!Html::style('cus/css/select2.min.css') !!}

@endsection

@section('content')
<div class="container">
	<div class="row profile">
		
		@include('website.bu.sidebar')

		<div style= "background-color: white ;" class="col-md-9">
			<nav style="width: 100%" aria-label="breadcrumb">
				<ol style="font-size: 17px; " class="breadcrumb">
					<li class="breadcrumb-item active "><a href="#">الرئيسية</a></li>
					<li class="breadcrumb-item"><a href="#">{{$bu->bu_name}}</a></li>
				</ol>

			</nav>
			@include('website.bu.singlebusection', ['relatedbu' =>$relatedbu , 'bu'=>$bu])

		</div>	


	</div>
</div>
@endsection
@section('footer')
<script>
	function myMap() {
		var myCenter = new google.maps.LatLng(51.508742,-0.120850);
		var mapCanvas = document.getElementById("map");
		var mapOptions = {center: myCenter, zoom: 5};
		var map = new google.maps.Map(mapCanvas, mapOptions);
		var marker = new google.maps.Marker({position:myCenter});
		marker.setMap(map);
	}
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=
AIzaSyAEHBoj9ZYi4Vu0L0pcw50UIiQvoS4rJW4
&callback=myMap"></script>
   <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5b37ebf379083920"></script>
            
@endsection
