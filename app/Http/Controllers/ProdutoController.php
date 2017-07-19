<?php namespace estoque\Http\Controllers;

use Illuminate\Support\Facades\DB;
use estoque\Produto;
use Request;

class ProdutoController extends Controller {

    public function lista(){

        $produtos = Produto::all();

        return view('listagem')->with('produtos', $produtos);
    }
    public function mostra($id){
        $produto = Produto::find($id);
        if(empty($produto)) {
            return "Esse produto não existe";
        }
        return view('produto.detalhes')->with('p', $produto);
    }
    public function remove($id){
        $produto = Produto::find($id);
        $produto->delete();
        return redirect()
            ->action('ProdutoController@lista');
    }
    public function novo(){
        return view('produto.formulario');
    }
    public function adiciona(){

        $produto = new Produto(Request::all());
        $produto->save();

        return redirect()
            ->action('ProdutoController@lista')
            ->withInput(Request::only('nome'));
    }
    public function listaJson(){
        $produtos = Produto::all();
        return response()->json($produtos);
    }
}
