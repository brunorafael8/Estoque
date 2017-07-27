<?php

namespace estoque\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProdutosRequest extends FormRequest{
    public function authorize(){
        return true;
    }
    public function rules(){
        return [
          'nome' => 'required|max:100',
          'descricao' => 'required|max:255',
          'valor' => 'required|numeric',
          'tamanho' => 'required|numeric',
          'quantidade' => 'required|numeric'
        ];
    }
    public function messages(){
      return [
          'required' => 'O :attribute é obrigatório',
      ];
    }
}
