@extends('template')

@section('content')
	<h1>Inscrever-se</h1>
	<hr></hr>
	
	{!! Form::open(['url' => 'usuario/inscricao']) !!}
		<div class="form-group">
			{!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Nome']) !!} <br>
			{!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'Email']) !!} <br>
			{!! Form::password('password', ['class' => 'form-control', 'placeholder' => 'Senha']) !!} <br>
			{!! Form::text('phone', null, ['class' => 'form-control', 'placeholder' => 'Telefone']) !!} <br>
			<br>
			{!! Form::submit('Inscrever-se!', ['class' => 'btn btn-primary form-control']) !!} 
		</div>
	{!! Form::close() !!}

	<br>
@stop