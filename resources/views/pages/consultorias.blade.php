@extends('template') @section('content')
<link rel="stylesheet" type="text/css"
	href="/js/jquery-easyui-1.4.2/themes/bootstrap/easyui.css">
<link rel="stylesheet" type="text/css"
	href="/js/jquery-easyui-1.4.2/themes/icon.css">
<script type="text/javascript"
	src="/js/jquery-easyui-1.4.2/jquery.min.js"></script>

<h1>Hello, world!</h1>
<hr></hr>
<br>

{!! Form::open() !!}
<div class="container row">
	<div class="col-md-3" style="margin:20px;">
		<select id="cities" class="easyui-combobox form-control" name="state"> 
				<option value="0">Todas as cidades</option>
			@foreach($cities as $city)
				<option value="{{ $city->city_name }}">{{ $city->city_name }}</option>
			@endforeach 
		</select>	
	</div>
	<div class="col-md-3" style="margin:20px;">  
		<select id="fields" class="easyui-combobox form-control" name="state"> 
				<option value="0">Todos os ramos</option>
		</select>	
	</div>
</div>
{!! Form::close() !!}

<hr></hr> 

<div id="load" data-load='{{ $jsonified }}'></div> 

<script> 
	$(document).ready(function(){		
	  $('#cities').change(function(){
	    var value = $(this).val();
	    var load = $('#load').data('load');
	    console.log(load);
	    var lists = "";
	    for(var city in load){
	      if(value == city){
	        load[city].forEach(function(entry){
	          lists += "<option>"+entry.name+"</option>";
	        });
	      }
	    }
	    $('#fields').html(lists);
	  });
	});
</script>

@stop
