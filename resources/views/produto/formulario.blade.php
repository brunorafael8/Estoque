@extends('layouts.app')

@section('content')
	@if (count($errors) > 0)
		<div class="alert alert-danger">
			<ul>
				@foreach ($errors->all() as $error)
					<li>{{ $error }}</li>
				@endforeach
			</ul>
		</div>
	@endif
	<form action="/produtos/adiciona" method="post">

	<input type="hidden" 
		name="_token" value="{{{ csrf_token() }}}" />

	<div class="form-group">
		<label>Nome</label>
		<input name="nome" class="form-control"/>
	</div>
	<div class="form-group">
		<label>Descricao</label>
		<input name="descricao" class="form-control"/>
	</div>
	<div class="form-group">
		<label>Valor</label>
		<input name="valor" class="form-control"/>
	</div>
	<div class="form-group">
    <label>Tamanho</label>
    <input name="tamanho" class="form-control" />    
	</div>
	<div class="form-group">
		<label>Categoria</label>
		<select name="categoria_id" class="form-control">
				@foreach($categorias as $c)
				<option value="{{$c->id}}">{{$c->nome}}</option>
				@endforeach
		</select>
	</div>
	<div class="form-group">
		<label>Quantidade</label>
		<input type="number" 
		name="quantidade" class="form-control"/>
	</div>
	<button type="submit" 
		class="btn btn-primary btn-block">Adicionar</button>
	</form>
@endsection
