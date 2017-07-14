@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Listagem de produtos</h1>
        <?php foreach ($produtos as $p): ?>
            <listagem nome="<?= $p->nome ?>"
             valor="<?= $p->valor ?>" 
             descricao="<?= $p->descricao ?>"
             quantidade="<?= $p->quantidade ?>"
             link="/produtos/mostra/<?= $p->id ?>"
             ></listagem> 
        <?php endforeach ?>
    </div>
@endsection
