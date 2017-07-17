@extends('layouts.app')

@section('content')
 @if(empty($produtos))
  <div>Você não tem nenhum produto cadastrado.</div>

   @else
    <div class="container">
        <h1>Listagem de produtos</h1>
        @foreach ($produtos as $p)
            <listagem 
			    classe="{{$p->quantidade<=1 ? 'danger' : '' }}"
            	nome="{{$p->nome}}"
             	descricao="{{$p->descricao}}"
             	link="/produtos/mostra/{{$p->id}}"
             	quantidade="{{$p->quantidade}}"
             	valor="{{$p->valor}}" 
             ></listagem> 
        @endforeach
    </div>
    @if(old('nome'))
    <div class="alert alert-success">
        <strong>Sucesso!</strong> 
            O produto {{ old('nome') }} foi adicionado.
    </div>
    @endif
    @endif
@endsection
