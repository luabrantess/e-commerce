<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Produto;

class ProductsController extends Controller
{

    public function store(Request $request){


        $produto = new Produto();
        $produto->nome = $request->input('nome');
        $produto->descricao = $request->input('descricao');
        $produto->valor = $request->input('valor');
        
        $produto->save();

        return redirect('/');
    }

    public function index()
    {
        $produto = Produto::all();
        
        
        return response()->json($produto);
    }

    public function destroyProduto($id) 
    {
        $produto = Produto::find($id);
        $produto->delete(); 

        return redirect()->route('/carrinho');
    }
}
