@extends('template')

@section('content')
	<h1>{{ $service }}</h1>
	<hr></hr>
	<br>

	<div class="container row">	
	@foreach($result as $je)
				
			<div class="col-md-4 thumbnail" style="margin:5px;">	
				<center><p style="color:#ab0f3a;"><strong>{{ $je->name }}</strong></p></center><br />
				<div class="row">
					<div class="col-md-4">
						<img style="width: 100%;"
						src="{{ $je->image }}" alt="{{ $je->abbreviation }}">
					</div>
					<div class="col-md-8">
						<table>
							<tbody>
								<tr>
									<th>Email: </th>
									<td>{{ $je->email }}</td>
								</tr>
								<tr>
									<th>Telefone: </th>
									<td>{{ $je->phone }}</td>
								</tr>
								<tr>
									<th>Site: </th>
									<a href="{{ $je->website }}"><td>{{ $je->website }}</td></a>
								</tr>
								<tr>
									<th>Município: </th>
									<td>{{ $je->city_name }}</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		
	@endforeach 
	</div>
	<br />

@stop