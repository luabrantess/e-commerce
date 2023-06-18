<?php

namespace App\Http\Controllers;

use App\Models\Carrinho;
use Illuminate\Http\Request;
use App\Models\Estagiario;
use Illuminate\Database\Eloquent;
use Illuminate\Support\Facades\DB;

class CarrinhoController extends Controller
{
    public function store(Request $request)
    {
        $carrinho = new Carrinho();
        $carrinho->produto = $request->input('produto');
        $quantidade = $request->input('quantidade');
        $carrinho->valor = $request->input('valor');
        
        
        $carrinho->save(); 

    }

    public function destroyCarrinho($id) 
    {
        $carrinho = Carrinho::find($id);
        $carrinho->delete(); 

        return redirect()->route('/');
    }

    public function index()
    {
        $carrinho = Carrinho::all();
        
        
        return response()->json($carrinho);
    }

    public function adicionarItem(Request $request)
    {
        $produto = $request->input('produto');
        $quantidade = $request->input('quantidade');

        // Recuperar o carrinho de compras atual da sessão
        $carrinho = $request->session()->get('carrinho', []);

        // Adicionar o novo item ao carrinho
        $carrinho[$produto] = $quantidade;

        // Armazenar o carrinho atualizado na sessão
        $request->session()->put('carrinho', $carrinho);

        // Retornar uma resposta adequada
        return response()->json(['message' => 'Item adicionado ao carrinho com sucesso']);
    }

}