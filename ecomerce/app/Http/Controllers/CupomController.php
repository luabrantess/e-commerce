<?php

namespace App\Http\Controllers;

use App\Models\Cupom;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent;
use Illuminate\Support\Facades\DB;

class CarrinhoController extends Controller
{
    public function store(Request $request)
    {
        $cupom = new Cupom();
        $cupom->nome = $request->input('nome');
        $cupom->desconto = $request->input('desconto');
        
        $cupom->save(); 

    }

    public function validation(Request $request)
    {
        
        $cupom = $request->input('cupom');

        $cupom = Cupom::where('cupom', $cupom)->first();

        if ($cupom) {
            return response()->json(['message' => 'Cupom válido']);
        } else {
            return response()->json(['message' => 'Cupom inválido']);
        }
    }

    public function destroyCarrinho($id) 
    {
        $cupom = Cupom::find($id);
        $cupom->delete(); 

        return redirect()->route('/');
    }
}