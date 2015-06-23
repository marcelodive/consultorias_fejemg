@extends('template') @section('content')
<link rel="stylesheet" type="text/css"
	href="/js/jquery-easyui-1.4.2/themes/bootstrap/easyui.css">
<link rel="stylesheet" type="text/css"
	href="/js/jquery-easyui-1.4.2/themes/icon.css">
<script type="text/javascript"
	src="/js/jquery-easyui-1.4.2/jquery.min.js"></script>
<script type="text/javascript"
	src="/js/jquery-easyui-1.4.2/jquery.easyui.min.js"></script>

<h1>Hello, world!</h1>
<hr></hr>
<br>

<div class="container row">
	<div class="col-md-3" style="margin:20px;">
		<select class="easyui-combobox form-control" name="state"> 
			@foreach($cities as $city)
				<option value="{{ $city->city_name }}">{{ $city->city_name }}</option>
			@endforeach 
		</select>	
	</div>
</div>

<hr></hr>

</div>

@stop
