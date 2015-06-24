@extends('template') 

@section('content')
<link rel="stylesheet" type="text/css"
	href="/js/jquery-easyui-1.4.2/themes/bootstrap/easyui.css">
<link rel="stylesheet" type="text/css"
	href="/js/jquery-easyui-1.4.2/themes/icon.css">
<script type="text/javascript"
	src="/js/jquery-easyui-1.4.2/jquery.min.js"></script>

<h1>Pesquise</h1>
<hr></hr>
<br>

{!! Form::open() !!}
<div class="container row">
	<div class="col-md-3" style="margin:20px;">
		<select id="cities" class="easyui-combobox form-control" name="city_selected"> 
				<option value="Todas as Cidades">Todas as Cidades</option>
			@foreach($cities as $city)
				<option value="{{ $city->city_name }}">{{ $city->city_name }}</option>
			@endforeach 
		</select>	
	</div>
	<div class="col-md-3" style="margin:20px;">  
		<select id="fields" class="easyui-combobox form-control" name="field_selected"> 
		</select>	
	</div>
	<div class="col-md-3" style="margin:20px;">  
		<select id="services" class="easyui-combobox form-control" name="service_selected"> 
		</select>	
	</div>
	<div class="col-md-1" style="margin:20px;">  
		<input class="btn btn-default" type="submit" value="Pesquisar">
	</div>	
</div>
{!! Form::close() !!}

<hr></hr> 

<div id="fieldsData" data-load='{{ $jsonifiedCities }}'></div> 
<div id="servicesData" data-load='{{ $jsonifiedJEs }}'></div>

<script> 
	$(document).ready(function(){		
		var load = $('#fieldsData').data('load');
		var lists = "";
		lists = lists + "<option value=\"Todos os Ramos\">Todos os Ramos</option>";
		for(var city in load){
			load[city].forEach(function(entry){
        		lists = lists + "<option value=\""+entry.name+"\">"+entry.name+"</option>";
		    });
		}
		$('#fields').html(lists);	

		load = $('#servicesData').data('load');
		lists = "";
// 		lists = lists + "<option value=\"Todos os Serviços\">Todos os Serviços</option>";
		for(var field in load){
			load[field].forEach(function(entry){
        		lists = lists + "<option value=\""+entry.name+"\">"+entry.name+"</option>";
		    });
		}
		$('#services').html(lists);	
		
	  $('#cities').change(function(){
		load = $('#fieldsData').data('load');
	    var value = $(this).val();
	    lists = "";
	    for(var city in load){
	      if(value == city){
	        load[city].forEach(function(entry){
	          lists = lists + "<option value=\""+entry.name+"\">"+entry.name+"</option>";
	        });
	      }
	      else if (value == "Todas as Cidades"){
	    	  load[city].forEach(function(entry){
    			  lists = "";
    			  lists = lists + "<option value=\"Todos os Ramos\">Todos os Ramos</option>";
		          lists = lists + "<option value=\""+entry.name+"\">"+entry.name+"</option>";
		      });
	      }
	    }
	    $('#fields').html(lists);
	  });

	  $('#fields').change(function(){
		  load = $('#servicesData').data('load');
		    var value = $(this).val();
		    lists = "";
		    for(var field in load){
		      if(value == field){
		        load[field].forEach(function(entry){
		          lists = lists + "<option value=\""+entry.name+"\">"+entry.name+"</option>";
		        });
		      }
		      else if (value == "Todos os Ramos"){
		    	  load[field].forEach(function(entry){
	    			  lists = "";
// 	    			  lists = lists + "<option value=\"Todos os Serviços\">Todos os Serviços</option>";
			          lists = lists + "<option value=\""+entry.name+"\">"+entry.name+"</option>";
			      });
		      }
		    }
		    $('#services').html(lists);
		  });	  
	});
</script>

@stop
