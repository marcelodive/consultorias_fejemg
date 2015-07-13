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
		var names = [];
		var uniqueNames = [];
		lists = lists + "<option value=\"Todos os Ramos\">Todos os Ramos</option>";
		for(var city in load){
			load[city].forEach(function(entry){
				names.push(entry.name);        		
		    });
		}
		$.each(names, function(i, el){
		    if($.inArray(el, uniqueNames) === -1) {
		    	 lists = lists + "<option value=\""+el+"\">"+el+"</option>";
		   		 uniqueNames.push(el);
		    }
		});	
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
	  

	  $('#fields' || '#cities').change(function(){
		  load = $('#servicesData').data('load');
		    var value = $(this).val();
		    lists = "";
			var names = [];
			var uniqueNames = [];
		    for(var field in load){
		      if(value == field){
		        load[field].forEach(function(entry){
				  names.push(entry.name); 
		        });
		      }
		      else if (value == "Todos os Ramos"){
    			  lists = "";
		    	  load[field].forEach(function(entry){
		    		  names.push(entry.name); 
			      });
		      }
		    }

		    $.each(names, function(i, el){
			    if($.inArray(el, uniqueNames) === -1) {
			    	 lists = lists + "<option value=\""+el+"\">"+el+"</option>";
			   		 uniqueNames.push(el);
			    }
			});
		    
		    $('#services').html(lists);
		  });	  
	});
</script>

@stop
