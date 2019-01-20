@if(Session::has('flash_message'))
<div class ="alert alert-danger" id="mes" >
	<center>
		<strong>
			{{Session::get('flash_message')}}
		</strong>
	</center>
</div>
@endif